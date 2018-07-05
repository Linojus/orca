<?php
/**
 * Created by PhpStorm.
 * User: Linas
 * Date: 2018-07-05
 * Time: 14:10
 */

include ("config.php");

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("SELECT * FROM comments WHERE parent_id = '0' ORDER BY created_at DESC");
$stmt->execute();

$result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$output = '';

foreach($result as $row)
{
    ob_start();
    include("fetch_parent_comment.php");
    $buffer = ob_get_clean();

    $output .= $buffer;

}



function get_reply_comment($connect, $parent_id = 0)
{
    $query = "
 SELECT * FROM comments WHERE parent_id = '".$parent_id."'
 ";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    $count = $statement->affected_rows;

    if($count > 0)
    {
        foreach($result as $row)
        {
            ob_start();
            include("fetch_reply.php");
            $buffer = ob_get_clean();

            $output .= $buffer;
        }
    }
    return $output;
}


echo $output;


$stmt->close();
$conn->close();

//return $output;

?>
