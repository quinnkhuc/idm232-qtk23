let hamburgerIcon = document.getElementById("hamburger-icon");
let navigation = document.getElementById("navigation");

hamburgerIcon.addEventListener("click", function(){
    if(navigation.style.height == "100%"){
        navigation.style.height = "0px";
    } else {
        navigation.style.height = "100%";
    }
});
