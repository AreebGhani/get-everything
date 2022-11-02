$(document).ready(function() {

    $('.sidenav').sidenav({ edge: "left", draggable: true, inDuration: 600, outDuration: 600, preventScrolling: false, onOpenStart() { $('.NavBar').removeClass(); }, onCloseEnd() { $('#home').addClass('NavBar'); }, });
    $('.parallax').parallax();
    $('.dropdown-trigger').dropdown({ alignment: "center", constrainWidth: false, container: true, coverTrigger: false, autoTrigger: false, isScrollable: true, inDuration: 600, outDuration: 800 });
    $('.materialboxed').materialbox();
    $('input#message').characterCounter();
    $('.fixed-action-btn').floatingActionButton();
    $('.collapsible').collapsible();

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        padding: 200,
        indicators: true
    }, setTimeout(autoplay, 4500));

    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }

});