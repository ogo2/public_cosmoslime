<?php
	session_start();
	
	if (!$_SESSION['superuser']){
        header('Location: index.php');
    }
	require_once('base/functions.php');
	$but = $_GET['buton_val'];
	
	
	header2('Админ панель');
?>
    	<section>
    		<div class="section_back3" style='height: 1513px;'>
		    	<div class="container">
  					<div class="h1_rew">
		    			<h1 class="about_h1">Добавить товар</h1>
		    		</div>
		    		<form enctype="multipart/form-data" method="post" action="base/functions.php">
		    			<input type="text" required name="name_product" placeholder="Название услуги">
		    			<input type="text" required name="price" placeholder="Цена">
		    			<select name='category'>
		    				<option>Косметология</option>
		    				<option>Коррекция фигуры</option>
		    			</select>
		    			
		    			<!-- <input type="file" style="border: 0; border-radius: 0;" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple> -->
		    			<textarea type="text" required name="text_product" placeholder="Описание"></textarea>
		    			<button name="forma_button" value="add_product" type='submite'>добавить</button>
		    		</form>
		    		<div class="h1_rew" style='float: right;'>
		    			<h1 class="about_h1">Добавить отзыв</h1>
		    		</div>
		    		<form method="post" style='float: right;' action="base/functions.php">
		    			<input type="text" required name="name_user" placeholder="Имя">
		    			<input type="text" required name="service" placeholder="Услуга">
		    			<textarea type="text" required name="text_rew" placeholder="Отзыв"></textarea>
		    			<button name="forma_button" value="add_rew" type='submite'>отправить</button>
		    		</form>
		    		<div class="list_product">
	  					<div class="tovar" style="position: relative;top: 110px;">
	  						<?php 
	  							kosmetik_delete();
	  						?>
  						</div>
	    			</div>
	    		</div>
		    	<div class="container">
		    		<div class="h1_rew">
		    			<h1 class="about_h1">Отзывы наших клиентов</h1>
		    		</div>
		    		
		    		<div class="slider_rew">
		    			<?php 
		    				feedback_delete();
		    			?>
		    			<button id="back" class="back"><img src="style/img/next.png"></button>
								<button id="next" class="next"><img src="style/img/next.png"></button>
		    		</div>
		    	</div>
    		</div>
    	</section>
    	<script type="text/javascript" src="../style/js/slider.js"></script>
    	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    		<script>
			  AOS.init();
			</script>
	</body>
</html>