/**
  Name: Matt West Portfolio Site
  Version: 1.0
  Author: Matt West
*/

/** ------ MWPortfolio code ------ **/
var MWPortfolio = (function($) {
  // Private variables


  // Constructor
  var MWPortfolio = function () {
    // Hide Past Experience.
    $('#past-experience').hide();
    
    MWPortfolio.attachObservers();
  };
  
  // Event Listeners
  MWPortfolio.attachObservers = function () {
    // Event Listener for 'Show Past Experience Button'
    $('#show-experience').click(function(e) {
      e.preventDefault();

      $(this).hide();
      $('#past-experience').fadeIn();
    });
  };

  return MWPortfolio;
})(jQuery);
/** ------ End MWPortfolio code ------ **/


/** ------ Initialisation code ------ **/
$(function() {
  var mwPortfolio = new MWPortfolio();
});
/** ------ End Initialisation code ------ **/
