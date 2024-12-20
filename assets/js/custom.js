jQuery(function ($) {

    // Do stuff here

    // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            //document.getElementById("navbar-brand-logo").style.width = "7.5rem";
            //document.getElementById("navbar-brand-logo-dark").style.width = "7.5rem";
            document.getElementById("nav-main").classList.add("shadow");
        } else {
            document.getElementById("navbar-brand-logo").style.width = "10rem";
            document.getElementById("navbar-brand-logo-dark").style.width = "10rem";
            document.getElementById("nav-main").classList.remove("shadow");
        }
    }

    // Add icon-link class to all nav-link elements
    const NavLinkCollection = document.getElementsByClassName("nav-link");
    for(let i = 0;i < NavLinkCollection.length; i++){
        NavLinkCollection[i].classList.add("icon-link");
    }

    // Add dropdown-item class to all nav-link elements
    const DropdownItemCollection = document.getElementsByClassName("dropdown-item");
    for(let i = 0;i < DropdownItemCollection.length; i++){
        DropdownItemCollection[i].classList.add("icon-link");
    }

    // Align navbar to left
    document.getElementById("bootscore-navbar").classList.remove("ms-auto");
    document.getElementById("bootscore-navbar").classList.add("me-auto");

    const EntryTitleCollection = document.getElementsByClassName("entry-title");
    for(let i = 0;i < EntryTitleCollection.length; i++){
        EntryTitleCollection[i].classList.add("text-light", "bg-opacity-75", "bg-primary", "px-3", "rounded");
    }

}); // jQuery End