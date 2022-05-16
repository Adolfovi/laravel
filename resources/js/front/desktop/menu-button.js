export let renderMenuButton = () => {

    let hamburger = document.getElementById('hamburger-menu-button');
    let navMenu = document.getElementById('nav-menu-mobile');
    let hamburgerSvg = document.getElementById('hamburger-menu-button-svg');

    if(hamburger) {
        hamburger.addEventListener('click', () => {

            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
            hamburgerSvg.classList.toggle('active');

        });
    }
}