<section class="teachers" id='teachers'>
					<h2 class="teachers__title" >
						Ведущие
					</h2>
					<p class="teachers__subtitle">
						Каждый ведущий эксперт в свой области
					</p>
					<p class="teachers__text">
						В течении мероприятия можно задать акктуальные вопросы и получить экспертный ответ.
					</p>
					<?php 
					require_once 'php/db.php';
					$teachers = mysqli_query($connect, "SELECT * FROM `teachers`");
					$teachers = mysqli_fetch_all($teachers);	
					?>
					<div class="teachers__wrap-item ">
					<?php foreach ($teachers as $teacher) { ?>
						
						<div class="teachers__card ">
							<img class="teachers__img" src="<?=$teacher[3]?>" alt="teachers" >
							<p class="teachers__card-text">
								<p class="teachers__card-title">
									<?=$teacher[1]?>
								</p>
								 <ul class="teachers__card-ul">
										<?=$teacher[2]?>
								 </ul>
							</p>
						</div>				
					<?php };?>
					</div>
					</section>