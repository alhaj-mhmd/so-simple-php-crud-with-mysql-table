<?php





// Include config file
require_once "config.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = $_POST["username"];
    $password = $_POST['password'];
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $phoneNo = $_POST['phoneNo'];
    $registeredBy = $_POST['registeredBy'];

    // Prepare an insert statement
    $sql = "INSERT INTO nanny
     (username,password, fullName,  address, phoneNo,registeredBy)     
      VALUES ( '$username','$password','$fullName','$address','$phoneNo','$registeredBy'  )";

    $stmt = $pdo->prepare($sql);



    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        // Redirect to login page
        header("location: nanies.php");
    } else {
        echo "Something went wrong. Please try again.";
    }

    // Close statement
    unset($stmt);



    // Close connection
    unset($pdo);
}
?>
<?php include_once 'header.php'; ?>



<div class="container text-center mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <h2>Create Nany</h2>
            <p>Please fill this form to create Nanny.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">

                </div>

                <div class="form-group ">
                    <label>Full Name</label>
                    <input type="text" name="fullName" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Phone</label>
                    <input type="text" name="phoneNo" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Registered By</label>
                    <select name="registeredBy" class="form-control selectpicker" required>
                        <option value="adminsmiles">adminsmiles</option>

                    </select>

                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </form>
        </div>
    </div>
    <div class="row mb-5 mt-3">
        <dic class="col-12 text-center">
            <p>Go to <a href="nanies.php">Nanny List</a></p>
        </dic>
    </div>
</div>

<?php include_once 'footer.php'; ?>