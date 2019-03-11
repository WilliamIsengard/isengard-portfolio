$(document).ready(function(){

  /**
  * jQuery Validate Function
  *
  * This function provides front-end validation for your form.
  * If all tests set up here pass, the form data is AJAX submitted
  * to the mailer.php file.
  *
  * Update this file as needed for your form.
  * All ids and name values must match up to your form here.
  *
  * @author William Isengard <william.isengard@gmail.com>
  **/

  /* begin validate function */
  $("#contact-form").validate({
    debug: true,
    errorClass: "alert alert-danger",
    errorLabelContainer: "#output-area",
    errorElement: "div",
    // rules define valid inputs
    rules: {
      contactName: {
        required: true
      },
      contactEmail: {
        email: true,
        required: true
      },
      contactMessage: {
        required: true,
        maxlength: 2000,
        minlength: 10
      }
    },

    // error messages to display when rules are not followed
    messages: {
      contactName: {
        required: "Please enter your name."
      },
      contactEmail: {
        email: "Please enter your email address.",
        required: "Please enter your email address."
      },
      contactMessage: {
        required: "Please enter a message to send me.",
        maxlength: "Message limited to 2000 characters max.",
        minlenth: "Please enter a message with at least 10 characters."
      }
    },

    // AJAX submit form
    submitHandler: function(form) {
      $("#contact-form").ajaxSubmit({
        type: "POST",
        url: $("#contact-form").attr("action"),
        success: function(ajaxOutput) {
          // clear output area formatting
          $("#output-area").css("display", "");
          // write server reply to output area
          $("#output-area").html(ajaxOutput);
          // reset form if successful
          if($(".alert-success").length >= 1) {
            $("#contact-form")[0].reset();
          }
        }
      })
    }

  });/* end validate function here */

});/*end document.ready()*/
