    var buttons = document.getElementsByClassName("btn btn-primary");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function() {
            if (this.classList.contains("not_working")) {
                alert("This button is not working. Please try again later.");
            }
        });
    }
    
