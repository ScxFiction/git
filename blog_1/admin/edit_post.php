<?php include 'includes/header.php';?>
<?php
    //NOTE: Query and Get
    $id = $_GET['id'];

    //Create DB Object
    $db = new Database();

    //Create Query
    $query = "SELECT * FROM posts WHERE id = ".$id;
    //Run Query
    $post = $db->select($query)->fetch_assoc();

    //Create Query
    $query = "SELECT * FROM categories";
    //Run Query
    $categories = $db->select($query);
?>

    <form role="form" method="post" action="edit_post.php">
        <div class="form-group">
            <label>Post title</label><!--NOTE: Database Query title field -->
            <input name="title" type="text" class="form-control" placeholder="Enter title" value="<?php echo $post['title']; ?>">
        </div>
        <div class="form-group">
            <label>Post Body</label><!--NOTE: Database Query body field  -->   
            <textarea name="body" class="form-control" placeholder="Enter Post Body">        
                <?php echo $post['body']; ?>
            </textarea>
        </div>
        <div class="form-group">
            <label>Category Select</label><!--NOTE: Database Query category field  --> 
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
        </div>
        <!--Author name-->
        <div class="form-group">
            <label>Author</label>
            <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
        </div>
        <!--Tags-->
        <div class="form-group">
            <label>Tags</label>
            <input name="Tags" type="text" class="form-control" placeholder="Enter Tags" value="<?php echo $post['tags']; ?>">
        </div>

        <div>
            <input name="submit" type="submit" class="btn btn-default" value="Submit" />
            <a href="index.php" class="btn btn-default">Cancel</a>
            <input name="delete" type="submit" class="btn btn-danger" value="Delete" />

        </div>
        <br/>
    </form>


<?php include 'includes/footer.php';?>