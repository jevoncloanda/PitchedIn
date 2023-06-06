/*Javascript
LandingPage View 1 */
let future = document.querySelector('.future');
let toggle_future = 0;
setInterval(function(e){
    if(toggle_future%2==0){
        future.innertText="Success?";
    }
    else{
        future.innerText="Future?";
    }
    toggle_future = toggle_future + 1;
},100);


/*Javascript
untuk
LandingPage View 3 */
let lp3_left = document.querySelector('.left_btn_lp3 img');
let lp3_right = document.querySelector('.right_btn_lp3 img');
let lp3_slider = document.querySelector('.landing_page3_slider');
let lp3_dots = document.querySelectorAll('.lp3_dots');
let index = 0;

let interval_lp3;
function makeInterval_lp3(){
    interval_lp3= setInterval(function(){
        lp3_dots[index].style.backgroundColor="#D9D9D9";
        index++;
        if(index==4)index=0;
        lp3_dots[index].style.backgroundColor="#203D3B";
        lp3_slider.style.transform ='translateX('+(-index*100)+'%)';
    },3000);
}

makeInterval_lp3();

lp3_left.addEventListener('click',function(e){
    if(index>0){
        clearInterval(interval_lp3);
        lp3_dots[index].style.backgroundColor="#D9D9D9";
        index--;
        lp3_dots[index].style.backgroundColor="#203D3B";
        lp3_slider.style.transform = 'translateX('+(-index*100)+'%)';
        makeInterval_lp3();
    }
    else{
        clearInterval(interval_lp3);
        lp3_dots[index].style.backgroundColor="#D9D9D9";
        index=3;
        lp3_dots[index].style.backgroundColor="#203D3B";
        lp3_slider.style.transform = 'translateX('+(-index*100)+'%)';
        makeInterval_lp3();

    }
});
lp3_right.addEventListener('click',function(e){
    if(index<3){
        clearInterval(interval_lp3);
        lp3_dots[index].style.backgroundColor="#D9D9D9";
        index++;
        lp3_dots[index].style.backgroundColor="#203D3B";
        lp3_slider.style.transform = 'translateX('+(-index*100)+'%)';
        makeInterval_lp3();
    }
    else{
        clearInterval(interval_lp3);
        lp3_dots[index].style.backgroundColor="#D9D9D9";
        index=0;
        lp3_dots[index].style.backgroundColor="#203D3B";
        lp3_slider.style.transform = 'translateX('+(-index*100)+'%)';
        makeInterval_lp3();
    }
});


for(let i=0;i<4;i++){
    lp3_dots[i].addEventListener('click',function(e){
        clearInterval(interval_lp3);
        lp3_dots[index].style.backgroundColor="#D9D9D9";
        index=i;
        lp3_dots[index].style.backgroundColor="#203D3B";
        lp3_slider.style.transform = 'translateX('+(-index*100)+'%)';
        makeInterval_lp3();
    });
}

/*
Javascript
untuk
Landing Page View 4*/

let slider_lp4 = document.querySelector('.lp4_investor_stories_slider');
let dots_lp4 = document.querySelectorAll('.lp4_dots');
let interval_lp4;
let index_lp4 = 0;

function makeInterval(){
    interval_lp4= setInterval(function(){
        dots_lp4[index_lp4].style.backgroundColor="#D9D9D9";
        index_lp4++;
        if(index_lp4==4)index_lp4=0;
        dots_lp4[index_lp4].style.backgroundColor="#203D3B";
        slider_lp4.style.transform ='translateX('+(-index_lp4*100)+'%)';
    },4000);
}

makeInterval();

for(let i=0;i<4;i++){
    dots_lp4[i].addEventListener('click',function(e){
        dots_lp4[index_lp4].style.backgroundColor="#D9D9D9";
        index_lp4=i;
        dots_lp4[index_lp4].style.backgroundColor="#203D3B";
        slider_lp4.style.transform ='translateX('+(-index_lp4*100)+'%)';
        clearInterval(interval_lp4);
        makeInterval();
    });
}
