//JS scripts are the interactions 
var name = "Cameron Fox";
console.log(name);

// Set the title of the page
document.title = name;

window.onload = function() {
    // Set the name in the center of the page
    document.getElementById('title_box').innerText = name;
};