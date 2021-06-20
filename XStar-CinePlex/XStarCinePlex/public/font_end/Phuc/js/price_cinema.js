//tab price cinema
document.addEventListener("DOMContentLoaded", function(){
    var tabs = document.getElementById('inputGroupSelect01');
    var tab_img = document.querySelectorAll('.cinema');
    var tab_price = document.querySelectorAll('.cinema-price');
     tabs.onclick = function () {
        var x =  document.getElementById('inputGroupSelect01').value;
        if(x == "1") {
           document.querySelector('.cinema.none-cinema.active-cinema').classList.remove('active-cinema');
           document.querySelector('.cinema-price.none-cinema.active-cinema').classList.remove('active-cinema');
           tab_img[0].classList.add('active-cinema');
           tab_price[0].classList.add('active-cinema');
        };
        if(x == "2") {
            document.querySelector('.cinema.none-cinema.active-cinema').classList.remove('active-cinema');
            document.querySelector('.cinema-price.none-cinema.active-cinema').classList.remove('active-cinema');
            tab_img[1].classList.add('active-cinema');
            tab_price[1].classList.add('active-cinema');
        };
        if(x == "3") {
            document.querySelector('.cinema.none-cinema.active-cinema').classList.remove('active-cinema');
            document.querySelector('.cinema-price.none-cinema.active-cinema').classList.remove('active-cinema');
            tab_img[2].classList.add('active-cinema');
            tab_price[2].classList.add('active-cinema');
        };
        if(x == "4") {
            document.querySelector('.cinema.none-cinema.active-cinema').classList.remove('active-cinema');
            document.querySelector('.cinema-price.none-cinema.active-cinema').classList.remove('active-cinema');
            tab_img[3].classList.add('active-cinema');
            tab_price[3].classList.add('active-cinema');
        };

     };
}, false);
