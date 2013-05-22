$(function() {

  function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

  $('.error').hide();

  $("#contact button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').text('').hide();
		
	  var name = $("#contact #name").val();
		if (name == "") {
      $(".error").text('Please enter your name.').show();
      $("#contact input#name").focus();
      return false;
    }
		var email = $("#contact #email").val();
		if(!IsEmail(email)) {
      $(".error").text('Your email is not valid.').show();
      $("#email").focus();
      return false;
    }
		var message = $("#contact #message").val();
		if (message == "") {
      $(".error").text('Please enter a message.').show();
      $("#message").focus();
      return false;
    }
		
	var dataString = 'name='+ name + '&email=' + email + '&message=' + message;
		
	$.ajax({
      type: "POST",
      url: "wp-content/themes/open_badges_community/contact_submit.php",
      data: dataString,
      success: function() {
        $('#contact').html("<div id='message'></div>");
        $('#message').html("<h4>Contact Form Submitted!</h4>")
        .append("<p>Thank you for reaching out.</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message');
        });
      }
     });
    return false;
	}); // end contact logic

}); // end doc ready