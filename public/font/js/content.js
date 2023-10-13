const show = document.querySelector("#bt_show");
const btshow = document.querySelector("#btu_show");
let check = true;
let eventclickshow = function () {
  if (check) {
    btshow.style.display = "block";
    show.style.display = "block";
    btshow.innerHTML = " Ẩn đi &uarr;";
    btshow.style.fontSize = "15px";
    check = false;
  } else {
    btshow.innerHTML = " Xem Thêm &darr;";
    show.style.display = "none";
    check = true;
  }
};

let sonam = document.querySelector(".sonam");
let namsx = document.querySelector("#namsx");
namsx.innerHTML = sonam.value;
sonam.oninput = function () {
  namsx.innerHTML = this.value;
};
let slider2 = document.getElementById("myRange2");
let output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;
slider2.oninput = function () {
  output2.innerHTML = this.value;
};
