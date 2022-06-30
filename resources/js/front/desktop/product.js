export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll('.view-product');
    let buyproduct = document.querySelector('.buy-product');
    let categoryButtons = document.querySelectorAll('.category-button');
    let orderby = document.querySelectorAll('.orderBy');

    document.addEventListener("loadSection",( event =>{
        if(event.detail.section.includes('merchandising')){
            renderProducts();
        }
    }));

    viewButtons.forEach(viewButton => {

        viewButton.addEventListener('click', () => {

            let url = viewButton.dataset.url;
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
    });


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


    categoryButtons.forEach(categoryButton => {

        categoryButton.addEventListener('click', () => {
            let url = categoryButton.dataset.url;
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
    });

    orderby.forEach(element => {

        element.addEventListener('change', () => {

            let url = element.value;

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
    });
    
}