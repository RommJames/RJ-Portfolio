//a tag
let alinks = document.getElementsByTagName("a");

// getheader
let header = document.getElementsByTagName("header")[0];

// logo
let _body = document.body;
let logo = document.getElementById("nav-logo");

let current_bg = "white"

function changeBG(){
// To change background color
    if(current_bg == "white"){
        _body.style.background = "#e8b312";
        current_bg = "#e8b312";
        logo.setAttribute("src", "media/rj-logo-dark-bg.png");
        _body.style.color = "#2d305c";      
        header.style.background = "#e8b312"
        for(let alink of alinks){
            alink.style.color = "white";
        }

    }else{
        _body.style.background = "white";
        current_bg = "white";
        logo.setAttribute("src", "media/rj-logo-3-nobg.png");
        _body.style.color = "black";
         header.style.background = "white"
        for(let alink of alinks){
            alink.style.color = "black";
        }
    }


}




window.addEventListener('scroll', function(){
    // alert("hi")
    header.setAttribute("class", "header-scroll");
    // header.style.background = "red"
   

    setTimeout(() => {
        header.removeAttribute("class");
    }, 1650);
})