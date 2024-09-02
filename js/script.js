let certContainer = document.getElementById("cert-container")

//get certificates from my-certs.js and retrieve all data
certificates.forEach(c => {
    certContainer.innerHTML += 
    `
        <li>
            <a href="media/certificates/${c.img}" target="_blank">
                <img src="media/certificates/${c.img}" alt="${c.alt}">
                <div class="cert-detail">
                    <h2>${c.title}</h2>
                    <p>${c.description}</p>
                </div>
            </a>
        </li>
    `
});

// Scroll Animation effect
console.log("scrollY: ",window.scrollY)
console.log("innerHeight", window.innerHeight)
window.addEventListener("scroll", function(){
    header.style.top = "-60px";
    scrollNav()

    console.log("scrollY: ",window.scrollY)
    console.log("innerHeight: ", window.innerHeight)
    console.log("cert offset height: ", certContainer.offsetHeight)
    console.log("cert offset top", certContainer.offsetTop)
})

// for navigation scrolling effect
let header = document.getElementsByTagName("header")[0]
let cards = document.getElementsByClassName("cards")[0]
let title2 = document.getElementsByClassName("title-2")[0];
let blockquote = document.getElementsByTagName("blockquote")[0];
let contact = document.getElementById("contact");
let certHeader = document.getElementById("cert-title");
let certs = document.getElementById("cert-container");
let isScroll;
const timeout = 450;
scrollNav()
function scrollNav(){
    

    clearTimeout(isScroll)

    isScroll = setTimeout(function(){
        header.style.top = "0px";
    }, timeout)

    if(window.scrollY >= 105){
        title2.style.animation =  "fadeDown 1s ease-in-out 0.1s 1 both";
        cards.style.animation =  "fadeRight 1s ease-in-out 0.5s 1 both";
        
    }
    
    if(window.scrollY >= 970){
        blockquote.style.animation =  "fadeDown 1s ease-in-out 0.1s 1 both";        
    }

    if(window.scrollY >= 1220){
        contact.style.animation =  "fadeLeft 1s ease-in-out 0.1s 1 both";          
    }
  
    if(window.scrollY >= 1608){        
        certHeader.style.animation =  "fadeDown 1s ease-in-out 0.1s 1 both";     
        certs.style.animation = "fadeIn 0.8s ease-in-out 1s 1 both"          
    }
}
