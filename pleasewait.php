<?php
include('db/db_conn.php');
include('header.php');
if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
 ?>
<title>Please wait</title>
    <link rel="stylesheet" type=text/css href="css/pleasewait.css">
    <body>
        <div class="loginbox">
            <img src="avatar.svg" class="avatar">
            <h3 class="title">UNIVERSITY OF TLEMCEN</h3>
            <h3 class="title">College of Technology </h3>
            <h2 class="title">Department of Electrical and Electronic Engineering (GEE)</h2>
            <BR>
            <form>
            <div class="bin">
                <nav>
                      <ul>
                         <li>
                         <?php echo $_SESSION['room']; ?>
                          <span></span><span></span><span></span><span></span>
                         </li>

                      </ul>
                      <ul>
                         <li>
                         <?php echo $_SESSION['xname']; ?>
                          <span></span><span></span><span></span><span></span>
                         </li>
                      </ul>
                 </nav>
                </div>
                <div class="loader">
                    <span>Please wait...</span>
                </div>
                <br>
                <br>
                <h6>You need access to Register your Attendency</h6>
                <a href="Enter the code.php">Logout</a>
            </form>
        </div>
</body>
</html>
<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
