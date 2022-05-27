<?php
require_once ("partision/header.php");
?>

<br></br>
<div class="container">
<?php 

session_start();

$username=$_POST["user"];
$id_name=$_POST["id"];
$address=$_POST["address"];
$mail=$_POST["mail"];
$password=$_POST["pass"];
$pass_uppercase=preg_match("@[A-Z]@", $password);
$pass_lowercase=preg_match("@[a-z]@", $password);
$pass_number=preg_match("@[0-9]@", $password);
$pass_specialchar=preg_match("@[^/w]@", $password);

/*
        username cant contain any number
*/
if(ctype_alpha($username)) {
    if(isset($username)) {
        $_SESSION["oldname"]=$username;
        echo "Your Name is :". $username . "<br> </br>";
    }
}

else {
    $_SESSION["name_error"]="username required & can't contain any number or special Char!";
    header("location: from.php");
}

// =======> ID & ADDRESS PART START
if(ctype_digit($id_name)) {
    if(isset($id_name)) {
        $_SESSION["oldid"]=$id_name;
        echo "Your ID Number is :". $id_name . "<br> </br>";
    }
}

else {
    $_SESSION["id_error"]="Oops,something wasn't right!";
    header("location: from.php");
}

if($address) {
    $_SESSION["oldadd"]=$address;
    echo "Your Permanent Address is :". $address . "<br> </br>";
}

else {
    $_SESSION["address_error"]="please provide your permanent address";
    header("location: from.php");
}

// =======> ID & ADDRESS PART END

/*
        mail should be valid
*/
if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    if(isset($mail)) {
        $_SESSION["oldmail"]=$mail;
        echo "Your E-mail Address is :". $mail . "<br> </br>";
    }
}

else {
    $_SESSION["mail_error"]="please enter your mail address in formet: yourname@example.com";
    header("location: from.php");
}

/*
        password should be more then 8 char and alphanumbaric.
*/
if(strlen($password) >=8) {
    if($pass_uppercase) {
        if($pass_lowercase) {
            if($pass_number) {
                if($pass_specialchar) {
                    if($password) {
                        $_SESSION["oldpass"]=$password;
                        echo "Your Password is :". $password . "<br> </br>";
                    }
                }

                else {
                    $_SESSION["pass_error"]="**weak password**"." password should be a one special charecter!";
                    header("location: from.php");
                }
            }

            else {
                $_SESSION["pass_error"]="**weak password**"." password should be a one number or integer";
                header("location: from.php");
            }
        }

        else {
            $_SESSION["pass_error"]="**weak password**"." password should be a one lowercase";
            header("location: from.php");
        }
    }

    else {
        $_SESSION["pass_error"]="**weak password**"." password should be a one uppercase";
        header("location: from.php");
    }
}

else {
    $_SESSION["pass_error"]="**weak password**"." password should be more then 8 char!";
    header("location: from.php");
}

?>
</div>

<?php
require_once ("partision/footer.php");
?>