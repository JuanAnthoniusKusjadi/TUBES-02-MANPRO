let view = document.getElementById("view");
let viewLess = document.getElementById("table_less");
let viewMore = document.getElementById("table_more");

if(view != null){
    view.onclick =  function() {
        viewFunction()
    };
}

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

let cells = Array.prototype.slice.call(document.querySelectorAll(".row_data"));

cells.forEach(function(cell){
    // Convert cell data to a number, call .toLocaleString()
    // on that number and put result back into the cell
    cell.textContent = (+cell.textContent).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  });

function seperator(number, id){
    document.getElementById(id).textContent = number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}