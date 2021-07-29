let link = document.getElementById("baby-items");

link.addEventListener("mouseover", function(){

    let div = document.getElementById("div");

    div.classList.remove("display-none");


});


link.addEventListener("mouseover", function(){
    let div = document.getElementById("div");

    div.classList.add("items-hover");

});

link.addEventListener("mouseleave", function(){
    let div = document.getElementById("div");

    div.classList.add("display-none");

});