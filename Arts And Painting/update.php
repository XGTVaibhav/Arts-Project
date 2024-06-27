

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Update</title>

</head>
<body>

</body>
</html>

<?php
 include("connection.php"); 

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<?php
    //include 'connection.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM contact WHERE id = '$id'";
    $query_show = mysqli_query($conn, $query);
    $show = mysqli_fetch_assoc($query_show);
?>

<body>
<!-- Contact Section -->
<div class="w3-container w3-padding-32" id="contact">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>
        <p class="para">Update Details</p>
        <form action="#" method="POST">
          <input class="w3-input w3-border" type="text" placeholder="Name" name="Name" value="<?php echo $show['Name'];?>" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Phone No" name="Phone" value="<?php echo $show['Phone'];?>" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Email" name="Email" value="<?php echo $show['Email'];?>" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Address" name="Address" value="<?php echo $show['Address'];?>" required>
          <button class="w3-button w3-black w3-section" type="submit" value="submit" class="btn" name="submit">
            <i class="fa fa-paper-plane"></i>UPDATE</button>
        </form>
      </div>

</body>
</html>


<?php

    if (isset($_POST['submit'])) {

        $Name=$_POST['Name'];
        $Phone=$_POST['Phone'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];
        

  
        $sql= "UPDATE contact SET Name='$Name',Phone='$Phone',Email='$Email',Address='$Address' WHERE id='$id'";
        $data= mysqli_query($conn,$sql);
      

  $data= mysqli_query($conn,$sql);

  if($data){
  echo "data insert sucessfuly";
  
  header("location:display.php");

  }
  else{
    echo "data do not insert";

}
    }

?>



