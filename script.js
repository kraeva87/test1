window.onload = function() {
    let switches = document.querySelectorAll('.switch span');
    switches.forEach(element => {
        element.addEventListener("click", function () {
            let switches = document.querySelectorAll('.switch span');
            switches.forEach(element => {
                if (element.classList.contains("active")) element.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
};