export let renderSwitch = () => {

    let switchButton = document.querySelector('.icons-header-form-icon-onoff');

    if(switchButton){
        switchButton.addEventListener('click', function () {
            document.querySelector('.icons-header-form-icon-onoff').classList.toggle('active');
        });
        
    }
}
