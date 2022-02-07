<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Generate code</title>
    <link rel="stylesheet" type=text/css href="generate code.CSS">

    <body>
        <div class="box">
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

            </form>
            <br>
        <div class="text">

         </div>
         <div class="input-data">
            <div class="display">
               <input type="text">
               <span class="far fa-copy" onclick="copy()"></span>
               <span class="fas fa-copy" onclick="copy()"></span>
            </div>
            <button>Generate code</button>
         </div>
      <br>
      <script>
         const display = document.querySelector("input"),
         button = document.querySelector("button"),
         copyBtn = document.querySelector("span.far"),
         copyActive = document.querySelector("span.fas");
         let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
         button.onclick = ()=>{
           let i,
           randomPassword = "";
           copyBtn.style.display = "block";
           copyActive.style.display = "none";
           for (i = 0; i < 6; i++) {
             randomPassword = randomPassword + chars.charAt(
               Math.floor(Math.random() * chars.length)
             );
           }
           display.value = randomPassword;
         }
         function copy(){
           copyBtn.style.display = "none";
           copyActive.style.display = "block";
           display.select();
           document.execCommand("copy");
         }
      </script>

                <b>the cood dissapears in 2 min</b>
                <br>
                <br>
                <input type="submit" name='add' class="btn" value="activate attendency status">
                <br>
                <a href="add.php"> <input type="submit" name='sos' class="btn" value="Add students"></a>
                <br>
                <br>
             </form>


        </div>

    </body>
</head>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
