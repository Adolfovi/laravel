export let renderNotification = () => {

    document.addEventListener('message', (event) => {

        let notification = document.querySelector('.notification');
        let notificationMessage = document.querySelector('.notification-text');
        
            notificationMessage.innerHTML = event.detail.text;
            notification.classList.add(event.detail.type);
            notification.classList.add('active');

            setTimeout(() => {
                notification.classList.remove('active');
                notification.classList.remove(event.detail.type);
            }, 4000);


        

    });


}