<?php
include('db/db_conn.php');
if (!isset($_SESSION['user_id'])) {
  header("Location: index.php");
     exit();
   }
   $user_id = $_SESSION["user_id"];
   $room=$_SESSION['room'];
$sql = "SELECT * FROM users WHERE room='$room' and type='Etudiant';";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);?>
<script src="js/script.js"></script>
<title>Generate code</title>
    <link rel="stylesheet" type=text/css href="css/generate code.css">
    <body>
      <header>
        <div class="box">
            <img src="avatar.svg" class="avatar">
            <h3 class="title">University Of Tlemcen</h3>
            <h3 class="title">College of Technology </h3>
            <h2 class="title">Department of Electrical and Electronic Engineering (GEE)</h2>
            <h2 class="title"><?php echo $_SESSION['room']; ?></h2>
            <h2 class="title">Welcome <?php echo $_SESSION['xname']; ?>!!</h2>                   
            <br>
      </header>
<form name="generate_code" method="post" action="">
  <input name="row_password" type="text" size="20">
  <input class="btn" type="button" class="button" value="Generate Code" onClick="randomPassword(6);" tabindex="2">
</form>
<script>

</script>
      <br>
      <form name="add_students" method="post" action="activate.php">
      <!-- Use Javascript to make a responsive form and use php to submit query for inserting student-->
      <div>
          <input class="btn" type="submit" value="Activate Attendency Status">
      </div>
    </form>
    <form action="post" name="add_students" action="add.php">
    <input class="btn" type="submit" value="Add Students">
  </form> 
    <!-- What are you submitting ? Two buttons for submit?
            a form Only contains one submit at a time-->
    <table class="styled-table">
      <thead>
        <th>Student Name</th>
        <th>Room</th>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
          <tr class="active-row">
            <td><?php echo $user['xname']; ?></td>
            <td><?php echo $user['room']; ?></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
    </body>
<?php
include('footer.php');
 ?>
