$(document)
.on("submit", "form.form2", function(event) {


	event.preventDefault();
	
	var _form2 = $(this);

	var dataObj = {
		ass_name: $("input[id='assessment_name']", _form2).val(),
		due_date: $("input[id='Due_date']", _form2).val(),
		preferred_outcome: $("select[id='preferred_outcome']", _form2).val(),
		p_e_d: $("input[id='Preferred_extension']", _form2).val(),
		d_o_c: $("input[id='details_of_claim']", _form2).val(),
		d_a_f: $("input[id='D_a_f']", _form2).val(),
		d_a_t: $("input[id='D_a_t']", _form2).val(),
		evidence: $("input[id='evidence']", _form2).val(),
		statement: $("textarea[id='statement']", _form2).val()


	}


	$.ajax({
		type: 'POST',
		url: 'ajax/dashboard.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		console.log(data);

	})
	.fail(function ajaxFailed(e) {
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		console.log('Always');
		location.reload();
	})


	return false;
})

