export let renderNotification = () => {

    document.querySelectorAll('.thrash').forEach(thrash => {
        thrash.addEventListener('click', () => {
            document.querySelector('.deletenotificationcontainer').classList.add('active');
        });
    });

    document.querySelector('.yes').addEventListener('click', () => {
        document.querySelector('.deletenotificationcontainer').classList.remove('active');
    });

    document.querySelector('.no').addEventListener('click', () => {
        document.querySelector('.deletenotificationcontainer').classList.remove('active');
    });

}