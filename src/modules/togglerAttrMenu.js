/**
 * Добавляем атребуты для блоков в меню
 */
const togglerAttrMenu = () => {
    const menuID81 = document.getElementById('menu-item-81');
    const menuID79 = document.getElementById('menu-item-79');
    const menuID75 = document.getElementById('menu-item-75');
    const menuID70 = document.getElementById('menu-item-70');
    const menuID67 = document.getElementById('menu-item-67');
    const menuID59 = document.getElementById('menu-item-59');

    if (menuID81) {
        const menuIDNextNoda = menuID81.firstElementChild;
        menuIDNextNoda.classList.add('button-open-modal');
        menuIDNextNoda.setAttribute('data-modal', '1');
    }

    if (menuID79) {
        const menuIDNextNoda = menuID79.firstElementChild;
        menuIDNextNoda.classList.add('button-open-modal');
        menuIDNextNoda.setAttribute('data-modal', '1');
    }

    if (menuID75) {
        const menuIDNextNoda = menuID75.firstElementChild;
        menuIDNextNoda.classList.add('button-open-modal');
        menuIDNextNoda.setAttribute('data-modal', '2');
    }

    if (menuID70) {
        const menuIDNextNoda = menuID70.firstElementChild;
        menuIDNextNoda.classList.add('button-open-modal');
        menuIDNextNoda.setAttribute('data-modal', '4');
    }

    if (menuID67) {
        const menuIDNextNoda = menuID67.firstElementChild;
        menuIDNextNoda.classList.add('button-open-modal');
        menuIDNextNoda.setAttribute('data-modal', '3');
    }

    if (menuID59) {
        const menuIDNextNoda = menuID59.firstElementChild;
        menuIDNextNoda.classList.add('button-open-modal');
        menuIDNextNoda.setAttribute('data-modal', '4');
    }
};

export default togglerAttrMenu;