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

let sub_frame = document.querySelectorAll('.tips-preview-content-image-pict-frame');
let prev = document.querySelectorAll('.prev');
let next = document.querySelectorAll('.next');
let heart = document.querySelectorAll('.heart-btn');
let index = [];
for (let i = 0; i < sub_frame.length; i++) {
    index.push(0);
    next[i].addEventListener('click', function () {
        if (index[i] < sub_frame[i].children.length - 1) { // cek apakah index masih kurang dari jumlah gambar dikurangi satu
            index[i]++; // jika iya, index ditambah satu
            sub_frame[i].style.transform = 'translateX(' + (-index[i] * 100) + '%)'; // posisi gambar digeser sejauh satu gambar ke kanan
        }
    });
    prev[i].addEventListener('click', function () {
        if (index[i] > 0) { // cek apakah index masih lebih besar dari 0
        index[i]--; // jika iya, index dikurangi satu
        sub_frame[i].style.transform = 'translateX(' + (-index[i] * 100) + '%)'; // posisi gambar digeser sejauh satu gambar ke kiri
        }
    });
    heart[i].addEventListener('click',function(e){
        if(heart[i].getAttribute("src")==="../Asset/heart-noLike.png"){
            heart[i].setAttribute("src","../Asset/heart-Like.png");
        }
        else{
            heart[i].setAttribute("src","../Asset/heart-noLike.png");
        }
    });
}



/*
let sub_frame = document.querySelectorAll('.tips-preview-content-image-pict-frame');
let prev = document.querySelectorAll('.prev');
let next = document.querySelectorAll('.next');
let index = [];
for(let i=0;i<sub_frame.length;i++){
    index.push(0);
}
for(let i=0;i<sub_frame.length;i++){
    next[i].addEventListener('click',function(){
        if (index.indexOf(i) < sub_frame[i].children.length - 1) {
            index.indexOf(i)++;
            sub_frame[i].style.transform = 'translateX(' + (-index.indexOf(i) * 100) + '%)';
        }
    });
    prev[i].addEventListener('click',function(){
        if (index.indexOf(i) > 0) {
            index.indexOf(i)--;
            sub_frame[i].style.transform = 'translateX(' + (-index.indexOf(i) * 100) + '%)';
        }
    });
}*/

/*
let index = 0;
next.addEventListener('click',function(){
    if (index < sub_frame.children.length - 1) {
        index++;
        sub_frame.style.transform = 'translateX(' + (-index * 100) + '%)';
    }
});
prev.addEventListener('click',function(){
    if (index > 0) {
        index--;
        sub_frame.style.transform = 'translateX(' + (-index * 100) + '%)';
    }
});*/
