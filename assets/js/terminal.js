var queue = [];
var busy = false;

// Enqueue
function addAlert(m) {
  queue.push(m);
  if (!busy) {
    busy = true;
    fireAlerts(queue);
  }
}

// Show
function fireAlerts(alerts) {
  var $e = null;
  var len = alerts.length;
  $.each(alerts, function(index, value) {
    // Use IIFE to multiply Wait x Index (http://stackoverflow.com/a/5226335/922522)
    (function(index, value) {
      var wait = index * 500 + 1000;
      setTimeout(function() {
        // Show Alert
        $e = $("<span>").html(value);
        $("#terminal").append($e);
        // debug 
        console.log("TERMINAL: "+value);
        setTimeout(removeAlert, 5500, $e);        
        // Remove displayed from queue
        queue.shift();
        // End of alerts array
        if (index === len - 1) {
          busy = false;
          // Are there more in the queue?
          if (queue.length > 0) {
            fireAlerts(queue);
          }
        }
      }, wait);
    })(index, value);
  });
}

// Hide
function removeAlert($e) {
  // $e.addClass('fadeOut');
  setTimeout(function() {
    $e.html("");
  }, 1000);
}






















