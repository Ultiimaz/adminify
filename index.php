<?php
session_start();
include 'bootstrap.php';
bootstrap();

function handleLogin()
{
  $db = new database();
  $db->loginUser($_POST['username'],$_POST['password']);
}
function handleRegister()
{
  $db = new database();
  $db->registerUser($_POST['username'],$_POST['password']);
}



if(!empty($_SESSION['username']))
{
  include 'pages/page-dashboard.php';
  getDashboard();
  if(isset($_POST['logout']))
  {
    unset($_SESSION['username']);
  }
}else
        if(isset($_POST['login'])){
          if(!empty($_POST['username']) && !empty($_POST['password']))
          {
            handleLogin();
          }

        }else if(isset($_POST['register']))
        {
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
          handleRegister();

        }


    }
    else      // POST IS EMPTY && SESSION IS EMPTY!
    {
      include 'pages/page-homepage.php';
      echo getHomepage();
    }
 ?>
