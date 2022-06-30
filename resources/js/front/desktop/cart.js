export let renderCart = () => {

    let mainContainer = document.querySelector("main");
    let checkoutButton = document.querySelector('.checkout-button');
    let cartMinus = document.querySelectorAll('.cart-minus-button');
    let cartPlus = document.querySelectorAll('.cart-plus-button');
   
    document.addEventListener("loadSection",( event =>{
        if(event.detail.section.includes('cart')){
            renderCart();
        }
    }));



    if(checkoutButton){

        checkoutButton.addEventListener('click', () => {

            let url = checkoutButton.dataset.url;

            let sendShowRequest = async () => {

                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
                                
                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('loadSection', {
                        detail: {
                            section: 'checkout'
                        }
                    }));
                })
                .catch(error =>  {
    
                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendShowRequest();
            
        });
    
    }

    cartMinus.forEach(element => {

        element.addEventListener('click', () => {

            let url = element.dataset.url;

            let sendMinusShowRequest = async () => {

                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
                                
                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('loadSection', {
                        detail: {
                            section: 'carts'
                        }
                    }));
                })
                .catch(error =>  {
    
                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendMinusShowRequest();
            
        });
    });
 
    cartPlus.forEach(element => {

        element.addEventListener('click', () => {

            let url = element.dataset.url;

            let sendPlusShowRequest = async () => {

                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
                                
                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('loadSection', {
                        detail: {
                            section: 'carts'
                        }
                    }));

                })
                .catch(error =>  {
    
                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendPlusShowRequest();
            
        });
    });
}