let view = document.getElementById("view");
let viewLess = document.getElementById("table_less");
let viewMore = document.getElementById("table_more");

view.onclick =  function() {
    viewFunction()
};

function viewFunction(){
    if(viewLess.classList.contains("d-none")){
        viewLess.classList.remove("d-none");
        viewMore.classList.add("d-none");
        view.textContent = "View less"
    }
    else{
        viewLess.classList.add("d-none");
        viewMore.classList.remove("d-none");
        view.textContent = "View more"
    }
}