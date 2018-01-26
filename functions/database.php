<?php
class database {
  function getDatabase()
  {
    $user = "root";
    $pass = "";

    $db = new PDO('mysql:host=localhost;dbname=db_adminify', $user, $pass);
  return $db;
  }
  function sendQuery($query = "INSERT INTO `login` (`id`, `email`, `password`, `title`, `content`) VALUES (NULL, 'sven-tjeerd-sma@hotmail.com', 'svenleon', 'about page!', 'this is the about page LOL');")
  {
    $db = self::getDatabase();
    $stmt = $db -> prepare($query);
    $stmt -> execute();
  }
  function loginUser($username,$password)
  {

    $db = self::getDatabase();
    $query = "SELECT * from `login` WHERE `email` = '$username' AND `password` = '$password';";
    $stmt = $db -> prepare($query);
    $stmt -> execute();

    if($result = $stmt->fetch(PDO::FETCH_ASSOC))
    {

      if($result){
        $_SESSION['username'] = $username;

        echo "hij is hier gebugt! : ".var_dump($result);
        header("Location: index.php");
      }
      else
      {
        print_r($result);
      echo "geen gebruiker met de naam: ".$username;
      }


    }
  }
  function registerUser($username,$password)
  {
    try{
    $db = self::getDatabase();
    $query = "INSERT INTO `login` (`id`, `email`, `password`, `title`, `content`) VALUES (NULL, '{$username}', '{$password}', 'about page!', 'this is the about page LOL');";
    $stmt = $db -> prepare($query);
    $stmt -> execute();
    echo $query;
  }catch(Exception $e)
  {
     $e->getMessage();
  }
  }
}
 ?>
