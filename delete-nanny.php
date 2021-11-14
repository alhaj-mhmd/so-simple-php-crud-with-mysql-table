
<?php
// Include config file
require_once "config.php";
$username = $_POST['username'];

 $sql="DELETE FROM nanny WHERE username='$username' LIMIT 1";
 $q = $pdo->prepare($sql);

    $response = $q->execute(array($username));  
    
    ?>
  <?php $page_title = "Delete Nanny"; include_once 'header.php'; ?>

       <div class="container">
          <div class="row">
             <div class="col-12 text-center">
                <div class="alert alert-danger mt-5">
                   The Nanny has been deleted!
                </div>
                <a href="nanies.php" class="btn badge-info">My Nannies</a>
                <a href="create-nanny.php" class="btn btn-primary">Create Nanny</a>
             </div>
          </div>
       </div>
   <?php include_once 'footer.php'; ?>