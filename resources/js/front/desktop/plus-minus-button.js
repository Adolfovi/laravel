export let renderPlusMinusButton = () => {

    let minuses = document.querySelectorAll('.quantity-minus');
    let pluses = document.querySelectorAll('.quantity-plus');

    document.addEventListener("renderProductModules",( event =>{
        renderPlusMinusButton();
    }), {once: true});
    
    pluses.forEach(plus => {

        plus.addEventListener('click', (event) => {
            event.preventDefault();
            let plusMinusInput = plus.parentNode.querySelector('.input-quantity');
           
            parseInt(plusMinusInput.value++);
        });
    });

    minuses.forEach(minus => {
        minus.addEventListener('click', (event) => {
            event.preventDefault();
            let plusMinusInput =  minus.parentNode.querySelector('.input-quantity');;

            if (plusMinusInput.value > 1) {
                parseInt(plusMinusInput.value--);
            }
        });
    });
}