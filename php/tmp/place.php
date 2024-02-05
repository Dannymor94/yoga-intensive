<section class="place" id="place">
					<h2 class="place__title">Пространства интенсива</h2>
					
					<?php 
					require_once 'php/db.php';
					$place = mysqli_query($connect, "SELECT * FROM `place` ");
					$place = mysqli_fetch_all($place);

					
					?>

					<p class="place__text">
						<?php foreach ($place as $data){?>
						<?=$data[1] ?>
						<?php };?>
					</p>
					<div class="place__wrap-item">
						<?php foreach ($place as $data){?>
						<img src="<?=$data[2] ?>"class="place__img">
						<?php };?>
					</div>
				
					<p class="place__text">
						<?php foreach ($place as $data){?>
						<?=$data[3] ?>
						<?php };?>
					</p>
					<div class="place__wrap-item">
						<?php foreach ($place as $data){?>
						<img src="<?=$data[4] ?>"class="place__img">
						<?php };?>
					</div>
					
					<p class="place__text">
						*Трансфер из 
зала практик 
в гостевой дом 
влючен в стоимость
интесива
					</p>
				</section>