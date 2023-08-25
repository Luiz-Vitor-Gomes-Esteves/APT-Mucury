const linksPage = document.querySelectorAll('.Menu-Form a');

linksPage.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        const targetId = link.getAttribute('data-target');
        const contents = document.querySelectorAll('.Page-Form');

        contents.forEach(content => {
            if (content.id === targetId) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        });
    });
});

//Menu form
const linksPages = document.querySelectorAll('.Option-Menu-Form');

linksPages.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        linksPage.forEach(otherLink => {
            if (otherLink === link) {
                otherLink.classList.add('ativo');
            } else {
                otherLink.classList.remove('ativo');
            }
        });
    });
});
