const links = document.querySelectorAll('.Event-Menu a');

links.forEach(link => {
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
