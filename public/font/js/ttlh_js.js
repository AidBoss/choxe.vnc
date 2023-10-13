let eventHide = function () {
  const Ctshow = document.querySelector("#ct_login_show");
  const CtHide = document.querySelector("#ct_login_hide");
  const check = true;

  if (check) {
    CtHide.style.display = "block";
    Ctshow.style.display = "none";
    check = false;
  } else {
    check = true;
  }
};
const itemQltd = document.querySelector("#select_qltd");
const itemQldh = document.querySelector("#select_qldh");
const itemTdl = document.querySelector("#select_tdl");
const itemDksl = document.querySelector("#select_dksl");
const listSu = document.querySelectorAll(".list-group-item");

let selectItemUsers = function () {
  const check = true;
  itemQltd.style.display = "none";
  itemQldh.style.display = "block";
  itemTdl.style.display = "none";
  itemDksl.style.display = "none";
  listSu.id = "users_ttnd";
};
let selectItemUsers2 = function () {
  itemQltd.style.display = "block";
  listSu.id = "users_ttnd";
};
let selectItemUsers3 = function () {
  itemQltd.style.display = "none";
  itemQldh.style.display = "none";
  itemTdl.style.display = "block";
  itemDksl.style.display = "none";
  listSu.id = "users_ttnd";
};
let selectItemUsers4 = function () {
  itemQltd.style.display = "none";
  itemQldh.style.display = "none";
  itemTdl.style.display = "none";
  itemDksl.style.display = "block";
  listSu.id = "users_ttnd";
};
