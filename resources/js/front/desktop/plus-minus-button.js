export let renderPlusMinusButton = () => {

    let minuses = document.querySelectorAll('.quantity-minus');
    let pluses = document.querySelectorAll('.quantity-plus');
    
    pluses.forEach(plus => {

        plus.addEventListener('click', () => {

            let plusMinusInput = plus.parentNode.querySelector('.input-quantity');
           
            parseInt(plusMinusInput.value++);
        });
    });

    minuses.forEach(minus => {
        minus.addEventListener('click', () => {

            let plusMinusInput =  minus.parentNode.querySelector('.input-quantity');;

            if (plusMinusInput.value > 1) {
                parseInt(plusMinusInput.value--);
            }
        });
    });
}