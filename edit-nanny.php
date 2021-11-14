<?php
// Include config file
require_once "config.php";
if (isset($_POST['username']) && $_POST['username'] != null) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM nanny WHERE username = '$username'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
}



unset($pdo);

?>
<?php $page_title = "Edit Nanny";
include_once 'header.php'; ?>
 

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">


            <h2>Edit Nanny</h2>
            <p class="alert alert-info">Please fill this form to edit an nanny.</p>
            <form action="update-nanny.php" method="post">
                <input type="hidden" name="username" value="<?php echo $row['username'] ?>">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" readonly value="<?php echo $row['username'] ?>">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>">

                </div>

                <div class="form-group ">
                    <label>Full Name</label>
                    <input type="text" name="fullName" class="form-control" value="<?php echo $row['fullName'] ?>">
                </div>
                <div class="form-group ">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>">
                </div>
                <div class="form-group ">
                    <label>Phone</label>
                    <input type="text" name="phoneNo" class="form-control" value="<?php echo $row['phoneNo'] ?>">
                </div>
                <div class="form-group ">
                    <label>Registered By</label>
                    <input type="text" name="registeredBy" class="form-control" value="<?php echo $row['registeredBy'] ?>" >

                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Go to my posts <a href="nanies.php">My nanny</a></p>
            </form>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>