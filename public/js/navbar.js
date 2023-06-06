let dropDown_circle = document.getElementById('dropDown-circle');
let dropDown_img = document.getElementById('dropDown-img');
let showDrop = document.querySelector('.dropDown-konten-group');

dropDown_circle.addEventListener('click',function(e){
    e.preventDefault();
    if(showDrop.style.opacity==0){
        showDrop.style.opacity=1;
        showDrop.style.pointerEvents='auto';
        dropDown_img.style.transform = 'rotate(180deg)';
        dropDown_img.style.transition = '1s';
    }
    else{
        showDrop.style.opacity=0;
        showDrop.style.pointerEvents='none';
        dropDown_img.style.transform = 'rotate(0deg)';
        dropDown_img.style.transition = '1s';
    }
});

let pp = document.querySelector('.pp-circle');
pp.addEventListener('click',function(e){
    e.preventDefault();
    if(window.innerWidth<=768){
        if(showDrop.style.opacity==0){
            showDrop.style.opacity=1;
            showDrop.style.pointerEvents='auto';
        }
        else{
            showDrop.style.opacity=0;
            showDrop.style.pointerEvents='none';
        }
    }
});

window.addEventListener('resize',function(e){
    e.preventDefault();
    if(window.innerWidth>768){
        if(showDrop.style.opacity==0){
            dropDown_img.style.transform = 'rotate(0deg)';
            showDrop.style.pointerEvents='none';
            dropDown_img.style.transition = '0.1s';

        }
        else{
            dropDown_img.style.transform = 'rotate(180deg)';
            showDrop.style.pointerEvents='auto';
            dropDown_img.style.transition = '0.1s';

        }
        responsive_content.style.opacity=0;
        responsive_content.style.pointerEvents="none";
    }
});

let menu_responsive = document.querySelector('.menu_responsive');
let responsive_content = document.querySelector('.responsive_menu');
let back = document.querySelector('.menu_back_symbol');
menu_responsive.addEventListener('click',function(e){
    responsive_content.style.pointerEvents="auto";
    responsive_content.style.opacity=1;
});
back.addEventListener('click',function(e){
    responsive_content.style.pointerEvents="none";
    responsive_content.style.opacity=0;
});
