const menuItem = document.querySelectorAll('.menu-item');

function selecionarLink(event) {
    //event.preventDefault();

    menuItem.forEach((item) => {
        item.classList.remove('ativo');
    });

    this.classList.add('ativo');
}

menuItem.forEach((item) => {
    item.addEventListener('click', selecionarLink);
});


menuItem.forEach((item) => {
    item.addEventListener('click', selecionarLink);
});


const expandir = document.querySelector('#btn-exp');
const menuPrincipal = document.querySelector('.menu-principal');//pega o id
expandir.addEventListener('click',function () {
    menuPrincipal.classList.toggle('expandir');
});
