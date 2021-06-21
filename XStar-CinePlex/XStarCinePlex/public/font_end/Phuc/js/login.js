//Login-form
 document.addEventListener('DOMContentLoaded', function(){
   var tab = document.querySelectorAll('.tablinks');
   var login = document.querySelector('.form-container');
var res = document.querySelector('.res-container');
    console.log(res);
    tab[1].onclick = function() {
login.classList.add('ko');
       res.classList.remove('ko');}
   tab[0].onclick = function() {
       login.classList.remove('ko');
      res.classList.add('ko');   }
}, false);





