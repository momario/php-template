<!DOCTYPE html>
<?php
include('core/config.php');
include('core/url.php');
include('core/database.php');
?>
<html>
	<head>
		<title><?php echo config::$project_title; ?></title>
		<link rel="stylesheet" href="<?php echo '/'.config::$url_folder_name.'/css/style.css'; ?>">
		<script type="text/javascript" src="<?php echo '/'.config::$url_folder_name.'/js/main.js'; ?>"></script>
	</head>
	<body>
		<?php
		class app {

			public function run() {
				url::run();
			}//END

		}//END

		//run the application
		app::run();
		?>
	</body>
</html>