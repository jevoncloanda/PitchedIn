let fullname_copy = document.querySelector('.head-pitch-preview-content-judul-h2-1');
let bisnisName_copy = document.querySelector('.head-pitch-preview-content-judul-h2-2');
let fullname_input = document.querySelector('.input-fullname');
let bisnisName_input = document.querySelector('.input-businessproduct');

let firstCateg_input = document.querySelector('.first-category');
let secCateg_input = document.querySelector('.second-category');
let firstCateg_copy = document.querySelector('.first-category-container');
let secCateg_copy = document.querySelector('.second-category-container');

let generalDesc_input = document.querySelector('.input-generaldesc');
let generalDesc_copy = document.querySelector('.opening-content');

let offer_input = document.querySelector('.input-offerdetails');
let offer_copy = document.querySelector('.caption-content');

let attachment = document.getElementById('attachment');


fullname_input.addEventListener('input',function(e){
    fullname_copy.innerText = fullname_input.value;
});
bisnisName_input.addEventListener('input',function(e){
    bisnisName_copy.innerText= bisnisName_input.value;
});
firstCateg_input.addEventListener('input',function(e){
    firstCateg_copy.innerText = firstCateg_input.value;
});
secCateg_input.addEventListener('input',function(e){
    secCateg_copy.innerText = secCateg_input.value;
});
offer_input.addEventListener('input',function(e){
    offer_copy.innerText = offer_input.value;
});


$(document).ready(function(){
    let emojioneArea = $('#txt-offerdetails').emojioneArea({
        pickerPosition: 'bottom',
        search: false,
        filters: {
            shortnames: false,
            emoticons: false,
            custom: []
        },
        events: {
            keyup: function (editor, event) {
                let texts = emojioneArea[0].emojioneArea.getText();
                texts = texts.replace(/\n/g,"<br>");
                if (event.key === 'Enter') {
                    offer_copy.innerHTML += '<br>';
                    event.preventDefault();
                } else {
                    offer_copy.innerHTML = texts;
                }
            },
            emojibtn_click: function (button, event) {
                let texts = emojioneArea[0].emojioneArea.getText();
                texts = texts.replace(/\n/g,"<br>");
                offer_copy.innerHTML = texts;

            },
        },
    });
});


let imageUpload = document.getElementById('picture-general');
let close_banner = document.querySelector('.banner img');
let banner_div = document.querySelector('.banner-div');
imageUpload.addEventListener('change',function(){
	let file = this.files[0];
    if(file){
        let reader = new FileReader();
		reader.readAsDataURL(file);
		reader.addEventListener('load', function() {
            let elemen = document.createElement('div');
            elemen.classList.add('banner');
            elemen.style.backgroundImage= "url('" + reader.result + "')";

            let pict = document.createElement('img');
            pict.src="../asset/close_banner.png";
            pict.classList.add('close_banner');

            elemen.appendChild(pict);
            banner_div.appendChild(elemen);
		});
    }
});



let pitch_preview = document.querySelector('.pitch-preview-content');
let close_link = document.querySelector('.link-box-close');
attachment.addEventListener('change',function(){
    let elemen = document.createElement('div');
    elemen.classList.add('link-box');
    let input = document.getElementById("attachment");
    let file = input.files[0];

    if(input.files[1]!=null){
        file = input.files[1];
        console.log(file);
    }

    let url = URL.createObjectURL(file);
    let link = document.createElement("a");
    link.setAttribute("href", url);
    link.setAttribute("download", file.name);
    link.innerHTML = file.name;
    elemen.appendChild(link);
    let pict = document.createElement('img');
    pict.classList.add('link-box-close');
    pict.src="../asset/close.png";
    elemen.appendChild(pict);
    pitch_preview.appendChild(elemen);
});


pitch_preview.addEventListener('click', function(e) {
    let obj = e.target;
    if (obj.classList.contains('link-box-close')||obj.classList.contains('close_banner')) {
      obj.parentElement.remove();
    }
});


let create_post = document.querySelector('.button-create-post-btn');
let error = document.getElementById('errorMessage');
create_post.addEventListener('click',function(e){
    if(fullname_input.value.trim()==""){
        e.preventDefault();
        error.innerText="Full Name is Required";
    }
    else if(bisnisName_input.value.trim()==""){
        e.preventDefault();
        error.innerText="Business Name is Required";
    }
    else if(firstCateg_input.value.trim()==""){
        e.preventDefault();
        error.innerText="Business Type 1 is Required";
    }
    else if(secCateg_input.value.trim()==""){
        e.preventDefault();
        error.innerText="Business Type 2 is Required";
    }
    else if(offer_input.value.trim()==""){
        e.preventDefault();
        error.innerText="Caption is Required";
    }
    else{
        error.innerText="";
    }
});
