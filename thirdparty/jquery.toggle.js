// Andy Langton's show/hide/mini-accordion - updated 23/11/2009
// Latest version @ http://andylangton.co.uk/jquery-show-hide
 
// this tells jquery to run the function below once the DOM is ready
$(document).ready(function() {
 
  // choose text for the show/hide link - can contain HTML (e.g. an image)
  var showText='全文を読む';
  var hideText='閉じる';

  // initialise the visibility check
  var is_visible = false;

  // append show/hide links to the element directly preceding the element with a class of "toggle"
  $('.toggle').prev().append(' (<a href="#" class="toggleLink">'+showText+'</a>)');

  // hide all of the elements with a class of 'toggle'
  $('.toggle').hide();

  // capture clicks on the toggle links
  $('a.toggleLink').click(function() {

    // switch visibility
    is_visible = !is_visible;

    // change the link depending on whether the element is shown or hidden
    $(this).html( (!is_visible) ? showText : hideText);

    // toggle the display - uncomment the next line for a basic "accordion" style
    //$('.toggle').hide();$('a.toggleLink').html(showText);
    $(this).parent().next('.toggle').toggle('slow');

    // return false so any link destination is not followed
    return false;

  });
})(jQuery);