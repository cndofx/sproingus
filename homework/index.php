<?php
session_name('sesh');
session_set_cookie_params(0, '/', '.sproingus.com');
session_start();
if (!isset($_SESSION['loggedin'])) {
   header('Location: bad.html');
   exit;
echo 'hi';
echo $_SESSION['loggedin'];
// If the user is not logged in redirect to the login page...
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./secret.css">
</head>
<body>
<div class="upper-title">
<h1>secret art</h1>
</div>
<div class="text-box">
<p><b>we hope you enjoy your stay</b></p>
</div>
<div class="lower-title">
<h1>gallery</h1>
</div>
<div class="art">
<h2>the zone</h2>
</div>
<img src="/img/action.jpeg"/>
<img src="/img/takemi.jpeg">
</body>
</html>