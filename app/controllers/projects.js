
let current = 0;
const lst = document.getElementsByClassName("pages");
lst[current].classList.replace("off", "active");
function change(direction) {

    lst[current].classList.replace("active", "off");
    
    if (direction === "Next") {
        current += 1;
    }
    else if (direction == "Back") {
        current -= 1;
    }


    if (current >= lst.length) {
        current = 0;
    }
    else if (current < 0) {
        current = lst.length - 1;

    }

    console.log(current);
    lst[current].classList.replace("off", "active");
}