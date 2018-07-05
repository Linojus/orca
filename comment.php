<?php
/**
 * Created by PhpStorm.
 * User: Linas
 * Date: 2018-07-04
 * Time: 21:40
 */
?>


<li class="media mt-2">

    <div class="media-body">
        <div class="border rounded comment p-3">
            <div class="row mb-1">
                <div class="col">
                    <strong>Name</strong> Date
                </div>
                <div class="col-1">
                    <a href="">
                        Reply
                    </a>
                </div>
            </div>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>



        <ul class="list-unstyled">

            <?php for($i = 2; $i <= 3; $i++) {

                include("reply.php");

            } ?>

        </ul>

    </div>


</li>
