<?php include 'includes/header.php';?>



    <form role="form" method="post" action="add_post.php">
        <div class="form-group">
            <label>Post title</label>
            <input name="title" type="text" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label>Post Body</label>
            <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
        </div>
        <div class="form-group">
            <label>Category Select</label>
            <select name="category" id="form-control">
                <option value="">News</option>
                <option value="">Events</option>
            </select>
            <!-- /#form-control -->
        </div>
        <!--Author name-->
        <div class="form-group">
            <label>Author</label>
            <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
        </div>
        <!--Tags-->
        <div class="form-group">
            <label>Tags</label>
            <input name="Tags" type="text" class="form-control" placeholder="Enter Tags">
        </div>

        <div>
            <input name="submit" type="submit" class="btn btn-default" value="Submit" />
            <a href="index.php" class="btn btn-default">Cancel</a>
        </div>
        <br/>
    </form>


<?php include 'includes/footer.php';?>