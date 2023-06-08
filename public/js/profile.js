let up = document.getElementById('menu_up');
let down = document.getElementById('menu_down');
let message = document.querySelector('.message');
let message_up = document.querySelector('.message_up');


let edit_experience = document.querySelector('.edit_experience');
let edit_experience_toggle = 0;

let experience_judul = document.querySelectorAll('.experience_judul h2');
let experience_content_p = document.querySelector('.experience_content_p');
let experience_ul = document.querySelector('.my_experience_content_left ul');
let edit_experience_h2 = document.querySelector('.edit_experience h2');


let edit_btn = document.querySelector('.edit-btn');
let edit_btn_h3 = document.querySelector('.edit-btn h3');
let about_me_content = document.querySelector('.about-me_content p');
let about_me_content_rev = document.querySelector('.about_me_content_rev');



if(document.querySelector('.my_post_content_img')!=null){
    let img = document.querySelectorAll('.my_post_content_img img');
    let img_size = img.length;
    for(let i=1;i<img_size;i++){
        img[i].style.marginLeft="10px";
    }
}

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

about_me_content.addEventListener('input',function(e){
    e.preventDefault();
    about_me_content_rev.value = about_me_content.innerText;
});


edit_btn.addEventListener('click',function(e){

    about_me_content.contentEditable = !about_me_content.isContentEditable;
    if(about_me_content.isContentEditable){
        e.preventDefault();

        edit_btn_h3.innerText="Save Edit";
        about_me_content_rev.value = about_me_content.innerText;
        console.log(about_me_content_rev.value);
    }
    else{
        edit_btn_h3.innerText="Edit";
    }
});


/*
let back_btn = document.querySelector('.back_btn');
back_btn.addEventListener('click',function(e){
    window.history.back();
});*/



let inputan = document.querySelector('.inputan');
if(edit_experience!=null){
    edit_experience.addEventListener('click',function(e){
        experience_judul[0].classList.toggle('editable');
        experience_judul[0].contentEditable = !experience_judul[0].isContentEditable;

        experience_judul[1].classList.toggle('editable');
        experience_judul[1].contentEditable = !experience_judul[1].isContentEditable;

        experience_content_p.classList.toggle('editable');
        experience_content_p.contentEditable = !experience_content_p.isContentEditable;

        experience_ul.classList.toggle('editable');
        experience_ul.contentEditable = !experience_ul.isContentEditable;

        if(experience_judul[0].classList.contains('editable')){
            edit_experience_h2.innerHTML="Save Edit";
        }
        else{
            edit_experience_h2.innerHTML="Edit";
        }
    });
}
