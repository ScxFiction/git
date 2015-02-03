<?php include 'includes/header.php';?>
<?php

    //Create DB Object
    $db = new Database();

    //Create Query
    $query = "SELECT * FROM categories";
    //Run Query
    $categories = $db->select($query);
?>


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
            <label>Category</label>
                <select name="category" id="form-control">
                    <?php while($row = $categories->fetch_assoc()) : ?><!-- NOTE: Selected category that is ON the list -->
                        <?php if($row['id'] == $post['category']) {
                            $selected = 'selected';
                        }else{
                            $selected = '';
                        }?>
                        <option <?php echo $selected; ?>><?php echo $row['name']; ?></option>
                    <?php endwhile ; ?>
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