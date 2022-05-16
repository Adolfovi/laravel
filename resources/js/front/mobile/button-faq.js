export let renderbuttonfaq = () => {
    let buttonsfaq = document.querySelectorAll('.faq-arrow');
    buttonsfaq.forEach(buttonfaq => {
        buttonfaq.addEventListener('click', () => {
            buttonfaq.classList.toggle('active');
            buttonfaq.parentElement.parentElement.querySelector(".faq-submain").classList.toggle('active');
        })
    });
}