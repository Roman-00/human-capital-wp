import "@babel/polyfill";
import 'formdata-polyfill';
import 'nodelist-foreach-polyfill';
import elementClosest from 'element-closest';
elementClosest(window);
import 'es6-promise';
import 'fetch-polyfill';

import activeLanguage from './modules/activeLanguage';
import openSubMenu from './modules/openSubMenu';
import newsSlider from './modules/newsSlider';
import parthnersSlider from './modules/parthnersSlider';
import mediaSwiper from './modules/mediaSwiper';
import timer from './modules/timer';
import frame from "./modules/frame";
import tooggleMenu from './modules/toogleMenu';
import togglePopup from './modules/togglePopup';
import togglerAttrMenu from './modules/togglerAttrMenu';

window.addEventListener('DOMContentLoaded', () => {
	'use strict';

	const hero = document.querySelector('#hero');
	const mobileMenuButton = document.querySelector('.top-bar__menu');
	const pageMedia = document.querySelector('.page-media');
	let deadline = '2022-09-21';

	/**
	 * Добавляем аттрибуты в меню
	 */
	togglerAttrMenu();

	/**
	 * Смена активности у языков
	 */
	activeLanguage();

	/**
	 * * Открываем выпадающее меню
	 */
	openSubMenu();

	if (hero) {
		/**
		 * * Слайдер новостей на главной странице
		 */
		newsSlider();

		/**
		 * * Слайдер партнеров на главной странице
		 */
		parthnersSlider();

		/**
		 * * Таймер на главной странице
		 * 
		 * @param selector {Selector: ID, ClassNames}
		 * @param deadline {Data: String}
		 */
		timer('.hero-content__block-timer', deadline);
	}

	/**
	 * * Работа мобильного меню
	 */
	if (mobileMenuButton) {
		tooggleMenu();
	}

	/**
	 * * Слайдер в на странице медиа-центр
	 */
	if (pageMedia) {
		mediaSwiper();
	}

	/**
	 * * Встаиваем Фреймы
	 */
	frame();

	/**
	 * * Модальное окно
	 */
	togglePopup();
});