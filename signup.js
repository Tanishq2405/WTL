const name = document.getElementById("name");
const phn = document.getElementById("phn");
const email = document.getElementById("email");
const descphn = document.getElementById("desc");
const pwd = document.getElementById("pwd");
const pwd2 = document.getElementById("pwd2");
const form = document.getElementById("form");
const error = document.querySelectorAll(".red-error");
console.log(error);
form.addEventListener("submit",(e)=>{
    e.preventDefault();
    if(name.value==""){
        error[0].style.display= "block";
    }else{
        error[0].style.display= "none";   
    }
    if(phn.value=="" || phn.value.length!=10){
        error[1].style.display= "block";
    }else{
        error[1].style.display= "none";   
    }
    if(email.value==""){
        error[2].style.display= "block";
    }else{
        error[2].style.display= "none";   
    }
    if(pwd.value==""){
        error[3].style.display= "block";
    }else{
        error[3].style.display= "none";   
    }
    if(pwd2.value!=pwd.value){
        error[4].style.display= "block";
    }else{
        error[4].style.display= "none";   
    }
})