
<?php
class View {

    public static function render(string $view, array $data = []): void {
        extract($data, EXTR_SKIP); // EXTR_SKIP does not overwrite existant variables
       
        $file = 'view/'.$view.'.php';

        if (!file_exists($file)) {
            http_response_code(500);
            echo "Error: View '$view' not found.";
            error_log("View render failed: $file does not exist");
            return; // stop execution for this view
        }
        try {
            require $file;
        } catch (Throwable $e) {
            http_response_code(500);
            echo "Error loading view '$view'.";
            error_log($e->getMessage());
        }
    }

}
?>