<?php
/**
 * Created by PhpStorm.
 * User: Linas
 * Date: 2018-07-04
 * Time: 21:44
 */


//pasiremta w3schools.com pavyzdžiu

// define variables and set to empty values
$nameError = $emailError = $commentError = $parent_idError = "";
$name = $email = $comment = $parent_id = "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $err = false;

    if (empty($_POST["name"])) {
        $nameError = "Name is required";
        $err = true;
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError = "Only letters and white space allowed";
            $err = true;
        }
    }

    if (empty($_POST["email"]) || $_POST["email"] == "") {
        $emailError = "Email is required";
        $err = true;
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        // naudojamas PHP built-in validatorius
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
            $err = true;
        }
    }

    if (empty($_POST["body"])) {
        $commentError = "Comment is required";
        $err = true;
    } else {
        $comment = test_input($_POST["body"]);
    }


    if (empty($_POST["parent_id"]) && !strlen($_POST["parent_id"])) {
        $parent_idError = "Parent ID is empty";
        $err = true;
    } else {
        $parent_id = intval(test_input($_POST["parent_id"]));

        if (!filter_var($parent_id, FILTER_VALIDATE_INT) && $parent_id != 0) {
            $parent_idError = "Parent ID is not ant Integer";
            $err = true;
        }
    }



//}

// sutvarko duomenis
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>