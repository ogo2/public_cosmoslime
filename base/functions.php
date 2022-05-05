<?php
	
	function feedback(){
		require('connect.php');
		$get_feed = "SELECT * FROM rew;";
		$get_feedback = mysqli_query($CONNECT, $get_feed);
		$rew = mysqli_fetch_all($get_feedback);
		foreach ($rew as $text_rew) {
			$name = $text_rew[1];
			$service = $text_rew[2];
			$text = $text_rew[3];
			echo "<div style='display: none;' class='rew_block'>
		    				<h1>$name</h1>
		    				<hr>
		    				<div class='over_scr' style='height: 200px;overflow: auto;'>
		    					<p class='rew_p'>« $text ».</p>
		    				</div>
								<hr>	
								
		    			</div>";
		};
	};
	function feedback_delete(){
		require('connect.php');
		$get_feed = "SELECT * FROM rew;";
		$get_feedback = mysqli_query($CONNECT, $get_feed);
		$rew = mysqli_fetch_all($get_feedback);
		foreach ($rew as $text_rew) {
			$name = $text_rew[1];
			$service = $text_rew[2];
			$text = $text_rew[3];
			echo "<div style='display: none;' class='rew_block'>
		    				<h1>$name</h1>
		    				<hr>
		    				<div class='over_scr' style='height: 200px;overflow: auto;'>
		    					<p class='rew_p'>« $text ».</p>
		    				</div>
								<hr>	
								<form method='post' action='base/functions.php'><button name='delete_rew' value='$name'>удалить</button></form>
		    			</div>";
		};
	};
	function page_info2($prod){
		require('connect.php');
		$get_product = "SELECT * FROM product WHERE name = '$prod';";
		$get_product_info = mysqli_query($CONNECT, $get_product);
		$lol = mysqli_fetch_all($get_product_info);
		foreach($lol as $info){
			
			$name_inf = $info[3];
			$text_inf = $info[2];
			$price = $info[5];
			echo "<div class='h1_more'>
  						<h1 >$name_inf</h1>
  					</div>
  					<div class='photo_more'>
  						<object class='svg_more' type='image/svg+xml' data='style/img/face.svg'>
	    						<img src='style/img/face.svg'>
	    					</object>
  					</div>
  					<div class='more_p'>
  						<p style='white-space: pre-wrap'>$text_inf</p>
  						<a href='https://vk.com/cosmoslim'><button style='cursor:pointer;'>написать для записи</button></a>
  						<div class='more_price'>
  							<p>$price руб.</p>
  						</div>

  					</div>";
		};
	};
	function kosmetik($vid){
		require('connect.php');
		$get_koss = "SELECT * FROM product WHERE category = '$vid';";
		$get_kossmetik = mysqli_query($CONNECT, $get_koss);
		
		$koss = mysqli_fetch_all($get_kossmetik);
		foreach ($koss as $kosmetik2) {
			$id_product = $kosmetik2[0];
			$name_kos = $kosmetik2[3];
			$price = $kosmetik2[5];
			echo "<div class='block_tovar'>
  							<img src='style/img/U3fJ9v9Yb64.jpg'>
  							<h4>$name_kos. <form target='_blank' method='get' action='page_info.php'><button type='submit' value='$name_kos' name='buton_val' style='padding: 0;background-color: rgba(0,0,0,0.0); border: none; cursor:pointer;'><a style='padding: 0;'>Подробнее</a></button></form></h4>
  							<p>$price руб</p>
  						</div>";
			// if ($kosmetik2['category'] == $vid) {

			// 	echo "<div class='block_tovar'>
  	// 						<img src='style/img/U3fJ9v9Yb64.jpg'>
  	// 						<h4>$name_kos. <a href='#5'>Подробнее</a></h4>
  	// 						<p>2800 руб</p>
  	// 					</div>";
			// }
		}
	}
	function kosmetik_delete(){
			require('connect.php');
			$get_koss = "SELECT * FROM product;";
			$get_kossmetik = mysqli_query($CONNECT, $get_koss);
			
			$koss = mysqli_fetch_all($get_kossmetik);
			try{
				foreach ($koss as $kosmetik2) {
					$id_product = $kosmetik2[0];
					$name_kos = $kosmetik2[3];
					$price = $kosmetik2[5];
					echo "<div class='block_tovar'>
		  							<img src='style/img/U3fJ9v9Yb64.jpg'>
		  							<h4>
		  							<form method='get' action='red_info.php'><button type='submit' value='$id_product' name='redaction_product_button' style='padding: 0;background-color: rgba(0,0,0,0.0); border: none; cursor:pointer; text-align: left; font-size: 22px;'>$name_kos. </button></form>
		  							<form method='post' action='base/functions.php'><button type='submit' value='$name_kos' name='delete_product_button' style='padding: 0;background-color: rgba(0,0,0,0.0); border: none; cursor:pointer;'><a style='padding: 0;'>Удалить</a></button></form></h4>
		  							<p>$price руб</p>
		  						</div>";
				}
			}catch (Exception $e) {
		    echo "Услуги отсутствуют, добавьте новые!";
				}
		}

	$redaction_product_button = $_POST['redaction_product_button'];

	function redaction_product($redaction_product_button){
		require('connect.php');
		$get_product = "SELECT * FROM product WHERE id = '$redaction_product_button';";
		$get_product_info = mysqli_query($CONNECT, $get_product);
		$lol = mysqli_fetch_all($get_product_info);
		foreach($lol as $info){
			$id_inf = $info[0];
			$name_inf = $info[3];
			$text_inf = $info[2];
			$price = $info[5];
			echo "<div class='h1_more'>
						<form action='base/functions.php' method='post'>
							<h1 ><input value='$name_inf' name='name_product_redact' class='red_name_product' type='text' style='background-color: rgba(0,0,0,0.0); border: none; color: black;' placeholder='$name_inf'></h1>
	  					</div>
	  					<div class='photo_more'>
	  						<object class='svg_more' type='image/svg+xml' data='style/img/face.svg'>
		    						<img src='style/img/face.svg'>
		    					</object>
	  					</div>
	  					<div class='more_p'>
	  					<p style='white-space: pre-wrap'><textarea name='text_product_redact'  style='max-width:100%; max-height: 499px; height: 100%;' class='text_red_product' type='text' required name='text_rew' placeholder='Отзыв'>$text_inf</textarea></p>
	  						<button value='$id_inf' name='red_info_lol' style='cursor:pointer;'>редактировать</button>
	  						<div class='more_price'>
	  							<p><input value='$price' name='price_product_redact' style='background-color: rgba(0,0,0,0.0); border: none; color: black;' placeholder='$price руб.'></p>
	  						</div>
	  					</form>
  					</div>";
		};
	}

	$red_info_lol = $_POST['red_info_lol'];
	$name_product_redact = $_POST['name_product_redact'];
	$text_product_redact = $_POST['text_product_redact'];
	$price_product_redact = $_POST['price_product_redact'];
	
	function fuck_red($name_product_redact, $text_product_redact, $price_product_redact, $red_info_lol){
		require('connect.php');
		$get_koss = "UPDATE `product` SET `description`='$text_product_redact',`name`='$name_product_redact', `price`='$price_product_redact' WHERE id = $red_info_lol;";
		$get_kossmetik = mysqli_query($CONNECT, $get_koss);
		header('Location: ../admin_page.php');
	};

	$delete_product_button = $_POST['delete_product_button'];

	function delete_rpoduct($name_product){
		require('connect.php');

		$get_koss = "DELETE FROM product WHERE name = '$name_product';";
		$get_kossmetik = mysqli_query($CONNECT, $get_koss);
		header('Location: ../admin_page.php');
	}

	function header2($title){
		echo '<!DOCTYPE HTML>
		<html>
    <head>
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 		<meta name="viewport"
          content="width=1370">

	    <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="style/assets.css">
	    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(88569870, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88569870" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	    <script type="text/javascript" src="../style/js/jquery/src/jquery.js"></script>
     <link rel="shortcut icon" href="../style/img/face_link.png" type="image/x-icon">

	    <title>
	    '
	    ;
	    echo $title;
	    echo '</title>
	</head>
    <body>
    	<header>
    		<div class="container">
    			<a href="/">
    				<img data-aos="fade-up-right" src="style/img/logo_cosmo.png"></a>
    			
    			<ul data-aos="fade-up-left">
    				<a href="index.php"><li>О нас</li></a>
    				<a href="cosmetik.php"><li>Косметология</li></a>
    				<a href="shape.php"><li>Коррекция фигуры</li></a>
    				<a href="contacts.php"><li>Контакты</li></a>
    			</ul>
    		</div>
    	</header>';
	};

	$name_product = $_POST['name_product'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$text_product = $_POST['text_product'];
	$but = $_POST['forma_button'];

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	function go_to_email_rewiews($name_user, $service, $text_rew){
		$message = 'Пользователь '.$name_user.' хочет оставить следущий отзыв об '.$service.': '.$text_rew;
		try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail = new \PHPMailer\PHPMailer\PHPMailer();
		$mail->isSMTP();                                           //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ogo2.programme@gmail.com';                     //SMTP username
    $mail->Password   = 'Textura322567=';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ogo2.programme@gmail.com', 'Mailer');   //Add a recipient
    $mail->addAddress('moostral3@yandex.ru');               //Name is optional
    $mail->addReplyTo('moostral3@yandex.ru');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Отзывы';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	
	}

	// $uploaddir = '../style/img/';
	// $uploadfile = $uploaddir . basename($_FILES['image_uploads']['name']);
	
	function add_product($name, $price, $category, $description){
			// if (move_uploaded_file($_FILES['image_uploads']['tmp_name'], $uploadfile)) {
	  //   echo "Файл корректен и был успешно загружен.\n";
			// } else {
			//     echo "Возможная атака с помощью файловой загрузки!\n";
			// }
		settype($price, 'integer');
		// $path_photo = 'style/img/'.$_FILES['image_uploads']['name'];
		// settype($path_photo, 'string');
		require('connect.php');
		$add_product = "INSERT INTO product (name, category, price, description) VALUES ('$name', '$category', '$price', '$description');";
		mysqli_query($CONNECT, $add_product);
		
	}

	$name_user = $_POST['name_user'];  
	$service = $_POST['service'];
	$text_rew = $_POST['text_rew'];

	function add_rew($name_user, $service, $text_rew){
		require('connect.php');
		// $add_rew = "INSERT INTO rew (name, service, text_rew) VALUES ('".$name_user."', '".$service."', '".$text_rew."');";
		$add_rew = "INSERT INTO rew (name, service, text_rew) VALUES ('$name_user', '$service', '$text_rew');";
		mysqli_query($CONNECT, $add_rew);
	}

  $login = $_POST['login'];
  $password = $_POST['password'];
  $post_pass = password_hash($password, PASSWORD_DEFAULT);

	function login_admin($login, $password){
		session_start();
		require('connect.php');
		// $post_pass = password_hash($password, PASSWORD_DEFAULT);
		// $add_rew = "INSERT INTO superuser (username, password) VALUES ('$login', '$post_pass');";
		// pg_query($CONNECT, $add_rew);
		$get_user = "SELECT * FROM superuser WHERE username = '$login'";
		$result = mysqli_query($CONNECT, $get_user);
		$get_password = "SELECT password FROM superuser WHERE username = '$login'";
		$result2 = mysqli_query($CONNECT, $get_password);
		$fuck = mysqli_fetch_row($result2);
		if (password_verify($password, $fuck[0])){
			$user = mysqli_fetch_assoc($result);
			$_SESSION['superuser'] = [

            'id' => $user['id'],
            'login' => $user['login'],
        ];
			header('Location: ../admin_page.php');
		}else{
			echo 'неправильный пароль';
		};
		// $post_user = "INSERT INTO superuser (username, password) VALUES ('$login', '$post_pass');";
  //   pg_query($CONNECT, $post_user);
	};

	$delete_rew = $_POST['delete_rew'];

	function delete_rewie($delete_rew){
		require('connect.php');

		$get_koss = "DELETE FROM rew WHERE name = '$delete_rew';";
		$get_kossmetik = mysqli_query($CONNECT, $get_koss);
		header('Location: ../admin_page.php');
	};
	if ($but == 'go_to_email_rew'){
		go_to_email_rewiews($name_user, $service, $text_rew);
		header('Location: ../index.php');
	}if($but == 'add_product'){
		add_product($name_product, $price, $category, $text_product);
		header('Location: ../admin_page.php');
	}if($but == 'add_rew'){
		add_rew($name_user, $service, $text_rew);
		header('Location: ../admin_page.php');
	}if($but == 'login_admin'){
		login_admin($login, $password);
		
	}if(isset($delete_product_button)){
		delete_rpoduct($delete_product_button);
	}if(isset($delete_rew)){
		delete_rewie($delete_rew);
	}if(isset($red_info_lol)){
		fuck_red($name_product_redact, $text_product_redact, $price_product_redact, $red_info_lol);
	};
?>