<?php
include("../DB.php");
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/SMTP.php';
require '../PHPMailer-master/src/PHPMailer.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$dc=$_GET["mail"];
$result=$db->prepare('select TAIKHOAN.MATK from TAIKHOAN,KHACHHANG WHERE TAIKHOAN.MATK=KHACHHANG.MATK AND MAIL=:dc');
$result->bindValue(':dc',$dc,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$matk=$rowdata[0][0];
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aditiifashion3t@gmail.com';                     //SMTP username
    $mail->Password   = 'Simplepass123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('aditiifashion3t@gmail.com');
    $mail->addAddress($dc);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'CONFIRMATION MAIL';
    $mail->Body    = "Click here to confirm your account <a href='localhost/webDoAnNew2/Database/activeaccount.php?id=".$matk."' method='get'> HERE </a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
	?>
    <script>alert("CONFIRMATION MESSAGE SENDED TO THE EMAIL OF ACCOUNT !");
	location.href = '../Pages/signin.php';</script>
	<?php
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	?>
    <script>alert("SEND UNSUCCESS !");
	location.href = '../Pages/forgotpassword.php';</script>
	<?php
}
?>