'use strict';


function noRightClick()
{
    /*
        This function will prevent the context menu from appearing. Normally,
        the context menu is accessible by using the mouse right-click.
    */
   
    document.addEventListener('contextmenu', event => event.preventDefault());
    alert('No right-clicking allowed.');
}