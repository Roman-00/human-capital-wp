const frame = () => {
	const buttonOpenModal = document.querySelectorAll('.button-open-modal');
	const iframeBlock = document.querySelector('.popup-content-body');
	const buttonOpenModalSubscribe = document.querySelector('.button-open-modal-sub');
	const iframeBlockSubscribe = document.querySelector('.popup-content-body-subscribe');

	buttonOpenModal.forEach((elem) => {
		elem.addEventListener('click', (event) => {
			event.preventDefault();
			const target = event.target;
			let count = +target.getAttribute('data-modal');
			
			if (count === 1) {
				const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			} else if (count === 2) {
				const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			} else if (count === 3) {
				const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			} else if (count === 4) {
				const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
				// iframeBlock.style.display = 'block';
				iframeBlock.insertAdjacentHTML('beforeend', frame);
			}
		});
	});

	buttonOpenModalSubscribe.addEventListener('click', (event) => {
		event.preventDefault();
		let target = event.target;

		let count = +target.getAttribute('data-modal');

		if (count === 5) {
			const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
			// iframeBlock.style.display = 'block';
			iframeBlockSubscribe.insertAdjacentHTML('beforeend', frame);
		} else if (count === 6) {
			const frame = `<iframe src="https://form.hcse.asia/?count=${count}" width="100%" height="100%">Ваш браузер не поддерживает iframe!</iframe>`;
			// iframeBlock.style.display = 'block';
			iframeBlockSubscribe.insertAdjacentHTML('beforeend', frame);
		}
	});
};

export default frame;
