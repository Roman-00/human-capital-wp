/**
 * * Открываем/Закрываем модальное окно
 */
const togglePopup = () => {
	const popup = document.querySelector('.popup');
	const popupSub = document.querySelector('.popup-subscribe');
	const popupBtn = document.querySelectorAll('.button-open-modal');
	const popupBtnSub = document.querySelector('.button-open-modal-sub');
	const popupContentBody = document.querySelector('.popup-content-body');
	const popupContentBodySub = document.querySelector('.popup-content-body-subscribe');


	popupBtn.forEach(item => {
		item.addEventListener('click', () => popup.style.display = 'flex'); 
	});

	popupBtnSub.addEventListener('click', () => popupSub.style.display = 'flex');

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

	popupSub.addEventListener('click', event => {
		let target = event.target;

		if (target.classList.contains('popup-close')) {
			popupSub.style.display = 'none';
			popupContentBodySub.innerHTML = '';
		} else {
			target = target.closest('.popup-content');
			if (!target) {
				popupSub.style.display = 'none';
				popupContentBodySub.innerHTML = '';
			}
		}
	});
};

export default togglePopup;