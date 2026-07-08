console.log("hello word");

let btns=document.querySelectorAll("#commente")
for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click",()=>{
        console.log("press in the button");
    })
}
