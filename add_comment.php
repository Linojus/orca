<?php
/**
 * Created by PhpStorm.
 * User: Linas
 * Date: 2018-07-05
 * Time: 12:58
 */


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //var_dump($_POST);

    include("controller.php");

    if($err == false) {

        include ("config.php");

        $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

// prepare and bind
        $stmt = $conn->prepare("INSERT INTO comments (name, email, body, parent_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name,$email, $body, $parent_id);

// set parameters and execute

        $name = $name;
        $email = $email;
        $body = $comment;
        $parent_id = (int)$parent_id;

        $stmt->execute();

        $stmt->close();
        $conn->close();
    }

    $error = '<label class="text-success">Comment Added</label>';

    if($emailError != "") {
        $emailError = '<div class="alert alert-danger mt-1 p-2" role="alert">'.$emailError.'</div>';
    }
    if($nameError != "") {
        $nameError = '<div class="alert alert-danger mt-1 p-2" role="alert">'.$nameError.'</div>';
    }
    if($commentError != "") {
        $commentError = '<div class="alert alert-danger mt-1 p-2" role="alert">'.$commentError.'</div>';
    }

    $data = array(
        'error'  => $error,
        'nameError' => $nameError,
        'emailError' => $emailError,
        'commentError' => $commentError,
        'parent_idError' => $parent_idError
    );

    echo json_encode($data);
}

?>
