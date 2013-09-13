/**
  Name: Light Show
  Version: 1.0
  Author: Matt West
*/

/** ------ Light Show code ------ **/
var LightShow = (function($) {
  // Private variables
  var count = 0;
  var scrWidth;
  var scrHeight;
  var tailLength = 185;
  var usedTails = [];

  // Constructor
  var LightShow = function () {
    // Set the frame dimensions.
    scrWidth = $('#feature').innerWidth();
    scrHeight = $('#feature').innerHeight();

    // Get things rocking!
    LightShow.genLightTrail();
  };
  
  /*
   *  Add a new light trail (LT) to the screens
   */
  LightShow.genLightTrail = function() {
    // Get the random values for positioning the LT
    var color = LightShow.randColor();
    var orientation = LightShow.randOrientation();
    var entry = 0;
    
    // Initialise position values
    var topVal = '';
    var bottomVal = '';
    var leftVal = '';
    var rightVal = '';
    
    // Calculate the entry points and set the variables
    if (orientation == "vertical-TB") {
      start = "left";
      topVal = scrHeight + tailLength;
      entry = LightShow.randEntryPoint(scrWidth);
    } else if (orientation == "vertical-BT") {
      start = "left";
      bottomVal = (scrHeight + tailLength);
      entry = LightShow.randEntryPoint(scrWidth);
    } else if (orientation == "horizontal-LR") {
      start = "top";
      leftVal = (scrWidth + tailLength);
      entry = LightShow.randEntryPoint(scrHeight);
    } else if (orientation == "horizontal-RL") {
      start = "top";
      rightVal = (scrWidth + tailLength);
      entry = LightShow.randEntryPoint(scrHeight);
    }
    
    // Reuse tails already added to the document if possible.
    // Small performance enhancement.
    if (usedTails.length > 0) {
      // Recover an old tail.
      var tail = usedTails.pop();

      console.log('reused');
      id = $(tail).attr('id');

      $(tail).attr('style', (start +  ': ' + entry + 'px;'));
      $(tail).attr('class', ('tail ' + color + ' ' + orientation));
    } else {
      // Create a new ID
      var id = "tail" + (count + 1);

      // Increment the count
      count++;

      $('#feature').append('<i id="' + id + '" class="tail ' + color + ' ' + orientation + '" style="' + start +  ': ' + entry + 'px;"></i>');
      console.log('created');
    }
    
    // Animate the light trail
    $('#' + id).transition({
      top: '+=' + topVal,
      bottom: '+=' + bottomVal,
      left: '+=' + leftVal,
      right: '+=' + rightVal
    }, 7000, function() {
      // Once the light trail hits the other side remove it from the DOM
      usedTails.push(this);
    });
    
    // Add a new light trail in one second
    setTimeout("LightShow.genLightTrail()", 1000);
  };


  /*
   *  Compute a random entry point
   *  
   *  @param  max           This is the maximum value (e.g. the width or height of the screen)
   *  @return randomNumber  The entry point
   */
  LightShow.randEntryPoint= function(max) {
    return (Math.floor((Math.random()*max / 5)) * 5);
  };


  /*
   *  Select a random orientation from the orientations array.
   *  This will determine the direction that the light trail travels in
   *
   *  @return orientation The random orientation string
   */
  LightShow.randOrientation = function() {
    var orientations = ['horizontal-LR', 'horizontal-RL', 'vertical-TB', 'vertical-BT'];
    var randPos = Math.floor(Math.random()*4);
    
    return orientations[randPos];
  };


  /*
   *  Select a random color (from the 4 available colors) which will determine
   *  the color of the light trail
   *
   *  @return color A random color
   */
  LightShow.randColor = function() {
    var colors = ['GREENtail', 'REDtail', 'YELLOWtail', 'BLUEtail'];
    var randPos = Math.floor(Math.random()*4);
    
    return colors[randPos];
  };

  return LightShow;
})(jQuery);
/** ------ End LightShow code ------ **/


/** ------ Initialisation code ------ **/
$(function() {
  // Check to make sure CSS3 transforms are available
  if (!($('html').hasClass('no-csstransforms'))) {
    var lightshow = new LightShow();
  }
});
/** ------ End Initialisation code ------ **/
