<?php
include "connection.php";
if(isset($_POST['btnsubmit']))
{
    $username = $_POST['username'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "insert into `user` values (null,'$username','$age','$email','$password',2)";
    $excute = mysqli_query($con,$q);
    if($excute)
    {
        header("location:signin.php?msg");
        die;
    }
}
include "function.php";
headers();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 mx-auto my-5">
            <form method="post">
            <div class="mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control">
                </div>
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