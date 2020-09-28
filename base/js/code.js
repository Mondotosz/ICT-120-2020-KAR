document.addEventListener("DOMContentLoaded",()=>{

    let chkShow = document.getElementById("chkShow")
    let h3Coucou = document.getElementById("h3Coucou");
    chkShow.addEventListener("change",()=>{
        if (chkShow.checked){
            h3Coucou.classList.remove("hidden");
        } else {
            h3Coucou.classList.add("hidden");
        }
    })

});