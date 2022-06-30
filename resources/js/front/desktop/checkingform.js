export let renderCheckingForm = () => {
    let mainContainer = document.querySelector("main");
    let buyButton = document.querySelector('.pay-continue');
    let forms = document.querySelectorAll('.checking-admin-form');
   
    document.addEventListener("loadSection",( event =>{
        if(event.detail.section.includes('checkout')){
            renderForm();
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
 
}