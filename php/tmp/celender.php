<section class="calender" id="calender">
						
						<div class="calender__wrap-item">
							<h2 class="calender__title">
							Календарь интенсивов
						</h2>
						<img src="img/icon/calender.gif" alt="calender" class="calender_img">
						<p class="calender__text">Выбирайте удобную дату и бронируйте место. Количество мест ограничено для оптимального внимания и заботы.</p>
						<?php 
					require_once 'php/db.php';
					$calender = mysqli_query($connect, "SELECT * FROM `calender` ");
					$calender = mysqli_fetch_all($calender);
					foreach ($calender as $data){
					?>
							<button class="calender__date">
								<?=date("d.m.Y", strtotime($data[1]));?>
							</button>
						<?php };?>	
						</div>
						<p class="calender__text">
							Обратите внимание, что дата интесива может быть изменена или отменена. В случае отмены, участников которые забронировали место оповестят за 3 рабочих дня и венуть полную стоимость денежных средст внесённых в качестве брони.
						</p>
				</section>