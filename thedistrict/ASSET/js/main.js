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