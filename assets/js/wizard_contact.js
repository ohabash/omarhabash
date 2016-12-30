/*===================== Form WIZARD =====================*/
	// var theForm = document.getElementById( 'theForm' );

	// new stepsForm( theForm, {
	// 	onSubmit : function( form ) {
	// 		// hide form
	// 		classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
 //      addAlert('form submitted');


 //      // cancels the form submission
 //        // event.preventDefault();
 //        submitForm();

 //      // let's just simulate something...
 //      var messageEl = theForm.querySelector( '.final-message' );
 //      messageEl.innerHTML = 'Thank you! We\'ll be in touch.';
 //      classie.addClass( messageEl, 'show' );
 //    }
 //  } );

  // trigger
 //  $('#theForm').submit(function () {
 //      addAlert('form submitted');
	// });









// submit action
function submitForm(){
    // Initiate Variables With Form Content
    var nme = $(".nme").val();
    var eml = $(".eml").val();
    var msg = $(".msg").val();
 
    $.ajax({
        type: "POST",
        url: "inc/contact_controller.php",
        data: 
        	"nme=" + nme + 
          "&eml=" + eml + 
          "&msg=" + msg,
        success : function(text){
            if (text == "success"){
                // formSuccess();
                tink();
            }
        }
    });
}


// jQuery(document).ready(function($) {
// 	var formSuccess = function(){
// 	    $(".hide-on-success" ).addClass( "animated fadeOutUp" );
// 	}
// });











