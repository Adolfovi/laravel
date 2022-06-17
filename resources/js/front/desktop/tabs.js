export let renderTabs = () => {
    let select = document.querySelector('.select-type');
    let relateds = document.querySelectorAll('.type-related');

    document.addEventListener("renderProductModules",( event =>{
        renderTabs();
    }), {once: true});

    if (select) {
        select.addEventListener('change', () => {
            relateds.forEach(related => {
                related.classList.remove('active');
                if (select.value == related.dataset.elementtype) {
                    related.classList.add('active');
                }
            });
        });
    }
}