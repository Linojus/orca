<?php
/**
 * Created by PhpStorm.
 * User: Linas
 * Date: 2018-07-04
 * Time: 16:29
 */

include("header.php");

$headerText = "Comment form";
$headerReply = "Clicked Reply";

//include("controller.php");

$emailError = $nameError = "";

?>


<div class="container">

    <hr>
    <h1 class="text-center" id="header"> <?php echo $headerText ?> </h1>
    <hr>

    <div id="main-form">
        <?php include "main_form.php"; ?>
    </div>



    <hr>

    <div class="container" >

        <ul class="list-unstyled">

            <div id="comment_section">
                <?php include("fetch_comment.php"); ?>
            </div>

        </ul>

    </div>

    <hr>


</div>

