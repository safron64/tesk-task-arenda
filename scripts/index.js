document.addEventListener('DOMContentLoaded', function () {
	const menuBtn = document.getElementById('menu-btn')
	const nav = document.getElementById('nav')
	const body = document.body

	menuBtn.addEventListener('click', () => {
		// Переключаем класс 'open' для меню и кнопки
		nav.classList.toggle('open')
		menuBtn.classList.toggle('open')
		body.classList.toggle('no-scroll')
	})

})
