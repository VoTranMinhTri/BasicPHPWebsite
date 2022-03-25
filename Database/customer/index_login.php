<html>
<?php
include("../../"."DB.php");
if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
			
		}else{
			$result=$db->prepare("select * from taikhoan where username = '$username' and pass = '$password' ");
			$result->bindValue(':username',$username,PDO::PARAM_STR);
			$result->execute();
			$rowdata=$result->fetchALL();
			if (count($rowdata)==0 ) {	
				?>
				<script>alert("USERNAME OR PASSWORD IS INCORRECT !");
				location.href = '../../pages/signin.php';</script>
<?php			 	
			}else{
				$result=$db->prepare("select trangthai from taikhoan where username = '$username' and pass = '$password' ");
				$result->bindValue(':username',$username,PDO::PARAM_STR);
				$result->execute();
				$rowdata=$result->fetchALL();
				if($rowdata[0][0] == 1)
				{
				$cookie = "username";
				$value = $username;
				setcookie($cookie, $value, time() + (1800), "/",$domain = "localhost");
				$result1=$db->prepare("select maltk from taikhoan where username = '$username'");
				$result1->bindValue(':username',$username,PDO::PARAM_STR);
				$result1->execute();
				$rowdata=$result1->fetchALL();
				if($rowdata[0][0]== 1 ||$rowdata[0][0]== 2 )
					header('Location: ../../Admin/index.php');
				else
					header('Location: ../../index.php');
				}
				else if($rowdata[0][0] == 2)
				{
				?>
					<script>alert("LOGIN UNSUCCESS ! ACCOUNT LOCKED!");
					location.href = '../../pages/signin.php';</script>
				<?php
				}
				else
				{
				?>
					<script>alert("LOGIN UNSUCCESS ! ACCOUNT IS NOT ACTIVE!");
					location.href = '../../pages/signin.php';</script>
				<?php
				}
			}
		}
	}
?>
</html>