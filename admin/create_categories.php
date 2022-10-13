<?php
include "../connection.php";
if(isset($_POST['btnsubmit']))
{
    $name = $_POST['cat_name'];
    $q = "insert into `categories` values (null,'$name')";
    $excute = mysqli_query($con,$q);
}
include "function.php";
headers();
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5 mt-5">
            <?php
            if(isset($excute))
            {
                ?>
                <p class="alert alert-success">Category Added Successfully</p>
                <?php
            }
            ?>
            <h1 class="display-1">Category</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5 mx-auto px-auto">
            <form method="post">
            <div class="mt-4">
                    <label for="Category name" class="form-label">Category name</label>
                    <input type="text" class="form-control" name="cat_name">
                </div>
                <div class="mt-4">
                    <input type="submit" class="btn btn-success" name="btnsubmit">
                </div>
            </form>
        </div>
    </div>
    </div>
<?php
footers();
?>