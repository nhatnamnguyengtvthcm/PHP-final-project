//function click like
document.addEventListener('DOMContentLoaded', function() {
    var likes = document.querySelectorAll('.button-like');
    var counts = document.querySelectorAll('.content-like');
   likes.forEach((like, index) =>{
       var count = counts[index];
        like.onclick= function() { 
            count.innerHTML = parseInt(count.innerHTML) + 1;
         };
   });
}, false);