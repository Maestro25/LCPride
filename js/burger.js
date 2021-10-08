const nav = document.querySelector('.nav-list');
const navLinks = document.querySelectorAll('.nav-link');
const burger = document.querySelector('.burger');
const footer = document.querySelector('.page-footer');

const navSlide = () => {
	

	burger.addEventListener('click', () => {
		nav.classList.toggle('nav-active');
		footer.classList.toggle('footer-active');
		burger.classList.toggle('open');
	});

}

const navClose = () => {
	navLinks.forEach((link) => {
		link.addEventListener('click', () => {
			nav.classList.toggle('nav-active');
			footer.classList.toggle('footer-active');
			burger.classList.toggle('open');
		});
	});
}

navSlide();
navClose();