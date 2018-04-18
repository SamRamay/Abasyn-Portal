<?php require_once '../model/db.php';

?>

		<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	  <div class="modal-dialog">

				<div class="loginmodal-container">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<h1>Login to Your Account</h1><br>
				  <form method="post">
					<input type="text" name="user" placeholder="Username" required>
					<input type="password" name="pass" placeholder="Password" required>
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>

				  <div class="login-help">
					<a href="./view/register.html"><center>Register</a> - <a href="#">Forgot Password</center></a>
				  </div>
				</div>
			</div>
		  </div>

<?php

// if(isset($_POST['login'])){
//
//
// $username = $_POST['user'];
//
// $password =  $_POST['pass'];
// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// }
// else
// {
// 	$select_user = "select * from users where username='$username' AND password='$password'";
//
// $run_user = mysqli_query($con, $select_user);
//
// $check_user = mysqli_num_rows($run_user);
//
//
//
// if($check_user>0){
//
// 	header("location: ./admin/index.php");
//
// }
//
// else{
//                     echo "Error: " . $select_user . "<br>" . $con->error;
//
// }
// mysqli_close($con);
//
//
// }
// }
 ?>
