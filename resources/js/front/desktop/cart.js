export let renderCart = () => {

    let mainContainer = document.querySelector("main");
    let buyButton = document.querySelector('.buy-product');
    let checkoutButton = document.querySelector('.checkout-button');
    let forms = document.querySelectorAll('.form-product-buy');
    let cartMinus = document.querySelectorAll('.cart-minus-button');
    let cartPlus = document.querySelectorAll('.cart-plus-button');
   
    document.addEventListener("loadSection",( event =>{
        if(event.detail.section.includes('cart')){
            renderCart();
        }
    }));

    if(buyButton){

        buyButton.addEventListener("click", (event) => {

            event.preventDefault();
    
            forms.forEach(form => { 

                let data = new FormData(form);
                let url = form.action;


                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
                }

    
                let sendPostRequest = async () => {
    
                    
                    let response = await fetch(url, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST',
                        body: data
                    })
                    .then(response => {
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        mainContainer.innerHTML = json.content;

                        document.dispatchEvent(new CustomEvent('loadTable', {
                            detail: {
                                table: json.table,
                            }
                        }));

                        document.dispatchEvent(new CustomEvent('renderProductModules'));
                    })
                    .catch ( error =>  {
                        
    
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
                sendPostRequest();
            });
        });
    }

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

                    document.dispatchEvent(new CustomEvent('renderProductModules'));
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

                    document.dispatchEvent(new CustomEvent('renderProductModules'));
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