/**
 * * Открываем/Закрываем модальное окно
 */
const togglePopup = () => {
	const popup = document.querySelector('.popup');
	const popupBtn = document.querySelectorAll('.button-open-modal');
	const popupContentBody = document.querySelector('.popup-content-body');


	popupBtn.forEach(item => {
		item.addEventListener('click', () => popup.style.display = 'flex'); 
	});

	popup.addEventListener('click', event => {
		let target = event.target;

		if (target.classList.contains('popup-close')) {
			popup.style.display = 'none';
			popupContentBody.innerHTML = '';
		} else {
			target = target.closest('.popup-content');
			if (!target) {
				popup.style.display = 'none';
				popupContentBody.innerHTML = '';
			}
		}
	});
};

export default togglePopup;