
const nav_menu_mobile = document.getElementById('nav_menu_mobile');
const mobile_menu_icon = document.getElementById('mobile_menu_icon');
const mobile_menu_icon_close = document.getElementById('mobile_menu_icon_close');

mobile_menu_icon.addEventListener('click' , ()=>{
    nav_menu_mobile.classList.remove('hidden');
    mobile_menu_icon.classList.add('hidden');
    mobile_menu_icon_close.classList.remove('hidden');

});
mobile_menu_icon_close.addEventListener('click' , ()=>{
    nav_menu_mobile.classList.add('hidden');
    mobile_menu_icon_close.classList.add('hidden');
    mobile_menu_icon.classList.remove('hidden');

});
