<?php
include "connection.php";
include "function.php";
if(isset($_GET['msg']))
{
    echo "<script>alert('You are registor Successfully Please varify your account')</script>";
}
if(isset($_POST['btnsubmit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "select * from `user` where email = '$email' and password = '$password'";
    $excute = mysqli_query($con,$q);
    $rows = mysqli_fetch_assoc($excute);
    $_SESSION['user_id'] = $rows['id'];
    if($rows['role_id'] == 1)
    {
        header('location:admin/index.php');
        die;        
    }
    if($excute)
    {
        header("location:index.php?msg");
        die;
    }
}
headers();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 mx-auto my-5">
            <form method="post">
            <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mt-3">
                    <input type="submit" name="btnsubmit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
footers();
?>