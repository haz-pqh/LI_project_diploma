function validate(val) {
    var v1 = document.getElementById("sub");
    var v2 = document.getElementById("msg");

    var flag = true;

    if (val >= 1 || val == 0) {
        if (v1.value == "") {
            v1.style.borderColor = "red";
            flag = false;
        } else {
            v1.style.borderColor = "green";
            flag = true;
        }
    }

    if (val >= 2 || val == 0) {
        if (v2.value == "") {
            v2.style.borderColor = "red";
            flag = false;
        } else {
            v2.style.borderColor = "green";
            flag = true;
        }
    }

    return flag;
}

document.addEventListener("DOMContentLoaded", function () {
    var current_fs, next_fs, previous_fs;

    // Handle "Next" buttons
    var nextButtons = document.querySelectorAll(".next");
    nextButtons.forEach(function (nextButton) {
        nextButton.addEventListener("click", function () {
                current_fs = this.closest(".card");
                next_fs = current_fs.nextElementSibling;

                if (next_fs && next_fs.classList.contains("card")) {
                    current_fs.classList.remove("show");
                    next_fs.classList.add("show");

                    current_fs.style.display = 'none';
                    next_fs.style.display = 'block';
                }
            });
    });

    // Handle "Back" buttons
    var prevButtons = document.querySelectorAll(".prev");
    prevButtons.forEach(function (prevButton) {
        prevButton.addEventListener("click", function () {
            current_fs = this.closest(".card");
            previous_fs = current_fs.previousElementSibling;

            if (previous_fs && previous_fs.classList.contains("card")) {
                current_fs.classList.remove("show");
                previous_fs.classList.add("show");

                current_fs.style.display = 'none';
                previous_fs.style.display = 'block';
            }
        });
    });
    
});

const alert_warning = document.getElementById('close');
const warning_message = document.getElementById('alert');

alert_warning.addEventListener('click', alert);

function alert(){
    warning_message.style.display = "none"; // This hides the alert (if it's being shown with a "show" class)
}

