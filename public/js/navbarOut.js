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

window.addEventListener('resize',function(e){
    e.preventDefault();
    if(window.innerWidth>768){
        responsive_content.style.opacity=0;
        responsive_content.style.pointerEvents="none";
    }
});
