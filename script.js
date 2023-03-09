document.addEventListener("DOMContentLoaded", () => {
    let btn= document.getElementById("button-menu")
    let menu = document.getElementById('menu')
    let btn2 = document.getElementById('button-menu2')

    btn.onclick = function (event) {
        menu.style.display = "flex";
        btn.style.display = "none";
        btn2.style.display= "block";
    }
    btn2.onclick = function(event) {
        menu.style.display = "none";
        btn.style.display = "block";
        btn2.style.display= "none";
    }
    for(let i =0; i<5; i++){
        value();
    }

    function value(){

        if(sessionStorage.getItem("counter") == null)
            sessionStorage.setItem("counter", "0");

        let counterValue = Number(sessionStorage.getItem("counter"))
        sessionStorage.setItem("counter",counterValue + 1);

        console.log("Counter Value:",  sessionStorage.getItem("counter"));
    }
});