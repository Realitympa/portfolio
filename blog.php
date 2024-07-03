<?php require_once("header.php") ?>
<section>
    <!-- <div class="col-md-6"> -->
            <div class="container" id="blogp" >
        <div class="card-header" id="title">
            Blog
<div class="card-body" >
        <form action="blogpost.php"  method="post">
        <div class="form-group mb-3">
            <Label for="title">Title:</Label> <br>
                <input type="text" name="title" class="form-control" placeholder="" value="">
        </div>
        <div class="form-group mb-3">
            <Label for="Email">Meta-description:</Label> <br>
                <input type="text" name="meta_description" class="form-control" placeholder="" value="">
        </div>
        <div class="form-group mb-3">
            <Label for="keywords">keywords: </Label> <br>
                <input type="text" name="keywords" class="form-control"  placeholder="phone number" value="">
        </div>
        <div class="form-group mb-3">
            <Label for="suggestion">Suggestion</Label> <br>
                <textarea name="suggestion" class="form-control" cols="20" rows="2" value=""></textarea>
        </div>
        
        <div class="form-group mb-3">
            <button class="btn btn success" id="blogbttn">
                submit 
            </button>
        </div>
        </form>
    </div>
    </div>
        </div>

    <!-- </div> -->
</section>

</body>
</html>