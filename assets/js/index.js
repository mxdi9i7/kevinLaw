// Get the modal
var modal = document.getElementById('myModal');


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var detailNode = document.getElementById('detail');
var titleNode = document.getElementById('title');

function triggerModal(e) {
    var details = e.children[2].innerHTML
    var title = e.children[0].innerHTML
    detailNode.innerHTML = details
    titleNode.innerHTML = title

    modal.style.display = "block";
}
function closeModal() {
    modal.style.display = "none"
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}