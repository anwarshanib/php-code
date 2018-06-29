# php-code
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://use.fontawesome.com/4fab3b6827.js"></script>
	
	
	
	
	<style>
	
		body{
			
			
			background-color:darkred;
			
			
		}
		
		p{
			
			color: white;
			
			margin-top:300px;
			text-align: center;
			font-size: 2em;
			
		}
		i{
			
			background-color: yellow;
			border: none;
	       margin-top: 377px;
            position: absolute;
			
		    margin-left: 630px;
			
		}
	
	
	
	
	</style>
</head>




<body>
	

   
      <i class="fa fa-smile-o fa-5x fa-spin" aria-hidden="true"></i>;

         
     <?php
	
	
	echo "<p>Thank you. Our representative will get back to you soon! </p>";
  
   

//    include forgotpassword.php;
        $name=$_POST['name1'];
        $email=$_POST['Email'];
    //    $message=$_POST['message'];
    
// // require_once "vendor/autoload.php";
// echo $mailid;
// require 'vendor/phpmailer/src/PHPMailer.php';
// require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
use PHPMailer\PHPMailer\PHPMailer;
require 'autoload.php';

$mail = new PHPMailer;

// echo "hai";

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                           
 
//Set PHPMailer to use SMTP.
 
$mail->isSMTP();        
 
//Set SMTP host name                      
 
$mail->Host = "smtp.gmail.com";
 
//Set this to true if SMTP host requires authentication to send email
 
$mail->SMTPAuth = true;                      
 
//Provide username and password
 
$mail->Username = "anwarshanib44@gmail.com";             
 
$mail->Password = "anwar@shanu44";                       
 
//If SMTP requires TLS encryption then set it
 
$mail->SMTPSecure = "tls";                       
 
//Set TCP port to connect to
 
$mail->Port = 587;                    
 
$mail->From ="anwarshanib44@gmail.com";
 
$mail->FromName = "Anwar";
 
$mail->addAddress("$email" ,"$name");
 
$mail->isHTML(true);
 
//$mail->Subject = $subject;
 
$mail->Body = nl2br("Hi $name, <br> Thank You for registering. Our Representative will contact you soon");
 
$mail->AltBody = "This is the plain text version of the email content";
 
if(!$mail->send())
 
{
 
echo "Mailer Error: " . $mail->ErrorInfo;
 
}
 
else
 
{
 

 
}
	
?>	
	


	
	
	
	
</body>
</html>
