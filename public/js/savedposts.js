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

let back_btn = document.querySelector('.back_btn');
back_btn.addEventListener('click',function(e){
    window.history.back();
});


let modal_caption = document.querySelector('.modal_left_caption');
let modal_comment = document.querySelector('.modal_left_comment');
/*
modal_comment.style.height = (100 - modal_caption.style.height) + "px";
modal_caption.style.height="fit-content";*/




