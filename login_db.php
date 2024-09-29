<?php
session_start();
	  include 'admin/connection.php'; 
	  $db = new DB();

		if(isset($_POST["action"] )&& $_POST["action"]=="login_user")
		{
			
			$error = true;
			$email = $db->secure($_POST['email']);
			$password = $db->secure($_POST['password']);

				$check_query =$db->qry("SELECT * FROM students WHERE email = '".$email."' && password='".$password."' && status=1");
							
			if ($check_query->num_rows == 1) 
			{
				$query =$check_query->fetch_object();

	         	$_SESSION['id'] = $query->id;
	         	$_SESSION['name'] = $query->name;
	            $_SESSION['email'] = $query->email;
	         	$_SESSION['status'] = $query->status;
	         	$message = "Successfully Login & Redirecting!";
			    $error = false;
	         	
			}
			else
			{
				
			  $message = "Incorrect Userame & Password";
			  $error = true;
			}
			echo json_encode(array("error"=>$error,"msg"=>$message));
		    exit;
			
		}	
	if(isset($_POST["action"] )&& $_POST["action"]=="add_user")
	{
		$error = true;
		$name = $db->secure($_POST['name']);
		$email = $db->secure($_POST['email']);
		$password = $db->secure($_POST['password']);

		$query =(" INSERT INTO students (name,email,password) values ('{$name}','{$email}','{$password}') ");
        if ($db->qry($query)) 
	      {
	      	$msg = "Registration Successfully Done Please Login";
	      	$error = false;
	      }
	      else
	      {
	    	  $msg = "Errorsss in processing";
		      $error = false;
	      }
           echo json_encode(array("error"=>$error,"msg"=>$msg));
		    exit;
	}	
		
?>