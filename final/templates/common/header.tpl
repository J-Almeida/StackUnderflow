<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{$BASE_URL}css/bootstrap.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<script src="{$BASE_URL}javascript/jquery-2.1.3.min.js"></script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body>
  <div id="fb-root"></div>