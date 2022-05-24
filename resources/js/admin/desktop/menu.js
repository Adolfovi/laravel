export let renderMenu = () => {
    
    let menuButton = document.getElementById("nav-icon3");

    if(menuButton){
        menuButton.addEventListener("click", function () {
            document.querySelector('#nav-icon3').classList.toggle('open');
            document.querySelector('.admin-panel-nav-menu').classList.toggle('active');
        });
        
    }

}
