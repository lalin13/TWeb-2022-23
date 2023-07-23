$(document).ready(function(){
	showFeedback();

	$("#feedback_form").on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			url: "../php/process_feedback.php", 
			type: "POST",
			data: formData,
			dataType: "json",
			success:function(response) {
				if(response.error==0) {
                    $("#feedback_form")[0].reset();
					$("#message").html(response.message);
					showFeedback(formData);
				} else{
					$("#message").html(response.message);
				}
			}
		}); 
	});	
});

function showFeedback(){
	$.ajax({
		url:"./show_feedback.php",
		method:"POST",
		data: $("#feedback_form").serialize(),
		success:function(response) {
			$("#show_feedback").html(response);
		}
	})
}