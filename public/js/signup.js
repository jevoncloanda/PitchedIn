//Javascript Content Box
let btn_signup = document.getElementById('login-btn');
let content_box = document.querySelector('.content-box');
let login_box = document.querySelector('.login-box');
let detail_signup = document.querySelector('.detail-signup-form');
let checkbox = document.getElementById('checkBox-input');
let errorMessage = document.querySelector('.ErrorMessage');
let email = document.getElementById('email');
let username = document.getElementById('username');
let password = document.getElementById('password');

function validateEmail(email) {
    const re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validation(){
    if(!validateEmail(email.value.trim())){
        errorMessage.style.display="flex";
        errorMessage.innerText="Please enter a valid email";
        return false;
    }
    else if(username.value.trim()==""){
        errorMessage.style.display="flex";
        errorMessage.innerText="Username Required";
        return false;
    }
    else if(password.value.trim()=="" || password.value.trim().length < 8){
        errorMessage.style.display="flex";
        errorMessage.innerText="Password must be at least 8 characters";
        return false;
    }
    else if(!checkbox.checked){
        errorMessage.style.display="flex";
        errorMessage.innerText="You must agree to follow PitchedIn's Terms of Service and Privacy Policy";
        return false;
    }
    else{
        return true;
    }

}
btn_signup.addEventListener('click',function(e){
    e.preventDefault();
    if(validation()){
        errorMessage.innerText="";
        content_box.style.display="none";
        content_box.style.pointerEvents="none";
        detail_signup.style.display="flex";
        detail_signup.style.pointerEvents="auto";
    }
});


//Javascript detail-signup-form
let role_btn = document.getElementById('role-signup');
let role_btn_img = document.querySelector('.role-signup img');
let role_dropdown_check=0;
let pitcher = document.querySelector('.pitcher-role');
let investor = document.querySelector('.investor-role');
function close_drop(){
    pitcher.style.transition="0s";
    investor.style.transition="0s";
    pitcher.style.visibility="hidden";
    investor.style.visibility="hidden";
    role_btn_img.style.transform= 'rotate(0deg)';
    role_btn_img.style.transition='0.5s';
    pitcher.style.pointerEvents='none';
    investor.style.pointerEvents='none';
}
role_btn.addEventListener('click',function(e){
    e.preventDefault();
    role_dropdown_check=role_dropdown_check+1;
    if(role_dropdown_check%2==1){
        pitcher.style.visibility="visible";
        investor.style.visibility="visible";

        role_btn_img.style.transform= 'rotate(180deg)';
        role_btn_img.style.transition='0.5s';
        pitcher.style.pointerEvents='auto';
        investor.style.pointerEvents='auto';
    }
    else{
        close_drop();
    }
});


let role_name = document.getElementById('role-p');
let role_input = document.getElementById('role-input');
pitcher.addEventListener('click',function(e){
    close_drop();
    role_name.innerText="Pitcher";
    role_input.value ="Pitcher"
    role_dropdown_check=role_dropdown_check+1;

});
investor.addEventListener('click',function(e){
    close_drop();
    role_name.innerText="Investor";
    role_input.value ="Investor"
    role_dropdown_check=role_dropdown_check+1;

});


let fullname = document.getElementById('fullname');
let country = document.getElementById('country');
let state = document.getElementById('state');
let role = document.getElementById('role-p');
let errorMessage2 = document.getElementById('errorMessage2');
let btn_detail = document.querySelector('.btn-detail-signup');
function validation2(){
    if(fullname.value.trim()==""){
        // errorMessage2.style.visibility="visible";
        errorMessage2.innerText="Full Name is Required";
        return false;
    }
    // else if(country.value.trim()==""){
    //     // errorMessage2.style.visibility="visible";
    //     errorMessage2.innerText="Country is Required";
    //     return false;
    // }
    // else if(state.value.trim()==""){
    //     // errorMessage2.style.visibility="visible";
    //     errorMessage2.innerText="State is Required";
    //     return false;
    // }
    else if(role.innerHTML.trim()==""){
        // errorMessage2.style.visibility="visible";
        errorMessage2.innerText="Role is Required";
        return false;
    }
    else{
        errorMessage2.innerText="";
        return true;
    }
}

let register_form = document.getElementById('register-form')
btn_detail.addEventListener('click',function(e){
    if(!validation2()){
        e.preventDefault();
    }

    if(role_dropdown_check%2==1){
        role_dropdown_check+=1;
        close_drop();
    }
});
