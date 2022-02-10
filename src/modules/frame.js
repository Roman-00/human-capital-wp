const frame = () => {
	const buttonOpenModal = document.querySelectorAll('.button-open-modal');
	const iframeBlock = document.querySelector('.popup-content-body');
	const title = document.querySelector('.popup-title');

	buttonOpenModal.forEach((elem) => {
		elem.addEventListener('click', (event) => {
			event.preventDefault();
			const target = event.target;
			let count = +target.getAttribute('data-modal');
			
			if (count === 1) {
				title.innerHTML = 'Заявка на участие в выставке';
				const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			} else if (count === 2) {
				title.innerHTML = 'Стать делегатом Саммита';
				const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			}
		});
	});
};

export default frame;
