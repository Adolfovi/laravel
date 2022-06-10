export let renderSelectCategory = () => {
    let selecttypes = document.querySelector('#type-products');

    selecttypes.addEventListener('change', () => {
        let url = selecttypes.dataset.url;

        let sendEditRequest = async () => {

            document.dispatchEvent(new CustomEvent('startWait'));

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

                    document.dispatchEvent(new CustomEvent('loadForm', {
                        detail: {
                            form: json.form,
                        }
                    }));

                    document.dispatchEvent(new CustomEvent('renderFormModules'));
                })
        };
        sendEditRequest();

    });
}