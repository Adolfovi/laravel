export let renderproductquantitycart = () => {
    let mainContainer = document.querySelector("main");
    let cartMinus = document.querySelectorAll('.cart-minus-button');
    let cartPlus = document.querySelectorAll('.cart-plus-button');


    document.addEventListener("renderProductModules",( event =>{
        renderproductquantitycart();
    }), {once: true});




    

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

                    document.dispatchEvent(new CustomEvent('renderProductModules'));
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