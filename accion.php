
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["uname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["remember"])) {
    $checkErr = "Check is required";
  } else {
    $check = test_input($_POST["remember"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
echo "<br>";
echo $check;
?>