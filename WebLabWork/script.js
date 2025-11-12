 let element =document.getElementById("el");
function updateTime(){
    let t= new Date().toLocaleTimeString();
    element.innerText=t;
}
updateTime();
setInterval(updateTime ,1000);

let size=50;
let grow=true;
function growShrink(){
     if(grow){
        size+=10;
        element.style.fontSize=size + "px";
        if(size>200){grow=false;}
     }else{size-=10;
        element.style.fontSize=size + "px";
        if(size<50){grow=true;}
     }
}

setInterval(growShrink ,100);