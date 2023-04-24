<?php
include_once('model.php');  // add model class 

class control extends model  // for use model function extends model class
{
	
		function __construct()
		{
			session_start();
			model::__construct(); // also use model __construct for $conn 
			
			$path=$_SERVER['PATH_INFO'];// http://localhost/riya/PROJECT/web/control.php
			
			switch($path)
			{
				case '/index':
				include_once('index.php');
				break;
				
				case '/services':
				include_once('services.php');
				break;
				
				case '/about':
				include_once('about.php');
				break;
				
				case '/inquiry':
				include_once('inquiry.php');
				break;
				
				case '/typo':
				include_once('typo.php');
				break;
				
				case '/gallery':
				include_once('gallery.php');
				break;
				
				case '/contact':
				include_once('contact.php');
				break;
				
			
				
				
				case '/signup':
				
				if(isset($_REQUEST['signup']))
				{
					$unm=$_REQUEST['unm'];
					$pass=$_REQUEST['pass'];
					$md5=md5($pass);
					$gen=$_REQUEST['gen'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					$cid=$_REQUEST['cid'];
					
					// img upload
					$file1=$_FILES['file1']['name'];  // get image name
					$path="upload/".$file1;
					$tmp_img=$_FILES['file1']['tmp_name'];  // get duplicate image
					move_uploaded_file($tmp_img,$path);
					
					
					$data=array("unm"=>$unm,"pass"=>$md5,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"file1"=>$file1);
					$res=$this->insert('reg',$data);
					if($res)
					{
						require 'phpmailer/PHPMailerAutoload.php';
						
						$toid=$unm;
						$subject="Akash Company";
						$message="Wellcome To Akash Company !";
						
						$mail = new PHPMailer;

						$mail->isSMTP();

						$mail->Host = 'smtp.gmail.com';

						$mail->Port = 587;

						$mail->SMTPSecure = 'tls';

						$mail->SMTPAuth = true;

						$mail->Username = 'manageuser199@gmail.com';  // enter your email

						$mail->Password = 'Akash@123';  // enter your email password

						$mail->setFrom('manageuser199@gmail.com', 'Akash');  // enter display email & name

						$mail->addReplyTo('manageuser199@gmail.com', 'Akash'); // enter your reply email & name

						$mail->addAddress($toid);

						$mail->Subject = $subject;

						$mail->msgHTML($message);

						if (!$mail->send()) {
						   $error = "Mailer Error: " . $mail->ErrorInfo;
							?><script>alert('<?php echo $error ?>');</script><?php
						} 
						else 
						{
						  
						   echo '<script>
						   alert("Register Success");
						   window.location="login";
						   </script>';
						}
					}
					else
					{
						echo "not success";
					}
				}
				
				$country=$this->select('country');
				include_once('signup.php');
				break;
				
				case '/login':
				
				if(isset($_REQUEST['login']))
				{
					$unm=$_REQUEST['unm'];
					$pass=$_REQUEST['pass'];
					$md5=md5($pass);
					

					$where=array("unm"=>$unm,"pass"=>$md5);
					$res=$this->select_where('reg',$where);
					
					// uid fetch for session
					$fetch=$res->fetch_object();
					
					
					$ans=$res->num_rows; // check answer by rows  ans true 1 // false 0
					if($ans==1)
					{
						$status=$fetch->status;
						if($status=="Unblock")
						{
						
							$uid=$fetch->uid;
							//create session
							$_SESSION['user']=$unm;
							$_SESSION['uid']=$uid;
							
							if(isset($_REQUEST['rem']))
							{
								setcookie('unm',$unm,time()+20);
								setcookie('pass',$pass,time()+20);
							}
							
							?>
							<script>	
								alert("Login Success");
								window.location='index';
							</script>
							<?php
						}
						else
						{
							?>
							<script>	
								alert("Login Failed due to User Blocked");
								window.location='index';
							</script>
							<?php
						}
					}
					else
					{
						?>
						<script>	
							alert("Login Failed");
							window.location='login';
						</script>
						<?php
					}
				}
				
				include_once('login.php');
				break;
				
				
				case '/profile':
				if(isset($_SESSION['uid']))
				{
					$uid=$_SESSION['uid'];
					$where=array("uid"=>$uid);
					$exe=$this->select_join_where('reg','country','reg.cid=country.cid',$where);
			
					while($fetch=$exe->fetch_object())   // fetch data from mysql
					{
						$arr[]=$fetch;
					}
				}
				include_once('profile.php');
				break;
				
				
				case '/edit':
				$uid=$_SESSION['uid'];
				$where=array("uid"=>$uid);
				$exe=$this->select_join_where('reg','country','reg.cid=country.cid',$where);
				$fetch=$exe->fetch_object();
					
				$img=$fetch->file1;	
					
				if(isset($_REQUEST['update']))
				{
					$unm=$_REQUEST['unm'];
					$gen=$_REQUEST['gen'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					$cid=$_REQUEST['cid'];
					
					
					if($_FILES['file1']['size']>0)
					{
						// img upload
						$file1=$_FILES['file1']['name'];  // get image name
						$path="upload/".$file1;
						$tmp_img=$_FILES['file1']['tmp_name'];  // get duplicate image
						move_uploaded_file($tmp_img,$path);
					
						$data=array("unm"=>$unm,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"file1"=>$file1);
						$res=$this->update('reg',$data,$where);
						if($res)
						{
							$_SESSION['user']=$unm;
							unlink('upload/'.$img);
							?>
						<script>	
							alert("Update Success");
							window.location='profile';
						</script>
						<?php
						}
					}
					else
					{
						$data=array("unm"=>$unm,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid);
						$res=$this->update('reg',$data,$where);
						if($res)
						{
							$_SESSION['user']=$unm;
							
							?>
						<script>	
							alert("Update Success");
							window.location='profile';
						</script>
						<?php
						}
					}
				}
				
				
				
				$country=$this->select('country');
				include('edit.php');
				break;
				
				case '/logout':
				unset($_SESSION['user']); 
				unset($_SESSION['uid']); 
				?>
						<script>	
							alert("Logout Success");
							window.location='index';
						</script>
						<?php
				break;
				
				case '/feedback':
				
				if(isset($_REQUEST['feedback']))
				{
					$email=$_REQUEST['email'];
					$comment=$_REQUEST['comment'];
					
					$data=array("email"=>$email,"comment"=>$comment);
					$res=$this->insert('feedback',$data);
					if($res)
					{
						echo "feedback success";
					}
					else
					{
						echo "not success";
					}
				}
				
				include_once('feedback.php');
				break;
				
				case '/forgot':
				if(isset($_REQUEST['submit']))
					{
						$unm=$_REQUEST['unm'];
				
						$where=array("unm"=>$unm);
						$res=$this->select_where('reg',$where);
						
						// uid fetch for session
						$fetch=$res->fetch_object();
						
						$ans=$res->num_rows; // check answer by rows  ans true 1 // false 0
						if($ans==1)
						{
							
							$uid=$fetch->uid;
							$_SESSION['otp_uid']=$uid;
							
							require 'phpmailer/PHPMailerAutoload.php';
							
							$toid=$_REQUEST['unm'];
							$subject="Akash Forgot Password";
							
							
							$otp=rand(100000,999999);
							$_SESSION['otp']=$otp;
							$finalotp=$_SESSION['otp'];
							
							$message="Hi Your forgot passwoard One Time Password is : ".$finalotp;
							
							$mail = new PHPMailer;

							$mail->isSMTP();

							$mail->Host = 'smtp.gmail.com';

							$mail->Port = 587;

							$mail->SMTPSecure = 'tls';

							$mail->SMTPAuth = true;

							$mail->Username = 'manageuser199@gmail.com';  // enter your email

							$mail->Password = 'Akash@123';  // enter your email password

							$mail->setFrom('manageuser199@gmail.com', 'Akash');  // enter display email & name

							$mail->addReplyTo('manageuser199@gmail.com', 'Akash'); // enter your reply email & name

							$mail->addAddress($toid);

							$mail->Subject = $subject;

							$mail->msgHTML($message);

							if (!$mail->send()) {
							   $error = "Mailer Error: " . $mail->ErrorInfo;
								?><script>alert('<?php echo $error ?>');</script><?php
							} 
							else 
							{
							  
							   echo '<script>
							   alert("One time password Sent To your User Name/Email Success");
							   window.location="enter_otp";
							   </script>';
							}
						}
						else
						{	
							echo '<script>
							   alert("Invalid Username");
							   window.location="forgot";
							   </script>';
						}
						
					}
				include_once('forgot.php');
				break;
				
				
				
				case '/enter_otp':
				if(isset($_REQUEST['submit_otp']))
				{
					$otp=$_REQUEST['otp'];
					$otp_ses=$_SESSION['otp'];
					if($otp==$otp_ses)
					{
						unset($_SESSION['otp']);
						$_SESSION['reset']=$otp;
						
						echo '<script>
							   alert("OTP Match Success");
							   window.location="reset_pass";
							   </script>';
					}
					else
					{
						echo '<script>
							   alert("OTP Not Match Success");
							   window.location="enter_otp";
							   </script>';
					}
				}
				include('enter_otp.php');
				break;
				
				case '/reset_pass':
				if(isset($_REQUEST['submit_newpass']))
				{
					$new_pass=$_REQUEST['new_pass'];
					$pass=md5($new_pass);
					$data=array("pass"=>$pass);
					
					$otp_uid=$_SESSION['otp_uid'];
					$where=array("uid"=>$otp_uid);
					$res=$this->update('reg',$data,$where);
					if($res)
					{
						
						unset($_SESSION['otp_uid']);
						unset($_SESSION['reset']);
						
						echo '<script>
							   alert("Your New Password Reset Success");
							   window.location="login";
							   </script>';
					}
				}
				include('reset_pass.php');
				break;
				
				
				
				
				default:
				echo "Page Not Found";
				break;
				
			}
		}
}

$obj=new control;





?>