function validateContactForm() {
	var valid = true;

	$(".info").html("");
	$(".input-field").css('border', '#e0dfdf 1px solid');
	var firstname = $("#firstname").val();
	var lastname = $("#lastname").val();
    var email = $("#email").val();
	var category = $("#category").val();
	var content = $("#content").val();

	if (firstname == "") {
		$("#firstname-info").html("Required.");
		$("#firstname").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (lastname == "") {
		$("#lastname-info").html("Required.");
		$("#lastname").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email-info").html("Invalid Email Address.");
		$("#email").css('border', '#e66262 1px solid');
		valid = false;
	}

	if (category == "") {
		$("#category-info").html("Required.");
		$("#category").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (content == "") {
		$("#userMessage-info").html("Required.");
		$("#content").css('border', '#e66262 1px solid');
		valid = false;
	}
	return valid;
}