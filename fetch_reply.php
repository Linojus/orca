
<li class="media pl-5 mt-2">
    <div class="media-body">
        <div class="border rounded comment p-3">
            <div class="row mb-1">
                <div class="col">
                    <strong><?php echo $row["name"]; ?></strong> <?php echo $row["created_at"]; ?>
                </div>
            </div>
            <?php echo $row["body"]; ?>
        </div>
    </div>
</li>