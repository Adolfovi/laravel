export let renderresponsive = () => {
    if (window.matchMedia("(max-width: 1025px)").matches) {
        document.querySelector(".responsive").href = "./style/app-mobile.css";
      } else {
        document.querySelector(".responsive").href = "./style/app.css";        
      }      
}