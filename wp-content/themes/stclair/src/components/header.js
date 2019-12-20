(function ($, root, undefined) {

    $(function () {

        'use strict';
});

    $(document).ready(function(){
        $(".nav__hamburger-icon").click(function(){
        $(".nav__hamburger-icon").toggleClass("nav__open");
    });
    
    // Modal Pop Up when Reserve Now button clicked

    var btn = document.getElementsByClassName("click-to-open");

    for (var i = 0; i < btn.length; i++) {
    var thisBtn = btn[i];
    thisBtn.addEventListener("click", function(){

    // Open
        var modal = document.getElementById(this.dataset.modal);
        modal.style.display = "block";

    // Close 
        // Get the <span> element that closes the modal
        var spanOne = document.getElementsByClassName("close-one")[0];
        var spanTwo = document.getElementsByClassName("close-two")[0];
        var spanThree = document.getElementsByClassName("close-three")[0];

        // When the user clicks on <span> (x), close the modal
        spanOne.onclick = function() {
            modal.style.display = "none";
        }
        spanTwo.onclick = function() {
            modal.style.display = "none";
        }
        spanThree.onclick = function() {
            modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
        }

    }, false)};

});

})(jQuery, this);