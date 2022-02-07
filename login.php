<?php
include('db/db_conn.php');//When coding please comment your lines
if (isset($_POST['user_name']) && isset($_POST['user_pass']) && isset($_POST['room'])) {//This is not recommended even if it works, you are posting an action in a php file 
	//Try dividing your code
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$user_name = validate($_POST['user_name']);
	$user_pass = validate($_POST['user_pass']);
	$room = validate($_POST['room']);

	if (!isset($user_name)) {
		header("Location: index.php?error=Username is required");
	    exit();
	}else if(!isset($user_pass)){
        header("Location: index.php?error=Password is required");
	    exit();
    }else if(!isset($room)){
      header("Location: index.php?error=Room code is required");
    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$user_name' AND user_pass='$user_pass'";//Select from Database using Query
		$result = mysqli_query($conn, $sql);//Processing Query
		if (mysqli_num_rows($result) === 1 ){//Count rows if === 1
			$row = mysqli_fetch_assoc($result);
            if ($row['room'] === $room ){
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['xname'] = $row['xname'];
            	$_SESSION['user_id'] = $row['user_id'];
                $_SESSION['room'] = $row['room'];
              if ($row['type'] === 'Professeur' ){
            	header("Location: generate code.php");//Redirection for Teachers
              }
              else if ($row['type'] === 'Etudiant' ){
                header("Location: pleasewait.php");//Redirection for Students
                exit();//This line is never reached due to header
                }
            }else{
				header("Location: index.php?error=Incorrect classroom");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect Username or password");
	        exit();
		}
	}
}
else{
	header("Location: index.php?error?=Cannot Connect");
	exit();//This line is never reached due to header
}
