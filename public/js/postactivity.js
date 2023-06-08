let up = document.getElementById('menu_up');
let down = document.getElementById('menu_down');
let message = document.querySelector('.message');
let message_up = document.querySelector('.message_up');

/*
let edit_experience = document.querySelector('.edit_experience');
let edit_experience_toggle = 0;

let experience_judul = document.querySelectorAll('.experience_judul h2');
let experience_content_p = document.querySelector('.experience_content_p');
let experience_ul = document.querySelector('.my_experience_content_left ul');
let edit_experience_h2 = document.querySelector('.edit_experience h2');


let img = document.querySelectorAll('.my_post_content_img img');
let img_size = img.length;


for(let i=1;i<img_size;i++){
    img[i].style.marginLeft="10px";
}

*/
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


let modal = document.querySelector('.saved_post2_modal');
let close_modal = document.querySelector('.modal_close');
let saved_post2 = document.querySelector('.saved_post2');
let content_frame = document.querySelectorAll('.content_frame');

let size = content_frame.length;
for(let i=0; i<size;i++){
    content_frame[i].addEventListener('click',function(e){
        modal.style.display="flex";
        modal.style.pointerEvents="auto";
        saved_post2.style.pointerEvents="none";
    });
}

close_modal.addEventListener('click',function(e){
    modal.style.display="none";
    modal.style.pointerEvents="none";
    saved_post2.style.pointerEvents="auto";
});

