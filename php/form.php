<?php
if(!empty($_POST)){
$TOKEN = "6747869891:AAEdEWn317vuN6uEPb_jNvvNLGGF6j1koBM";
$chat_id = "-4192264330";
$method = 'sendMessage';
$URL_API = "https://api.telegram.org/bot{$TOKEN}/{$method}";
$optionsSend = "parse_mode=html";

$data= [
  'Имя' => $_POST['name'],
  'Телефон' => $_POST['phone'],
  'Дата' => $_POST['date'],
	'App' =>$_POST['whatsApp'],
	'Телеграмм' => $_POST['tg'],
];
$txt = null;
foreach($data as $k => $v){
  echo $txt.= $v ." ";
};

$send_telegram = fopen("{$URL_API}?chat_id={$chat_id}&{$optionsSend}&text={$txt}","r");
if($send_telegram){
  echo "ok";
}else {
  echo "error";
};
};
?>
<div class="form__modal">
		<div class="form__modal-cross">+</div>
		<p class="form__modal-text">
		Благодарим за заявку! 
		<br>
		<br>
		В скорем времени наш менеджер с Вами свяжеться.
		</p>
		<p class="form__modal-text--quote">
			Что разум человека может постигнуть и во что он может поверить, того он способен достичь	
		<br>
		<span>Наполеон Хилл, журналист и писатель </span> 										
		</p> 
		
</div>


<form class="form" action="form.php" id="form" method="post" autocomplete="on">
	
							<div class="form__cross">
									<span class="form__cross-item">+</span>
							</div>

							<p class="form__text">
								Пожалуйста, введите как к Вам обращаться:
								</p>
								<div class="form__inner-input">
									<input data-required="true" class="form__field "  type="text" name="name" placeholder="Введите Ваше имя и фамилию">
								</div>
								<p class="form__text">
									Введите контактный номер телефона:
								</p>
								<div class="form__inner-input">
									<input data-required="true" class="form__field phone-mask" id="phone" type="tel" name="phone" placeholder="+7 (999)999-99-99">
								</div>	
								<div class="form__inner-input--whatsApp">
									<label for="WhatsApp" class="form__text">Использую <span style="color: green;" >WhatsApp</span>  по указанному номеру</label>
									<select id="WhatsApp" name="whatsApp" class="form__select" >
										<option class="form__option">Да
										</option>
										<option class="form__option">Нет
										</option>
									</select>
  								
								</div>
								<p class="form__text">
									Выберите дату интенсива:
								</p>
								<select name="date" class="form__select">
											<?php 
											require_once 'php/db.php';
											$calender = mysqli_query($connect, "SELECT * FROM `calender` ");
											$calender = mysqli_fetch_all($calender);
											foreach ($calender as $data){
											?>
									<option class="form__option" >
											<?=date("d.m.Y", strtotime($data[1]));?>
								</option>
									
									<?php };?>
								</select>
								<p class="form__text">Добавьте ссылку на Ваш профиль в телеграм  для обратной связи:</p>
								<div class="form__inner-input">
									<input class="form__field" id="tg" type="text" name="tg" value="https://t.me/">
								</div>
								
						
							<button form="form" class="form__btn" type="submit"> Отправить</button>
							
				</form>

				
				
									