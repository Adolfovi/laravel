export let renderformcheckout = () => {

    let buttoncheckout = document.querySelector('.pay-continue');
    if (buttoncheckout) {
        buttoncheckout.addEventListener('click', (event) => {

            event.preventDefault();

            document.dispatchEvent(new CustomEvent('message', {
                detail: {
                    text: 'Formulario Enviado',
                    type: 'success'
                }
            }));

        });

    }

}