//function click
document.addEventListener('DOMContentLoaded', function(){
    var view = document.querySelectorAll('.box-account a');
    var tabs = document.querySelectorAll('.tab-account a');
    var tab_pane = document.querySelectorAll('.tab-pane');
    var edit = document.querySelectorAll('.account-head a');
     tabs.forEach((tab, index)=> {
         var pane = tab_pane[index];
         tab.onclick = function () {
             document.querySelector('a.nav-link.bg-secondary.text-white.my-1.box-red').classList.remove('box-red');
             document.querySelector('.tab-pane.active').classList.remove('active');
             pane.classList.add('active');
             this.classList.add('box-red');
         };
     });
    
     view[0].onclick = function() {
        document.querySelector('a.nav-link.bg-secondary.text-white.my-1.box-red').classList.remove('box-red');
        document.querySelector('.tab-pane.active').classList.remove('active');
        tabs[3].classList.add('box-red');
        tab_pane[3].classList.add('active');
     }

     view[1].onclick = function() {
        document.querySelector('a.nav-link.bg-secondary.text-white.my-1.box-red').classList.remove('box-red');
        document.querySelector('.tab-pane.active').classList.remove('active');
        tabs[2].classList.add('box-red');
        tab_pane[2].classList.add('active');
     }

     edit[0].onclick =function() {
        document.querySelector('a.nav-link.bg-secondary.text-white.my-1.box-red').classList.remove('box-red');
        document.querySelector('.tab-pane.active').classList.remove('active');
        tabs[1].classList.add('box-red');
        tab_pane[1].classList.add('active');

     }

     //change box password
     var checkbox = document.getElementById('password-select');
     var content = document.querySelectorAll('.change');
     checkbox.onclick = function() {
        content[0].classList.toggle('change');
        content[1].classList.toggle('change');
        content[2].classList.toggle('change');
     }
}, false)

