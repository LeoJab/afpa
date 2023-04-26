const menu_nav_uti = document.querySelector('.menu_nav_uti');
console.log(menu_nav_uti);

const icon_user = document.querySelector('.icon_user');
console.log(icon_user);

icon_user.addEventListener("click", function(){
    if(menu_nav_uti.classList.contains('none')) {
        menu_nav_uti.classList.toggle('none');
        menu_nav_uti.classList.toggle('block');
    } else {
        menu_nav_uti.classList.toggle('block');
        menu_nav_uti.classList.toggle('none');
    }
})