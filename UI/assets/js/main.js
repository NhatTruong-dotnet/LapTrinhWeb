// JS use for modal sign up and login
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const modalTittle = $$('.title-block__item');
const modalContent = $$('.content__modal--block');

const modalTittleActive = $('.content__modal--block.active');
const modalLine = $('.title_block .title-block__line');

modalLine.style.left = modalTittleActive.offsetLeft + 'px';
modalLine.style.width = modalTittleActive.offsetWidth + 'px';

modalTittle.forEach((title, index) => {
    const content = modalContent[index];
    title.onclick = function() {
        $('.title-block__item.active').classList.remove('active');
        $('.content__modal--block.active').classList.remove('active');

        modalLine.style.left = this.offsetLeft + 'px';
        modalLine.style.width = this.offsetWidth + 'px';

        this.classList.add('active');
        content.classList.add('active');
    }
});



// End modal sign up and login