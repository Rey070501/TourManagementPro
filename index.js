const Signupbutton = document.getElementById('signUpbutton');
const Signinbutton = document.getElementById('signInbutton');
const SignInForm  = document.getElementById('signin');
const SignUpForm = document.getElementById('signup');
Signupbutton.addEventListener('click',function(){
    SignInForm.style.display="none";
    SignUpForm.style.display="block";
});
Signinbutton.addEventListener('click',function(){
    SignInForm.style.display="block";
    SignUpForm.style.display="none";
});
