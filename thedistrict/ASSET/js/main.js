function header_responsive() {
    var nav_responsive_header = document.getElementById("nav_responsive_header_id").className;

    if(nav_responsive_header != "nav_responsive_header") {
        document.getElementById("nav_responsive_header_id").className = 'nav_responsive_header';
    } else {
        document.getElementById("nav_responsive_header_id").className = 'nav_responsive_header_none';
    }
}
