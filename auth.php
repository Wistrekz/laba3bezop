<?php
session_start();
//connect
include ("connect.php");
//log_out
include ("logout.php");

//function
if (isset($_POST['login1'])) {
        $username = $_POST['username'];
        $password = md5(trim($_POST['password']));
        $query = "SELECT login, pass FROM `users` WHERE login= '$username' AND pass = '$password'";
        $sql = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($sql) == 1)
        {
                $_SESSION['name'] = $username;
                $new_url = 'http://page.php';
                header('Location: '.$new_url);
            
        }
        else{
             echo("Неверные данные");
        }
        $mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action=""> 
    <label>Логин</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    <label>Пароль</label>
    <input type="password" name="password" required />
  <button type="submit" name="login1" value="login1">Авторизация</button>
</form>
</body>
</html>