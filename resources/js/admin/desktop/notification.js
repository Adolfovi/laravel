export let renderNotification = function() {
    document.querySelectorAll('.thrash').forEach(thrash => {
        thrash.addEventListener('click', () => {
            document.querySelector('.deletenotificationcontainer').classList.add('active');
        });
    });
}