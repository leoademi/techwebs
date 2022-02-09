var toggleBol = false;

let toggleNav = function(){
    var getToggleNav = document.querySelector(".toggle-navbar");
    var getToggleNavUl = document.querySelector(".toggle-navbar ul");
    var getToggleNavLinks = document.querySelectorAll(".toggle-navbar ul li a");

    if (toggleBol === false) {
        getToggleNavUl.style.visibility = "visible";
        getToggleNavUl.style.width = "272px";
        getToggleNavUl.style.height = "200px";
        
        
        var arrayLength = getToggleNavLinks.length;
        for (var i = 0; i < arrayLength; i++ ){
            getToggleNavLinks[i].style.opacity="1";
        }

        toggleBol = true;
    }
    else if (toggleBol === true) {
        getToggleNavUl.style.visibility = "hidden";
        getToggleNavUl.style.width = "0";
        getToggleNavUl.style.height = "0";
        
        
        var arrayLength = getToggleNavLinks.length;
        for (var i = 0; i < arrayLength; i++ ){
            getToggleNavLinks[i].style.opacity="0";
        }

        toggleBol = false;
    }
    
}