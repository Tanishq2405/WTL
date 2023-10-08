const btn=document.getElementById("btn");
const btn2=document.getElementById("btn2");
const para=document.getElementById("para");
const text=document.querySelector(".styleinput")
const text2=document.querySelector(".styleinput2")
const box=document.querySelector(".shadow-box")
const btnPost=document.querySelector("#btn-post")
const ul = document.getElementById("list");

btn.addEventListener("click",(e)=>{
    const value=text.value
    para.innerHTML=value
    text.value=""
})

btn2.addEventListener("click",(e)=>{
    const r=Math.floor(Math.random() * 256);
    const g=Math.floor(Math.random() * 256);
    const b=Math.floor(Math.random() * 256);
    box.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
})

btnPost.addEventListener('click',(e)=>{
    const li = document.createElement('li');
    const del = document.createElement('button');
    li.classList.add("shadow-box2");
    li.classList.add("item-list");
    del.classList.add("btn-success");
    del.classList.add("btn-delete");
    del.addEventListener("click",()=>{
        li.parentNode.removeChild(li);
    });
    del.appendChild(document.createTextNode("Delete"));
    li.appendChild(document.createTextNode(text2.value));
    li.appendChild(del);
    ul.appendChild(li);
    text2.value = '';
})
