<?php include 'includes/header.php'; ?>
<?php
    //NOTE: Query and Get
    $id = $_GET['id'];

    //Create DB Object
    $db = new Database();

    //Create Query
    $query = "SELECT * FROM categories WHERE id = ".$id;
    //Run Query
    $category = $db->select($query)->fetch_assoc();

    //Create Query
    $query = "SELECT * FROM categories";
    //Run Query
    $categories = $db->select($query);
?>
    <form role="form" method="post" action="edit_category.php">
        <div class="form-group">
            <label>E Name</label>
            <input name="name" type="text"  class="form-control" placeholder="Enter category" value="<?php echo $category['name']; ?>">
        </div>

        <div>
            <input name="submit" type="submit" class="btn btn-default" value="Submit" />
            <a href="index.php" class="btn btn-default">Cancel</a>
            <input name="delete" type="submit" class="btn btn-danger" value="Delete" />
        </div>
        <br/>
    </form>

<?php include 'includes/footer.php'; ?>