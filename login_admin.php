<?php
	session_start();
	require_once('base/functions.php');
	$but = $_GET['buton_val'];
	
	
	header2('Админ панель');
?>
    	<section>
    		<div class="section_back3" style='height: 1513px;'>
		    	<div class="container">
  					<div class="h1_rew">
		    			<h1 class="about_h1">Войти</h1>
		    		</div>
		    		<form enctype="multipart/form-data" method="post" action="base/functions.php">
		    			<input type="text" required name="login" placeholder="Логин">
		    			<input type="password" required name="password" placeholder="Пароль">
		    			<button name="forma_button" value="login_admin" type='submite'>войти</button>
		    		</form>
    			</div>
    		</div>
    	</section>
    	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    		<script>
			  AOS.init();
			</script>
	</body>
</html>