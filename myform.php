<?php
require_once 'includes.php';
/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // $firstname =($_POST["firstname"]);
  // $surname = ($_POST["surname"]);
  // $email = ($_POST["email"]);
  // $title = ($_POST["title"]);
  // $username = ($_POST["username"]);
  // $password = ($_POST["password"]);
}

?>
<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $data = $_POST['username'] . ',' . $_POST['password'] . ',' . $_POST['email'] . ',' . $_POST['title'] . ',' . $_POST['firstname'] .  ',' . $_POST['surname'] . "\n";
    $ret = file_put_contents('users.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "<h2>Thank you for the information!</h2>";
         header("refresh:3; url=login.php");
    }
}
else {
   die('no post data to process');
}
 ?>
