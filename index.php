
<?php
	require_once('base/functions.php');
	header2('Cosmoslime');
?>
    	
    	<section>
    		<div class="section_back">
	    		<div class="container">
	    			<div class="section_one">
	    				<div class="about_block_text" data-aos="flip-left">
			    			<h1 data-aos="fade-up-right" class="about_h1">Cosmoslime</h1>
			    			<div class="block_text_about_1">
			    			</div>
			  				<div class="block_text_about_2">
			  				</div>
								<div class="text_about">
									<p>CosmoSlim - студия, сочетающая в себе уютную атмосферу и качество обслуживания. С нами Вы получите результат, о котором мечтаете.</p>
								</div>
							</div>
							<div class="face_about">
								<object type="image/svg+xml" data="style/img/face.svg">
	    						<img src='style/img/face.svg'>
	    					</object>
	    				</div>
		    		</div>
		    	</div>
		    </div>
		    <div class="section_back2">
		    	<div class="container"> 
		    		<div class="block_photo_master" >
		    		</div>
		    		<div class="about_block_text2" data-aos="flip-right">
			    		<div class="block_text_about_3">
		    			</div>
		  				<div class="block_text_about_4">
		  				</div>
							<div class="text_about2">
								<p>CosmoSlim - студия косметологии и коррекции фигуры, которая находится в 5-ти минутах от метро Девяткино. </p>
							</div>
						</div>
						<div class="block_studia">
							<div class="photo_studia" data-aos="fade-up"
     data-aos-duration="3000">
								<img src="style/img/XXXL.jpg">
							</div>
							<div class="photo_studia" data-aos="fade-up"
     data-aos-duration="3000">
								<img src="style/img/XXXL (1).jpg">
							</div>
							<div class="photo_studia" data-aos="fade-up"
     data-aos-duration="3000">
								<img src="style/img/257609669_287414786623834_8575047167370586698_n.jpg">
							</div>
						</div>
		    	</div>
		    </div>
		    <div class="section_back3">
		    	<div class="container" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
		    		<div class="h1_rew">
		    			<h1 class="about_h1">Отзывы наших клиентов</h1>
		    		</div>
		    		<form method="post" action="base/functions.php">
		    			<h3>Оставить отзыв</h3>
		    			<input type="text" required name="name_user" placeholder="Имя">
		    			<input type="text" required name="service" placeholder="Услуга">
		    			<textarea type="text" required name="text_rew" placeholder="Отзыв"></textarea>
		    			<button name="forma_button" value="go_to_email_rew" type='submite'>отправить</button>
		    		</form>
		    		<div class="slider_rew">
		    			<?php 
		    				feedback();
		    			?>
		    			<button id="back" class="back"><img src="style/img/next.png"></button>
								<button id="next" class="next"><img src="style/img/next.png"></button>
		    		</div>
		    	</div>
		    </div>
		    <div class="section_back4">
		    	<div class="container">
	    			<h1>Лицензия и сертификаты</h1>
	    			<div class="document">
	    				<a href="#popup1"><div class="block_document" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
	    					<img src="style/img/image1.png">
	    				</div></a>
	    				<a href="#popup2"><div class="block_document" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
	    					<img src="style/img/1310_bio-sertik.jpg">
	    				</div></a>
	    				<a href="#popup3"><div class="block_document" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
	    					<img src="style/img/image1.png">
	    				</div></a>
	    			</div>
    			</div>	
		    </div>
		    <div class="container">
		    	<h1 class="work_slide">Сделали мы:</h1>
		    	<div class="slider_work">
		    		<button style="align-items: center;display: inline;" class="back_work">
						<img style="width:50px; height: 50px;" src='style/img/arrow-left.svg'>
		    		</button>
	    			<!-- <button class="back_work"><img src="style/img/next.png"></button> -->
		    		<div class="slider_block" data-aos="zoom-in">
		    			<div class="text_line">
		    				<h4>До</h4>
		    				<h4>После</h4>
		    			</div>
		    			<div class="photo_block_work">
		    				<img src="style/img/5f2FzpEQs8PT-WUmodJE0mRNPWQMwQwoi8-jQrQmvyJFeVaKsmDbch9kdbOJiHLKCnVwuEBdldmMGnis13iIivjE.jpg">
		    			</div>
		    			
		    			<div class="text_block_work">
			    			<h1>Детали процедуры</h1>
			    			<p>Комбинированная чистка лица + пилинг.</p>
			    		</div>
		    		</div>
		    		<div class="slider_block" style='display: none;'>
		    			<div class="text_line">
		    				<h4>До</h4>
		    				<h4>После</h4>
		    			</div>
		    			<div class="photo_block_work">
		    				<img src="style/img/An-oxiOmqXTSfo78mCMoji1BLnHx2guyZM6Fr6_yYhG6WZzg7eX9aT-uCEVSXYeEY4AVk1VF9J1Yve44x17k3jaP.jpg">
		    			</div>
		    			<div class="text_block_work">
			    			<h1>Детали процедуры</h1>
			    			<p>Комбинированная чистка лица + пилинг.</p>
			    		</div>
		    		</div>
		    		<div class="slider_block" style='display: none;'>
		    			<div class="text_line">
		    				<h4>До</h4>
		    				<h4>После</h4>
		    			</div>
		    			<div class="photo_block_work">
		    				<img src="style/img/509mjI8ampcS-9jSf3O3xruMElC_MU85UfStx1qbxNKmmLgBXwtD5wjf_r3z7qQWz4UuOjQtpabjjGJm_8RfkKDi.jpg">
		    			</div>
		    			<div class="text_block_work">
			    			<h1>Детали процедуры</h1>
			    			<p>Комбинированная чистка лица + пилинг.</p>
			    		</div>
		    		</div>
		    		<button style="align-items: center;display: inline-block;" class="next_work"><img src='style/img/arrow-right.svg'>
		    			<!-- <object style="width:50px; height: 50px;" type="image/svg+xml" data="style/img/arrow-left.svg">
	    						<img src='style/img/face.svg'>
	    					</object> -->
	    				</button>
		    		<!-- <button class="next_work"><img src="style/img/next.png"></button> -->
		    	</div>
		    </div>
    	</section>
    	<footer>


    		<script type="text/javascript" src="../style/js/slider.js"></script>
    		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    		<script>
			  AOS.init();
			</script>
    		<div class="container">
    			<ul>
    				<a href="#"><li>Наши контакты</li></a>
    				<a href="#"><li>О нас</li></a>
    				<a href="#"><li>Документация</li></a>
    			</ul>
    			<a href='https://vk.com/cosmoslim'><img class="svg_vk" src="style/img/vk.png"></a>

    		</div>
    	</footer>
    	<div id="popup1" class="popup">
	    	<a href="#1" class="popup_area"></a>
		    <div class="popup_body">
		        <div class="popup_content">
					<img style="width:1000px; height:1500px;" src="style/img/image1.png">
		        </div>
		    </div>
		</div>
		<div id="popup2" class="popup">
	    	<a href="#1" class="popup_area"></a>
		    <div class="popup_body">
		        <div class="popup_content">
					<img style="width:1000px; height:1500px;" src="style/img/1310_bio-sertik.jpg">
		        </div>
		    </div>
		</div>
		<div id="popup3" class="popup">
	    	<a href="#1" class="popup_area"></a>
		    <div class="popup_body">
		        <div class="popup_content">
					<img style="width:1000px; height:1500px;" src="style/img/image1.png">
		        </div>
		    </div>
		</div>
	</body>
</html>