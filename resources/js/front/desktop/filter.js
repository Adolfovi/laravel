export let renderFilters = () => {
    let mainContainer = document.querySelector("main");
    let orderby = document.querySelectorAll('.orderBy');

    document.addEventListener("renderProductModules",( event =>{
        renderFilters();
    }), {once: true});

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