//Валидация
function validation(form) {
	function removeError(input) {
		const parent = input.parentNode;
		if (parent.classList.contains('form__error')) {
			parent.querySelector('.form__error-label').remove();
			parent.classList.remove('form__error');
		}
	}
	function error(input, text) {
		const parent = input.parentNode;
		const errorLabel = document.createElement('label');
		errorLabel.classList.add('form__error-label');
		errorLabel.innerText = text;
		parent.classList.add('form__error');
		parent.append(errorLabel);
	}

	let result = true;
	const allInputs = form.querySelectorAll('input');
// Успех
	allInputs.forEach(input => {
		removeError(input);
		if (input.dataset.required =='true') {
			if (input.value == '') {
				error(input, 'Заполните, пожалуйста, поле');
				result = false;
			}
		}
	});

	return result;
}

document.getElementById('form').addEventListener('submit', function (event) {
	event.preventDefault();

if (validation(this) == true) {
		// отправка ajax
	$(document).ready(function () {
	$('form').on('submit', function (event) {
		event.preventDefault();
		$.post('php/form.php', $(this).serialize());
		$(this).reset();
	});
});
	// Модалка
		const modalValid = document.querySelector('.form__modal');
		const form = document.querySelector('.form');
		const modalCross = document.querySelector('.form__modal-cross');

		modalValid.classList.add('active-flex');
		form.classList.remove('active-flex');
		modalCross.addEventListener('click',()=>{
			modalValid.classList.remove('active-flex');
			document.body.style.overflow = '';
		});
	}
});
