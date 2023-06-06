let up = document.getElementById('menu_up');
let down = document.getElementById('menu_down');
let message = document.querySelector('.message');
let message_up = document.querySelector('.message_up');
up.addEventListener('click',function(e){
    message.style.display="none";
    message.style.pointerEvents="none";
    message_up.style.display="flex";
    message_up.style.pointerEvents="auto";
});
down.addEventListener('click',function(e){
    message_up.style.display="none";
    message_up.style.pointerEvents="none";
    message.style.display="flex";
    message.style.pointerEvents="auto";
});

let back_btn = document.querySelector('.back_btn');
back_btn.addEventListener('click',function(e){
    window.history.back();
});
