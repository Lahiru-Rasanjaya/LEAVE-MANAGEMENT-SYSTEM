const wrapper = document.querySelector('.wrapper');
const LoginLink = document.querySelector('.Login-Link');
const registerlink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.close');


registerlink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

LoginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});