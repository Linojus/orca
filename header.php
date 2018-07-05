<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Orca Comment form task">
    <meta name="author" content="Linas Juodvalkis">

    <title>Comment form task</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <style>
        hr {

            border-color: rebeccapurple;
            border-width: 1px;
            border-style: double;
            background-color: black;
            height: 2px;
        }

        label {
            text-align: right;
        }

        .comment {
            background-color: lightgray;
        }

    </style>


    <script>
        $(document).ready(function(){


            $('.comment_form').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serializeArray();
                $.ajax({
                    url:"add_comment.php",
                    method:"POST",
                    data:form_data,
                    dataType:"JSON",
                    //async: false,
                    success:function(data)
                    {
                        if(data.error != '')
                        {
                            //alert('Successfully called');
                            $('.comment_form')[0].reset();
                            $('#comment_message').html(data.error);
                            $('#error-name').html(data.nameError);
                            $('#error-email').html(data.emailError);
                            $('#error-body').html(data.commentError);
                            //$('#error-parent_id').html(date.parent_idError);
                            //$('#parent_id').val('0');
                            load_comment();


                        } else {
                           // load_comment();
                            $('#comment_message').html("err");
                        }
                    },
                    error:function(jqxhr, status, exception) {
                        alert('Exception:', exception);
                    }
                })
            });


            load_comment();

            function load_comment()
            {
                $.ajax({
                    url:"fetch_comment.php",
                    method:"POST",
                    success:function(data)
                    {
                        $('#comment_section').html(data);
                    }
                })
            }

            $(document).on('click', '.reply', function(event){
                event.preventDefault();
                var comment_id = $(this).attr("id");

                //load_main_form();
                load_reply_form(comment_id);

                return false;

            });

            function load_main_form() {
                $('.reply-form-container').html('');
                $('#main-form').load('main_form.php');
            }

            function load_reply_form(reply_id) {

                $('#main-form').html('');
                $('.reply-form-container').html('');

                //$('#comment_message').html(reply_id);
                $('#reply-form-' + reply_id ).load('main_form.php', function () {
                    $('#parent_id').val(reply_id);
                });

            }



        });
    </script>


</head>


