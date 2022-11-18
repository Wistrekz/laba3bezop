<?php
session_start();
 
if($_GET['do'] == 'logout')
{
    unset($_SESSION['name']);
      $new_url1 = 'http://auth.php';
    header('Location: '.$new_url1);
    session_destroy();
    exit;
  
}
 
if(!$_SESSION['name'])
{
    $new_url1 = 'http://auth.php';
    header('Location: '.$new_url1);
    exit;
    
}
?>