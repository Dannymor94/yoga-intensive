const dropUpEl = document.querySelector('.nav__select-menu');

function progressBar() {
	let scroll = document.body.scrollTop || document.documentElement.scrollTop;
	let height =
		document.documentElement.scrollHeight -
		document.documentElement.clientHeight;
	let scrolled = (scroll / height) * 100;

	document.querySelector('.nav__progress').style.height = scrolled + '%';
}

function nav() {
	window.addEventListener('scroll', progressBar);
	const navList = document.querySelector('.nav__ul');
	const nav = document.querySelector('.nav');

	navList.addEventListener('click', event => {
		console.log(event.target);
		if (event.target !== nav) {
			nav.classList.remove('active-block');
		}
	});
	nav.classList.toggle('active-block');
}

dropUpEl.addEventListener('click', nav);

function textShow() {
	const itemTitle = document.querySelectorAll('.program__inner-title');

	itemTitle.forEach(e => {
		e.addEventListener('click', event => {
			const eTarget = event.target;
			const closestItem = eTarget.nextElementSibling;
			if (closestItem != null) {
				closestItem.classList.toggle('active-block');
			}
		});
	});
}
textShow();

function formShow() {
	const crossItem = document.querySelector('.form__cross');
	const form = document.querySelector('.form');
	const button = document.querySelectorAll('button');

	button.forEach(item => {
		item.addEventListener('click', () => {
			document.body.style.overflow = 'hidden';
			form.classList.add('active-flex');
		});
	});
	crossItem.addEventListener('click', () => {
		document.body.style.overflow = '';
		form.classList.toggle('active-flex');
	});
}
formShow();


function priceShow (){
	
	const priceIcon = document.querySelector('.price__img-wrap');
	const priceCart = document.querySelector('.price__cart');
	priceCart.classList.add('hidden')
	priceIcon.addEventListener('click',()=>{
		priceCart.classList.remove('hidden');
		priceIcon.classList.add('hidden');
	});
	priceCart.addEventListener('click',()=>{
		priceCart.classList.add('hidden');
		priceIcon.classList.remove('hidden');
	})
};
priceShow ()