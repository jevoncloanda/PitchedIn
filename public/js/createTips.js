let pitch_menu = document.querySelector('.sub-header-pitch');
let tips_menu = document.querySelector('.sub-header-tips');
let tips_page = document.querySelector('.tips-page');

let tags_input = document.querySelector('.input-tag');
let tags_copy = document.querySelector('.tags');

let attachment_tips = document.querySelector('.attachment-tips');
let post_picture= document.querySelector('.tips-preview-content-image');


tags_input.addEventListener('input',function(e){
    //alert("ASSDASDSA");
    let string = tags_input.value;
    if(string.charAt(0) != '@') {
        string = '@' + string;
    }
    string = string.replace(/ /g,' @');
    string = string.replace(/\n/g,'\n@');
    //string = string.replace(/.@/g,'@');
    tags_copy.innerText = string;
});


//let bottom_caps_input = document.querySelector('.input-caption');
let bottom_caps_copy = document.querySelector('.preview-bottom-caption');
$(document).ready(function(){
  let emojioneArea = $('#txt-caption').emojioneArea({
      rows:50,
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
                  bottom_caps_copy.innerHTML += '<br>';
                  event.preventDefault();
              } else {
                  bottom_caps_copy.innerHTML = texts;
              }
          },
          emojibtn_click: function (button, event) {
              let texts = emojioneArea[0].emojioneArea.getText();
              texts = texts.replace(/\n/g,"<br>");
              bottom_caps_copy.innerHTML = texts;

          },
      },
  });
});


let heart = document.getElementById('heart-btn');
heart.addEventListener('click',function(){
    if (heart.src.endsWith("noLike.png")) {
        heart.src = "../asset/heart-like.png";
    } else {
        heart.src = "../asset/heart-noLike.png";
    }
});


let image_prev = document.querySelector('.tips-preview-content-image-pict-frame');
let input_img = document.getElementById('picture-general');
input_img.addEventListener('change',function(){
	let file = input_img.files[0];
    if(file){
        let reader = new FileReader();
		reader.readAsDataURL(file);
		reader.addEventListener('load', function() {
            let elemen = document.createElement('div');
            elemen.classList.add("slider-image-frame");
            let pict = document.createElement('img');
            pict.src=reader.result;
            elemen.appendChild(pict);
            image_prev.appendChild(elemen);
		});
		reader.readAsDataURL(file);
    }
});


let sub_frame = document.querySelector('.tips-preview-content-image-pict-frame');
let prev = document.querySelector('.prev');
let next = document.querySelector('.next');
let index = 0; // variabel untuk menyimpan index gambar
next.addEventListener('click',function(){
  if (index < sub_frame.children.length - 1) { // cek apakah index masih kurang dari jumlah gambar dikurangi satu
    index++; // jika iya, index ditambah satu
    sub_frame.style.transform = 'translateX(' + (-index * 100) + '%)'; // posisi gambar digeser sejauh satu gambar ke kanan
  }
});
prev.addEventListener('click',function(){
  if (index > 0) { // cek apakah index masih lebih besar dari 0
    index--; // jika iya, index dikurangi satu
    sub_frame.style.transform = 'translateX(' + (-index * 100) + '%)'; // posisi gambar digeser sejauh satu gambar ke kiri
  }
});

/*
let currentSlide = 0;
const slides = document.querySelectorAll('.tips-preview-content-image img');
const numSlides = slides.length;
const sliderFrame = document.querySelector('.tips-preview-content-image-pict-frame');
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');
next.addEventListener('click', function(e) {
  e.preventDefault();
  currentSlide++;
  if (currentSlide >= numSlides) {
    currentSlide = 0;
  }
  sliderFrame.style.transform = 'translateX(${currentSlide * width_frame}px)';
});

prev.addEventListener('click', function(e) {
  e.preventDefault();
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = numSlides - 1;
  }
  sliderFrame.style.transform = 'translateX(-${currentSlide * width_frame}px)';
});
*/

/*
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');
let slider_frame = document.querySelector('.tips-preview-content-image-pict');
next.addEventListener('click',function(e){
    e.preventDefault();
    slider_frame.style.transform='translateX(200%)';
});
prev.addEventListener('click',function(e){
    e.preventDefault();
    slider_frame.style.transform='translateX(-200%)';
});
*/

/*
attachment_tips.addEventListener('change',function(e){
    let reader = new FileReader();
    reader.readAsDataURL(attachment_tips.files[0]);
    reader.addEventListener('load',function(e){
        post_picture.innerHTML = "<img src=${reader.result} alt=''/>";
    });
});
*/
/*
let imageInput = document.getElementById('.attachment-tips');
let imagePreview = document.getElementById('.tips-preview-content-image');

imageInput.addEventListener('change', function() {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();
    reader.addEventListener('load', function() {
      const image = new Image();
      image.src = reader.result;
      imagePreview.innerHTML = '';
      imagePreview.appendChild(image);
    });
    reader.readAsDataURL(file);
  }
});*/
