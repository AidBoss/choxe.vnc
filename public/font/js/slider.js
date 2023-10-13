let list_img = document.querySelectorAll(".list-img img");
let img_mid = document.querySelector(".img_mid img");
// let prev = document.querySelector("#prev")
// let next = document.querySelector("#next")
console.log(list_img);
console.log(img_mid);
let index = 0;
list_img.forEach((event) => {
  event.addEventListener("click", (e) => {
    img_mid.src = e.target.getAttribute("src");
  });
});
next = () => {
  index++;
  if (index == list_img.length) index = 0;
  img_mid.src = list_img[index];
};
prev = () => {
  index--;
  if (index == list_img.length) index = 0;
  img_mid.src = list_img[index];
};
/// code js -phan dang ky dang
const register = document.querySelector(".register_modal");
const btchange = document.querySelector("#change_login");
const login = document.querySelector(".login_modal");
let check = true;
let eventclickshow = function () {
  if (check) {
    register.style.display = "block";
    btchange.style.display = "block";
    login.style.display = "none";
    btchange.innerHTML = "Đăng Nhập";
    check = false;
  } else {
    register.style.display = "none";
    login.style.display = "block";
    btchange.innerHTML = "Đăng Ký";
    check = true;
  }
};
