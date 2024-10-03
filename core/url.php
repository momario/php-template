<?php
class Url {

	public function redirect($location): void {
		header("Location: $location");
		exit();
	}
	
	public function loadRouter(): void {
		$parsedUrl = parse_url($_SERVER['REQUEST_URI']);
	
		// Allow only the 'path' component in the URL
		$allowedComponents = ['path'];
		$urlComponents = array_keys($parsedUrl);
	
		if (array_diff($urlComponents, $allowedComponents)) {
			http_response_code(400); // Bad Request
			echo "Error: Invalid URL components detected.";
			exit();
		}
	
		// Get the path and remove leading/trailing slashes
		$urlPath = trim($parsedUrl['path'], '/');
	
		// Split the path into segments
		$urlSegments = explode('/', $urlPath);
	
		// Check if the first segment matches the folder name
		if (empty($urlSegments) || $urlSegments[0] !== Config::getConfig('URL_FOLDER_NAME')) {
			http_response_code(404); // Not Found
			echo "Error: Invalid folder name in URL.";
			exit();
		}
	
		// Remove the folder name segment
		array_shift($urlSegments);
	
		// Ensure that a controller name is provided
		if (!isset($urlSegments[0])) {
			http_response_code(404); // Not Found
			echo "Error: No controller specified.";
			exit();
		}
	
		$controllerName = $urlSegments[0];
	
		// Validate the controller name
		if (!preg_match('/^\w+$/', $controllerName)) {
			http_response_code(400); // Bad Request
			echo "Error: Invalid controller name.";
			exit();
		}
	
		// Build the controller file path
		$controllerFile = Config::getConfig('PATH_CONTROLLER') . $controllerName . '.php';
	
		// Check if the controller file exists
		if (!file_exists($controllerFile)) {
			http_response_code(404); // Not Found
			echo "Error: Controller file not found.";
			exit();
		}
	
		// Include the controller file
		require_once $controllerFile;
	
		// Check if the controller class exists
		if (!class_exists($controllerName)) {
			http_response_code(500); // Internal Server Error
			echo "Error: Controller class not found.";
			exit();
		}
	
		// Instantiate the controller class
		$controller = new $controllerName();
	
		// Determine the method name, defaulting to 'index' if not provided
		$methodName = $urlSegments[1] ?? 'index';
	
		// Validate the method name
		if (!preg_match('/^\w+$/', $methodName)) {
			http_response_code(400); // Bad Request
			echo "Error: Invalid method name.";
			exit();
		}
	
		// Check if the method exists in the controller
		if (!method_exists($controller, $methodName)) {
			http_response_code(404); // Not Found
			echo "Error: Method not found in controller.";
			exit();
		}
	
		// Prevent access to methods starting with an underscore (optional, for security)
		if (strpos($methodName, '_') === 0) {
			http_response_code(403); // Forbidden
			echo "Error: Access to private method denied.";
			exit();
		}
	
		// Collect any additional parameters
		$params = array_slice($urlSegments, 2);
	
		// Use ReflectionMethod to get method parameter information
		$reflector = new ReflectionMethod($controller, $methodName);
		$expectedParams = $reflector->getParameters();
		$requiredParamCount = 0;
	
		// Count the number of required parameters
		foreach ($expectedParams as $param) {
			if (!$param->isOptional()) {
				$requiredParamCount++;
			}
		}
	
		$maxParams = count($expectedParams);
		$providedParamCount = count($params);
	
		// Check if the provided parameters exceed the maximum number of parameters
		if ($providedParamCount > $maxParams) {
			http_response_code(400); // Bad Request
			echo "Error: Too many parameters provided.";
			exit();
		}
	
		// Check if the number of provided parameters is less than the required number
		if ($providedParamCount < $requiredParamCount) {
			http_response_code(400); // Bad Request
			echo "Error: Not enough parameters provided.";
			exit();
		}
	
		// Call the controller method with parameters
		call_user_func_array([$controller, $methodName], $params);
	}
	
}
?>