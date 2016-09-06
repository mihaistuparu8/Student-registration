<?php
/**
 * Sample layout
 */

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;
use Helpers\Session;


//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<?php
	//hook for plugging in meta tags
	$hooks->run('meta');
	?>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/Core/Config.php ?></title>

	<!-- CSS -->
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
		'https://code.jquery.com/ui/1.12.0-rc.1/themes/smoothness/jquery-ui.css',
		Url::templatePath() . 'css/style.css',
		'https://fonts.googleapis.com/css?family=Open+Sans',
		
	));

	//hook for plugging in css
	$hooks->run('css');
	?>

	

</head>
<body>

	<script src="<?php echo Url::templatePath(); ?>js/jquery-2.1.4.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js"></script>
	<script src="<?php echo Url::templatePath(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo Url::templatePath(); ?>js/bootstrap-formhelpers-countries.en_US.js"></script>
	<script src="<?php echo Url::templatePath(); ?>js/bootstrap-formhelpers-countries.js"></script>
	<script src="<?php echo Url::templatePath(); ?>js/script.js"></script>

<?php
//hook for running code after body tag
$hooks->run('afterBody');
?>

<?php 

	$message = Session::pull('message');
	if (is_array($message)) {
		if ($message['type'] == 'error') {
			$type = 'alert-danger';
		}
		elseif ($message['type'] == 'success') {
			$type ='alert-success';
		}
		$html = "<div class='alert {$type}' role='alert'>";
		$html .= $message['content'];
		$html .= " <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
		$html .= "</div>";
		echo $html;
	}
 ?>