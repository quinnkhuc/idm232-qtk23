let hamburgerIcon = document.getElementById("hamburger-icon");
let navigation = document.getElementById("navigation");

hamburgerIcon.addEventListener("click", function(){
    if(navigation.style.display == "block"){
        navigation.style.display = "none";
    } else {
        navigation.style.display = "block";
    }
});

