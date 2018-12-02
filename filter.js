/*
 * JS specific for filter/sort by buttons from shop.php
 */

filterSelection("all")  //starts function and shows all items
function filterSelection(c) {
    var filters, sortthem;
    var i;
    sortthem = document.getElementById("shop-grid-item-main");
    filters = sortthem.getElementsByClassName("actualItem");
    if (c == "all") c = "";
    //.show gets added to filtered elements and removes the .show class from elements that
    // aren't selected.
    for (i=0; i<filters.length; i++){
        removeClass(filters[i], "show");
        if (filters[i].className.indexOf(c) > -1) addClass(filters[i], "show");
    }
}

//function for showing filtered elements as called in function filterSelection
function addClass(element, name) {
    var i;
    var a1;
    var a2;
    a1 = element.className.split(" ");
    a2 = name.split(" ");
    for (i=0; i<a2.length; i++) {
        if(a1.indexOf(a2[i]) == -1){
            element.className += " " + a2[i];
        }
    }
}
//hide elements not selected
function removeClass(element, name) {
    var i;
    var a1;
    var a2;
    a1 = element.className.split(" ");
    a2 = name.split(" ");
    for (i=0; i<a2.length; i++) {
        while (a1.indexOf(a2[i]) > -1) {
            a1.splice(a1.indexOf(a2[i]), 1);
        }
    }
    element.className = a1.join(" ");
}

//adds active class to current filter
var fltrContainer = document.getElementById("shop-grid-item-filter");
var buttons = fltrContainer.getElementsByClassName("sortbtn");
for (var i=0; i<buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        var status = document.getElementsByClassName("active");
        status[0].className = status[0].className.replace(" active", "");
        this.className += " active";
    });
}
