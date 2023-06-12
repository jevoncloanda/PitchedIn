let heart = document.querySelectorAll('.heart');
for(let i=0;i<heart.length;i++){
    heart[i].addEventListener('click',function(e){
        if(heart[i].getAttribute("src")==="../Asset/heart-noLike.png"){
            heart[i].setAttribute("src","../Asset/heart-Like.png");
        }
        else{
            heart[i].setAttribute("src","../Asset/heart-noLike.png");
        }
    });
}

let input_forum = document.querySelector('.input_forum');
let numberOfChar = document.querySelector('.numberOfChar');
let input_forum_length = input_forum.value.length;
if(input_forum_length>200){
    input_forum.value = input_forum.value.substring(0,200);
}
else{
    numberOfChar.innerHTML = input_forum_length.toString() + "/200";
}
input_forum.addEventListener('input',function(e){
    input_forum_length = input_forum.value.length;
    if(input_forum_length>200){
        input_forum.value = input_forum.value.substring(0,200);
    }
    else{
        numberOfChar.innerHTML = input_forum_length.toString() + "/200";
    }
});

let forum_page = document.querySelector('.forum_page');
forum_page.style.height=(window.innerHeight-70)+'px';



let circle_add = document.querySelector('.circle_add');
let responsive_modal = document.querySelector('.forum_page_left_down');
let close_responsive_modal = document.querySelector('.close_forum_page_left');
let scroll_area = document.querySelector('.forum_page_right');
circle_add.addEventListener('click',function(e){
    responsive_modal.style.pointerEvents="auto";
    responsive_modal.style.opacity=1;
    //scroll_area.style.overflow="hidden";
});
close_responsive_modal.addEventListener('click',function(e){
    responsive_modal.style.pointerEvents="none";
    responsive_modal.style.opacity=0;
    //scroll_area.style.overflow="visible";

});


window.addEventListener('resize',function(e){
    e.preventDefault();
    if(window.innerWidth>700){
        responsive_modal.style.pointerEvents="auto";
        responsive_modal.style.opacity=1;
    }
    else{
        responsive_modal.style.pointerEvents="none";
        responsive_modal.style.opacity=0;
    }
})
