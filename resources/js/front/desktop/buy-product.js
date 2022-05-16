export let buyproduct = () => {
    let buyproduct = document.querySelector('.buy-product');

    if (buyproduct) {

        buyproduct.addEventListener('click', (event) => {

            event.preventDefault();

            document.dispatchEvent(new CustomEvent('message', {
                detail: {
                    text: 'Producto añadido a la cesta',
                    type: 'success'
                }
            }));
        });

    }

}