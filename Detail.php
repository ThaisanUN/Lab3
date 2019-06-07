
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>
<form action="" method="post" >
<div><h1>Welcome , You have successfully logged in!</h1><br>
Click to <input type="submit" name="logout" value="Logout" class="logout-button">.</div>
<?php
echo $_POST["logout"];
?>
</form>

<?php
$file =  fopen("Store.txt","r") or die("can't open!");
$line = fgets($file);
$array = explode(";",$line);
$Email = trim($array[0]);
$pwd = trim($array[1]);
echo $Email.$pwd."<br>";
fclose($file);
if($_POST["logout"] == 1) {

	$_SESSION["auth"] = "";

	session_destroy();
	header("Location:Login.php);
}
else {
	# code...
}


?>
</body>
</html>