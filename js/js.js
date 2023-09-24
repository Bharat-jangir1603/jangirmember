let click_btn = document.querySelector('.data_m');
let xmark = document.querySelector('.cut');
click_btn.addEventListener('click', () => {
    document.querySelector('.Nav_page').classList.add('dis_blo');
    document.querySelector('.cut').classList.add('data_m');

});
xmark.addEventListener('click', () => {
    document.querySelector('.Nav_page').classList.remove('dis_blo');
});


let dropdownBtn = document.querySelector('.menu-btn');
let menuContent = document.querySelector('.menu-content');
dropdownBtn.addEventListener('click', () => {
   if (menuContent.style.display === "") {
      menuContent.style.display = "block";
   } else {
      menuContent.style.display = "";
   }
})
document.querySelector('.empt').onclick = () => {
   document.querySelector('#search_inp').value = '';
}
