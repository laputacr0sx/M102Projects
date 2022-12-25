<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link rel="stylesheet" href="./css/index.css"/>
    <title>SPACE Catering Company</title>
  </head>
  <header>
    <div class="headerSection">
      <img class="headerLogo" src="./images/logo.png" alt="HKUSPACE LOGO" />
      <p class="headerTitle">HKU SPACE Catering Company</p>
    </div>

    <form action="#" class="loginSection" method="post">

      <div class="loginCredentials">
        <label for="usr">Username:</label
        ><input class="inputField" type="text" name="usr" id="usr" />
      </div>
      <div class="loginCredentials">
        <label for="pwd">Password:</label
        ><input class="inputField" id="pwd" name="pwd" type="password" />
      </div>

        <?php
        include "./include/db_connect.php";

        $conn = OpenCon();

        echo "Connected Successfully";

        CloseCon($conn);

        // Given password
        if (!empty($_POST)) {
            $password = $_POST["pwd"];
        } else {
            $password = "";
        }
        // Validate password strength
        $uppercase = preg_match("@[A-Z]@", $password);
        $lowercase = preg_match("@[a-z]@", $password);
        $number = preg_match("@[0-9]@", $password);
        $specialChars = preg_match("@[^\w]@", $password);

        if (
            !$uppercase ||
            !$lowercase ||
            !$number ||
            !$specialChars
            //    strlen($password) < 8
        ) {
            echo "<div class='errorMessage'> Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>";
        } else {
            echo "Strong password.";
        }
        ?>

        <input type="submit" value="LogIn" />
    </form>
  </header>
  <body></body>
  <footer class="footerSection">&copy;</footer>
</html>
