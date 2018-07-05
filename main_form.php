<div class="container mt-2" >

    <form action="add_comment.php"  method="POST" class="form-horizontal comment_form"  id="comment_form">

        <div class="row">

            <label class="col-2" for="email"><strong>Email*</strong></label>
            <div class="form-group col-sm">
                <input type="email" id="email" class="form-control" name="email" >
                <div id="error-email"></div>
            </div>

            <label class="col-2" for="name"><strong>Name*</strong></label>
            <div class="form-group col-sm">
                <input type="text" class="form-control" id="name" name="name" >
                <div id="error-name"></div>
            </div>

        </div>


        <div class="row">
            <label class="col-2" for="body"><strong>Comment*</strong></label>
            <div class="form-group col-sm">
                <textarea class="form-control" id="body" name="body" ></textarea>
                <div id="error-body"></div>
            </div>
        </div>

        <div class="row">
            <div class="offset-md-2 col-sm-10">
                <div class="form-group ">
                    <input type="hidden" id="parent_id" name="parent_id"  value="0" />
                    <button type="submit" name="submit" id="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </div>

    </form>

</div>