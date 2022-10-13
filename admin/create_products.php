<?php
include "../connection.php";
if(isset($_POST['btnsubmit']))
{
    $name = $_POST['pro_name'];
    $category = $_POST['cat_id'];
    $q = "insert into `products` values (null,$name)";
    $excute = mysqli_query($con,$q);
}
include "function.php";
headers();
?>
<div class="container mt-auto ms-5 pt-auto">
    <?php
    if(isset($excute))
    {
        ?>
        <h1 class="display-1 alert alert-success">Product create Successfully</h1>
        <?php
    }
    ?>
    <div class="row">
        <div class="col-md-3 mt-auto"></div>
        <div class="col-md-7 mt-5">
            <ha class="display-5 text-center">Products</ha>
            <form method="post">
            <div class="mt-4">
                    <label for="Product name" class="form-label">Product name</label>
                    <input type="text" class="form-control" name="pro_name">
                </div>
                <div class="mt-4">
                    <label for="Category name" class="form-label">Select your Category</label>
                    <select name="cat_id">
                        <option>Select Categories</option>
                        <?php
                            $query = "select * from `categories`";
                            $excucetion = mysqli_query($con,$query);
                            while($rows = mysqli_fetch_assoc($excucetion))
                            {
                                ?>
                                <option value="<?=$rows['cat_id']?>"><?=$rows['cat_name']?></option>
                                <?php
                            }                        
                        ?>
                    </select>
                </div>
                <div class="mt-4">
                    <label for="product image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="img">
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