<?php
	require_once('base/functions.php');
	$but = $_GET['redaction_product_button'];
	
	
	header2($but);
?>
    
    	<section>
    		<div class="section_back6">
    			<div class="container">
  						<?php 
  							redaction_product($but);
  						?>
  						
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
    			<div class="vk_block2"><a href='https://vk.com/cosmoslim'><img class="svg_vk" src="style/img/vk.png"></a></div>

    		</div>
    	</footer>
    	<!-- <footer>
    		<div class="container">
    			<ul>
    				<a href="#"><li>Наши контакты</li></a>
    				<a href="#"><li>О нас</li></a>
    				<a href="#"><li>Документация</li></a>
    			</ul>
    			<div class="vk_block2"><a href='https://vk.com/cosmoslim'><object style="" type="image/svg+xml" data="style/img/vk.svg">
    				<img src='img/logo_cosmo.svg'>
    			</object></a></div>

    		</div>
    	</footer> -->
	</body>
</html>