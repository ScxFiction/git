<?php include 'includes/header.php'; ?>

    <form role="form" method="post" action="edit_category.php">
        <div class="form-group">
            <label>E Name</label>
            <input name="name" type="text"  class="form-control" placeholder="Enter category">
        </div>

        <div>
            <input name="submit" type="submit" class="btn btn-default" value="Submit" />
            <a href="index.php" class="btn btn-default">Cancel</a>
            <input name="delete" type="submit" class="btn btn-danger" value="Delete" />
        </div>
        <br/>
    </form>

<?php include 'includes/footer.php'; ?>