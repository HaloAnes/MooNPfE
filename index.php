<?php
    include('header.php');
?>
<head>
    <link rel="stylesheet" type=text/css href="css/style.css">
	<title>Login</title>
</head>
<body>
    <div class="loginbox">
     <form method="post" action="login.php">
        <img src="images/avatar.svg" class="avatar">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="user_name" placeholder="Username"><br>
       <main>
                    <div id="anim">
                        <span class="tooltip" data-tooltip="
                        Your user name is your firstename.familyname">i</span>
                    </div>
       </main>
     	<label>Password</label>
     	<input type="password" name="user_pass" placeholder="Password"><br>
       <main>
                    <div id="anim">
                        <span class="tooltip" data-tooltip="
                        Your password is the last four digits of your card">i</span>
                    </div>
       </main>
       <label>Classroom Code</label>
                <input type="text" name="room" placeholder="Enter room code ">
                <input type="checkbox" name="rememberme" id="rememberme"> <label for="rememberme">Remember me</label>
      <input type="submit" name="" value="Login">
     </div>
     </form>

<?php
    include('footer.php');
?>