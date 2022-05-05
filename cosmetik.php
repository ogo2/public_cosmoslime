<?php
	require_once('base/functions.php');
	header2('Косметология');
?>
    
    	<section>
    		<div class="section_back6">
    			<div class="container">
  					<h1>Косметология</h1>
  					<div class="tovar">
  						<?php 
  							kosmetik('Косметология');
  						?>
  					</div>

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
	</body>
</html>