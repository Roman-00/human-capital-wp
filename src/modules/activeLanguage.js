/**
 * Смена активности у языков
 */
const activeLanguage = () => {
    const windowLocation = window.location;
    const linkEng = document.querySelector('.top-bar-language__link-eng');
    const linkRus = document.querySelector('.top-bar-language__link-rus');
    const mobileLinkEng = document.querySelector('.mobile-menu__block-language-link-eng');
    const mobileLinkRus = document.querySelector('.mobile-menu__block-language-link-rus');

    if (windowLocation.pathname === '/') {
        linkRus.classList.add('top-bar-language__link--active');

        if(mobileLinkRus) {
            mobileLinkRus.classList.add('mobile-menu__block-language-link--active');
        }
    } else if (windowLocation.pathname === '/en/') {
        linkEng.classList.add('top-bar-language__link--active');

        if (mobileLinkEng) {
            mobileLinkEng.classList.add('mobile-menu__block-language-link--active');
        }
    }
};

export default activeLanguage;