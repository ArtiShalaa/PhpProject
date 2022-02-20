<?php
include('includes/header.php');
if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already Logged in";
    header("Location: index.php");
    exit(0);
}


include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">


                
                <?php include('message.php'); ?>
                
                
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="registercode.php" method="POST">
                        <div class="form-grup mb-3">
                            <label>First Name</label>
                            <input required type="Text" name="fname" placeholder="Enter your Name" class="form-control">
                        </div>
                        <div class="form-grup mb-3">
                            <label>Last Name</label>
                            <input required type="text" name="lname" placeholder="Enter your lastname" class="form-control">
                        </div>
                        <div class="form-grup mb-3">
                            <label>Email</label>
                            <input required type="email" name="email" placeholder="Enter your Email" class="form-control">
                        </div>
                        <div class="form-grup mb-3">
                            <label>Password</label>
                            <input required type="password" name="password" placeholder="Enter your Password" class="form-control">
                        </div>
                        <div class="form-grup mb-3">
                            <label>Confirm Password</label>
                            <input required type="password" name="cpassword" placeholder="Re-enter your Password" class="form-control">
                        </div>
                        <div class="form-grup mb-3">
                            <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                        </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div> 
    </div>
</div>   

<?php
include('includes/footer.php')
?>