export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll('.view-product');
    let buyButton = document.querySelector('.buy-product');
    let categoryButtons = document.querySelectorAll('.category-button');
    let forms = document.querySelectorAll('.form-product-buy');
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

                    document.dispatchEvent(new CustomEvent('loadSection', {
                        detail: {
                            section: 'merchandising'
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
    });

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

                        document.dispatchEvent(new CustomEvent('loadSection', {
                            detail: {
                                section: 'cart'
                            }
                        }));

                        document.dispatchEvent(new CustomEvent('message', {
                            detail: {
                                text: 'Producto añadido a la cesta',
                                type: 'success'
                            }
                        }));
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

                    document.dispatchEvent(new CustomEvent('loadSection', {
                        detail: {
                            section: 'merchandising'
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

                    document.dispatchEvent(new CustomEvent('loadSection', {
                        detail: {
                            section: 'merchandising'
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
    });
    
}