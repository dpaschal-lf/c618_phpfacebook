<?php

require_once('src/Facebook/autoload.php');

$fb = new Facebook\Facebook([
  'app_id' => '867923133407306', // Replace {app-id} with your app id
  'app_secret' => 'b98643efc21c7a665184b928972fde3f',
  'default_graph_version' => 'v3.1',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['public_profile','email','user_photos']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>