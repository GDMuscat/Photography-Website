'use strict';

function noRightClick() {
    /*
        This function will prevent the context menu from appearing. Normally,
        the context menu is accessible by using the mouse right-click.
    */

    document.addEventListener('contextmenu', event => event.preventDefault());
    alert('No right-clicking allowed.');
}

// $(function () {
//     var selectedClass = "";
//     $(".filter").click(function () {
//         selectedClass = $(this).attr("data-rel");
//         $("#gallery").fadeTo(100, 0.1);
//         $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
//         setTimeout(function () {
//             $("." + selectedClass).fadeIn().addClass('animation');
//             $("#gallery").fadeTo(300, 1);
//         }, 300);
//     });
// });

// $("div[id^='myModal']").each(function () {

//     var currentModal = $(this);


//     //click next button
//     currentModal.find('.btn-next').click(function () {

//         currentModal.modal('hide');
//         currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
//     });

//     //click previous button
//     currentModal.find('.btn-prev').click(function () {
//         currentModal.modal('hide');
//         currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show');
//     });

// });