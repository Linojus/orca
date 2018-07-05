
<li class="media mt-4">

    <div class="media-body">
        <div class="border rounded comment p-3">
            <div class="row mb-1">
                <div class="col-sm">
                    <strong><?php echo $row["name"]; ?></strong> <?php echo $row["created_at"]; ?>
                </div>
                <div class="col-2">
                    <a class="reply" href="#" onclick="return false;" id="<?php echo $row['id'] ?>">
                        Reply
                    </a>
                </div>
            </div>
            <?php echo $row["body"]; ?>
        </div>


        <div class="reply-form-container" id="reply-form-<?php echo $row['id'] ?>"></div>

        <ul class="list-unstyled">

            <?php
               // $output .= get_reply_comment($conn, $row["id"]);
                echo get_reply_comment($conn, $row["id"]);
            ?>

        </ul>

    </div>


</li>