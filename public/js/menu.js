const menuList = document.querySelector("#menuList");
const checkbox = document.querySelector("#checkbox");

checkbox.addEventListener("change", function () {
    if (checkbox.checked) {
        menuList.classList.remove('inactive');
    } else {
        menuList.classList.add('inactive');
    }
});
