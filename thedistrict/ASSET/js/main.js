function header_responsive() {
    var nav_responsive_header = document.getElementById("nav_responsive_header_id").className;

    if(nav_responsive_header != "nav_responsive_header") {
        document.getElementById("nav_responsive_header_id").className = 'nav_responsive_header';
    } else {
        document.getElementById("nav_responsive_header_id").className = 'nav_responsive_header_none';
    }
}

function header_responsive_tab_ver() {
    var nav_responsive_header = document.getElementById("nav_responsive_tab_ver_header_id").className;

    if(nav_responsive_header != "nav_responsive_tab_ver_header") {
        document.getElementById("nav_responsive_tab_ver_header_id").className = 'nav_responsive_tab_ver_header';
    } else {
        document.getElementById("nav_responsive_tab_ver_header_id").className = 'nav_responsive_tab_ver_header_none';
    }
}

function menu_connecte() {
    var menu_connecte = document.getElementById("nav_menu_connecte").className;

    if(menu_connecte != "nav_menu_connecte_block") {
        document.getElementById("nav_menu_connecte").className = 'nav_menu_connecte_block';
    } else {
        document.getElementById("nav_menu_connecte").className = 'nav_menu_connecte_none';
    }
}

const iconLock = document.addEventListener("click", function(){
    iconLock.classList.toggle('fa-lock');
    iconLock.classList.toggle('fa-lock-open');
});
