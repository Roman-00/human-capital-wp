const frame = () => {
	const buttonOpenModal = document.querySelectorAll('.button-open-modal');
	const iframeBlock = document.querySelector('.popup-content-body');

	buttonOpenModal.forEach((elem) => {
		elem.addEventListener('click', (event) => {
			event.preventDefault();
			const target = event.target;
			let count = +target.getAttribute('data-modal');
			
			if (count === 1) {
				const frame = `<iframe src="http://human/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			} else if (count === 2) {
				const frame = `<iframe src="http://human/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			}
		});
	});
};

export default frame;
