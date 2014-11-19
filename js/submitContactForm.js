// handle form data sending to the php mailing script


$(document).ready(function() {

// result message div
var msg = $(".alert");

	$("#contact-form").submit(function(event) {

		event.preventDefault();

		// send form data to server
		$.ajax({
			type: "POST",
			url: $("#contact-form").attr("action"),
			data: $(this).serialize()
			})
			// handle successful response from server
			.done(function(response) {
				$(msg).addClass("alert-success show").text("I'll be in touch soon!");
				// Clear the form if submitted
    			$("#name").val("");
    			$("#email").val("");
    			$("#comment").val("");
			})

			// handle errors
			.fail(function(data){
				if (data.responseText !== "") {
					$(msg).addClass("alert-warning show").text("Email was not send. Try again later.");
				}
			});
	});
});