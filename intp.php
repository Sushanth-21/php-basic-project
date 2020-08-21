<?php
ob_start();

$con = mysqli_connect('localhost', 'databseuser name ','db apssword ','databse anme ');


if(isset($_POST['submit']))
{
    
   //$a = $_POST["name"];
       
    $box1= mysqli_real_escape_string($con,$_POST["name"]);
	  $box2= mysqli_real_escape_string($con,$_POST["email"]);
	   $box3= mysqli_real_escape_string($con,$_POST["clg"]);
	     
		  
		  
	 $cld =  mysqli_query($con,"INSERT INTO job (`name`, `email`,  `clg`,   `roll`, `phn` , `tec`) 

	 VALUES ('".$box1."', '".$box2."', '".$box3."',  '".$box5."', '".$box6."', '".$box7."');");
		 

  require("PHPMailer_5.2.0/class.phpmailer.php");
  
 
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true; 
    // turn on SMTP authentication
$mail->Username = "mail id ";  // SMTP username
$mail->Password = "password"; // SMTP password

$mail->From = "fromaddred mail idsd ";
$mail->FromName = "Brain O Vision";
$mail->AddAddress($_POST["email"]);
//$mail->AddAddress("ellen@example.com");                  // name is optional
$mail->AddReplyTo("mahesh@gmail.com", "Information");

$mail->AddCC("write2brainovision@gmail.com");
//$mail->AddCC("info.brainovision@gmail.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/admin/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Job Application Is Under Process  ";
$mail->Body    = "<style type='text/css'>
<!--
.style1 {color: #990000}
.style3 {font-size: 12px}
-->
</style>
<p><strong>Dear ".$_POST['name'].",<br>  
<p><strong>Greetings from Brain O vision,  I would like to thank you all for the time and the effort. 


 </strong></p>
 <p><strong> You application is underprocess. our  team will get back  to you . <br> </strong></p>


<p>&nbsp;</p>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if($mail->Send())
{
   
	 //header("location:  http://brainovision.net/ ");
	 
	 
	 
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your Applicatoon  is under procees !!   Check your email for  conformation ');
    window.location.href='http://brainovision.net/';
    </script>");
}











}
?>
