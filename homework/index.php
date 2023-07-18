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
<p>we hope you enjoy your stay</p>
</div>
<div class="lower-title">
<h1>gallery</h1>
</div>
<div class="art">
<h2>takemi zone</h2>
<img src="action.jpeg"/>
<img src="takemi.jpeg">
</div>
</body>
</html>