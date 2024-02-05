<section class="history" id="history">
	<h2 class="history__title">
	История интесива
	</h2>
	<div class="history__wrap-text">
		<p class="history__text">
		Приветсвую! С вами Даниил Морозов - идейный вдохновитель и организатор йога-интесивов. С чего всё началось.
		</p>
		<p class="history__text">
			"Идея йога-интесивов" зародилась после того как я в течении года проводил Йога-туры "Живая вода" на КМВ (Кавказские минеральный воды) в г.Кисловодск в качестве инструктора по йоге.
		</p>
		<p class="history__text">
		За этот год мне удалось выявить формулу при которой человек получает наибольшую пользу от практик. 
		</p>
		<p class="history__text">
		Задача интесивов перенести этот опыт в лаконичной форме и дать возможность каждому прикоснуться к атмосфере "йоговского образа жизни" и возможно остаться в ней на всю жизнь.
		</p>
	</div>
	<div class=" history__slider slider-wrap ">
		<div class="history__img-wrap slider-line">
				<?php 
					require_once 'php/db.php';
					$historyImg = mysqli_query($connect, "SELECT * FROM `img_history` ");
					$historyImg = mysqli_fetch_all($historyImg);
				?>
				<?php foreach ($historyImg as $src_img){
				?>
				<img src="<?= $src_img[1]?>" alt="" class="history__img"> 
				<?php };?>
				
		</div>
		<img class="history__icon-finger" src="img/icon/finger.gif" alt="finger">
		<!-- <div class=" slider-btn-next slider-control"> </div>
		<div class=" slider-btn-prev slider-control"> </div> -->
	</div>
	
</section>