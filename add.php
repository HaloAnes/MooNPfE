<?php
include('header.php');
if (isset($_POST['add_students'])) { // if save button on the form is clicked
// name of the uploaded file
    $filename = $_FILES['myfile']['xname'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
  $id=$_POST['user_id'];
    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        array_push($errors, "You file extension must be .zip, .pdf or .docx");
    }
  elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        array_push($errors, "You file is too large!!");
    }
  else {
    $sql = "SELECT * FROM works WHERE user_id=$id";
    $result=mysqli_query($con,$sql);
    if (move_uploaded_file($file, $destination)) {
        $sql = "INSERT INTO works (name, size, user_id) VALUES ('$filename', '$size','$id')";
      $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        if ($result) {
           array_push($successful, "File uploaded successfully"); ;
        }
    else{
        array_push($errors, "Failed To Upload File!!");
      }
    }
  }
}
 ?>

