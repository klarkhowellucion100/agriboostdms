<?php
if (isset($_GET['delete'])) {
    include_once 'db.inc.php';
   
   $id = $_GET['delete'];
   $query="DELETE FROM transactionfinalhubpos WHERE trans_id = $id";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/


   header("location:../farmercommitmentview.php");

  // header("Location:courtorderentrytracker.php?deleted=success");
  // exit();vv
}
?>
