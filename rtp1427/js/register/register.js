$("a").click(function(){
	$(this).closest(".step").toggleClass("active");
});

$("#btn_personal_info").click(function()
{	
	var error_patient_fname = '';
	var error_patient_lname = '';
	var error_patient_dob = '';
	var error_patient_ssn = '';
	var error_patient_address = '';
	var error_patient_apt = '';
	var error_patient_city = '';
	var error_patient_state = '';
	var error_patient_zip = '';
	var error_patient_cell = '';
	var error_patient_email = '';

	if($.trim($('#patient-fName').val()).length == 0)
  	{
	   error_patient_fname = 'First name  is required';
	   $('#error_patient_fname').text(error_patient_fname);
	   $('#patient-fName').addClass('has-error');
  	}
  	else
	{
	   error_patient_fname = '';
	   $('#error_patient_fname').text(error_patient_fname);
	   $('#patient-fName').removeClass('has-error');
	}

	if($.trim($('#patient-lName').val()).length == 0)
  	{
	   error_patient_lname = 'Last name  is required';
	   $('#error_patient_lname').text(error_patient_lname);
	   $('#patient-lName').addClass('has-error');
  	}
  	else
	{
	   error_patient_lname = '';
	   $('#error_patient_lname').text(error_patient_lname);
	   $('#patient-lName').removeClass('has-error');
	}


	if($.trim($('#patient-dob').val()).length == 0)
  	{
	   error_patient_dob = 'Date of Birth  is required';
	   $('#error_patient_dob').text(error_patient_dob);
	   $('#patient-dob').addClass('has-error');
  	}
  	else
	{
	   error_patient_dob = '';
	   $('#error_patient_dob').text(error_patient_dob);
	   $('#patient-dob').removeClass('has-error');
	}


	if($.trim($('#patient-ssn').val()).length == 0)
  	{
	   error_patient_ssn = 'Social security number  is required';
	   $('#error_patient_ssn').text(error_patient_ssn);
	   $('#patient-ssn').addClass('has-error');
  	}
  	else
	{
	   error_patient_ssn = '';
	   $('#error_patient_ssn').text(error_patient_ssn);
	   $('#patient-ssn').removeClass('has-error');
	}


	if($.trim($('#patient-address').val()).length == 0)
  	{
	   error_patient_address = 'Address  is required';
	   $('#error_patient_address').text(error_patient_address);
	   $('#patient-address').addClass('has-error');
  	}
  	else
	{
	   error_patient_address = '';
	   $('#error_patient_address').text(error_patient_address);
	   $('#patient-address').removeClass('has-error');
	}


	if($.trim($('#patient-apt').val()).length == 0)
  	{
	   error_patient_apt = 'APT/Room#  is required';
	   $('#error_patient_apt').text(error_patient_apt);
	   $('#patient-apt').addClass('has-error');
  	}
  	else
	{
	   error_patient_apt = '';
	   $('#error_patient_apt').text(error_patient_apt);
	   $('#patient-apt').removeClass('has-error');
	}


	if($.trim($('#patient-city').val()).length == 0)
  	{
	   error_patient_city = 'City  is required';
	   $('#error_patient_city').text(error_patient_city);
	   $('#patient-city').addClass('has-error');
  	}
  	else
	{
	   error_patient_city = '';
	   $('#error_patient_city').text(error_patient_city);
	   $('#patient-city').removeClass('has-error');
	}


	if($.trim($('#patient-state').val()).length == 0)
  	{
	   error_patient_state = 'State  is required';
	   $('#error_patient_state').text(error_patient_state);
	   $('#patient-state').addClass('has-error');
  	}
  	else
	{
	   error_patient_state = '';
	   $('#error_patient_state').text(error_patient_state);
	   $('#patient-state').removeClass('has-error');
	}


	if($.trim($('#patient-zip').val()).length == 0)
  	{
	   error_patient_zip = 'Zip is required';
	   $('#error_patient_zip').text(error_patient_zip);
	   $('#patient-zip').addClass('has-error');
  	}
  	else
	{
	   error_patient_zip = '';
	   $('#error_patient_zip').text(error_patient_zip);
	   $('#patient-zip').removeClass('has-error');
	}


	if($.trim($('#patient-cell').val()).length == 0)
  	{
	   error_patient_cell = 'Cell  is required';
	   $('#error_patient_cell').text(error_patient_cell);
	   $('#patient-cell').addClass('has-error');
  	}
  	else
	{
	   error_patient_cell = '';
	   $('#error_patient_cell').text(error_patient_cell);
	   $('#patient-cell').removeClass('has-error');
	}


	if($.trim($('#patient-email').val()).length == 0)
  	{
	   error_patient_email = 'Email  is required';
	   $('#error_patient_email').text(error_patient_email);
	   $('#patient-email').addClass('has-error');
  	}
  	else
	{
	   error_patient_email = '';
	   $('#error_patient_email').text(error_patient_email);
	   $('#patient-email').removeClass('has-error');
	}


	if(error_patient_fname != '' || error_patient_lname != '' || error_patient_dob != '' || 
		error_patient_ssn != '' || error_patient_address != ''
		|| error_patient_apt != '' || error_patient_city != '' || error_patient_state != '' || 
		error_patient_zip != '' || 
		error_patient_cell != '' || 
		error_patient_email != '')
	{
	   return false;
	}
	else
	{
	   $('#first-step').removeClass('active');
	   $('#second-step').addClass('active');
	   $('#first-step').addClass('completed');
	}


});




$("#btn-prev-personal").click(function(){
	$("li").removeClass("active");
	$("#first-step").addClass("active");
});


$("#btn-next-scp").click(function(){
	var error_ecp_fname = '';
	var error_ecp_lname = '';
	var error_ecp_address = '';
	var error_ecp_cell = '';

	if($.trim($('#ecp-fname').val()).length == 0)
  	{
	   error_ecp_fname = 'First name  is required';
	   $('#error_ecp_fname').text(error_ecp_fname);
	   $('#ecp-fname').addClass('has-error');
  	}
  	else
	{
	   error_ecp_fname = '';
	   $('#error_ecp_fname').text(error_ecp_fname);
	   $('#ecp-fname').removeClass('has-error');
	}


	if($.trim($('#ecp-lname').val()).length == 0)
  	{
	   error_ecp_lname = 'Last name  is required';
	   $('#error_ecp_lname').text(error_ecp_lname);
	   $('#ecp-lname').addClass('has-error');
  	}
  	else
	{
	   error_ecp_lname = '';
	   $('#error_ecp_lname').text(error_ecp_lname);
	   $('#ecp-lname').removeClass('has-error');
	}


	if($.trim($('#ecp-address').val()).length == 0)
  	{
	   error_ecp_address = 'Address  is required';
	   $('#error_ecp_address').text(error_ecp_address);
	   $('#ecp-address').addClass('has-error');
  	}
  	else
	{
	   error_ecp_address = '';
	   $('#error_ecp_address').text(error_ecp_address);
	   $('#ecp-address').removeClass('has-error');
	}

	if($.trim($('#ecp-cell').val()).length == 0)
  	{
	   error_ecp_cell = 'Cell  is required';
	   $('#error_ecp_cell').text(error_ecp_cell);
	   $('#ecp-cell').addClass('has-error');
  	}
  	else
	{
	   error_ecp_cell = '';
	   $('#error_ecp_cell').text(error_ecp_cell);
	   $('#ecp-cell').removeClass('has-error');
	}


	if(error_ecp_fname != '' || error_ecp_lname != '' || error_ecp_address != '' || 
		error_ecp_cell != '')
	{
	   return false;
	}
	else
	{
	   $('.step').removeClass('active');
	   $('#third-step').addClass('active');
	   $('#second-step').addClass('completed');
	}

});



$("#btn-prev-ecp").click(function(){
	$(".step").removeClass("active");
	$("#second-step").addClass("active");
});


$("#btn-next-pip").click(function(){
	var error_scp_fname = '';
	var error_scp_lname = '';

	if($.trim($('#scp-fname').val()).length == 0)
  	{
	   error_scp_fname = 'First name  is required';
	   $('#error_scp_fname').text(error_scp_fname);
	   $('#scp-fname').addClass('has-error');
  	}
  	else
	{
	   error_scp_fname = '';
	   $('#error_scp_fname').text(error_scp_fname);
	   $('#scp-fname').removeClass('has-error');
	}


	if($.trim($('#scp-lname').val()).length == 0)
  	{
	   error_scp_lname = 'Last name  is required';
	   $('#error_scp_lname').text(error_scp_lname);
	   $('#scp-lname').addClass('has-error');
  	}
  	else
	{
	   error_scp_lname = '';
	   $('#error_scp_lname').text(error_scp_lname);
	   $('#scp-lname').removeClass('has-error');
	}


	if(error_scp_fname != '' || error_scp_lname != '')
	{
	   return false;
	}
	else
	{
	   $('.step').removeClass('active');
	   $('#fourth-step').addClass('active');
	   $('#third-step').addClass('completed');
	}

});



$("#btn-prev-ecp").click(function(){
	$(".step").removeClass("active");
	$("#second-step").addClass("active");
});


$("#btn-next-pip").click(function(){
	var error_scp_fname = '';
	var error_scp_lname = '';

	if($.trim($('#scp-fname').val()).length == 0)
  	{
	   error_scp_fname = 'First name  is required';
	   $('#error_scp_fname').text(error_scp_fname);
	   $('#scp-fname').addClass('has-error');
  	}
  	else
	{
	   error_scp_fname = '';
	   $('#error_scp_fname').text(error_scp_fname);
	   $('#scp-fname').removeClass('has-error');
	}


	if($.trim($('#scp-lname').val()).length == 0)
  	{
	   error_scp_lname = 'Last name  is required';
	   $('#error_scp_lname').text(error_scp_lname);
	   $('#scp-lname').addClass('has-error');
  	}
  	else
	{
	   error_scp_lname = '';
	   $('#error_scp_lname').text(error_scp_lname);
	   $('#scp-lname').removeClass('has-error');
	}


	if(error_scp_fname != '' || error_scp_lname != '')
	{
	   return false;
	}
	else
	{
	   $('.step').removeClass('active');
	   $('#fourth-step').addClass('active');
	   $('#fourth-step').addClass('completed');
	}

});

$("#btn-prev-scp").click(function(){
	$(".step").removeClass("active");
	$("#third-step").addClass("active");
});


$("#btn-next-sip").click(function(){
	var error_pip = '';

	if(
		($.trim($('#pip-name').val()).length == 0 || 
		$.trim($('#pip-policy').val()).length == 0 ||
		$.trim($('#pip-grp').val()).length == 0 ||
		$.trim($('#pip-grp').val()).length == 0)


		&&

		(document.getElementById("pipFront").files.length == 0 || 
		document.getElementById("pipBack").files.length == 0)
		)

		
	{
		error_pip = 'Please Upload Front and Back of the card or Fill all the four Fields Manually';
	    $('#error_pip').text(error_pip);
	}
	else
	{
	   $('.step').removeClass('active');
	   $('#fifth-step').addClass('active');
	   $('#fifth-step').addClass('completed');
	}

});

$("#btn-prev-pip").click(function(){
	$(".step").removeClass("active");
	$("#fourth-step").addClass("active");
});


$("#btn-next-tip").click(function(){
	$(".step").removeClass("active");
	$("#sixth-step").addClass("active");
	$('#sixth-step').addClass('completed');
});



$("#btn-prev-sip").click(function(){
	$(".step").removeClass("active");
	$("#fifth-step").addClass("active");
});


$("#btn-next-cci").click(function(){
	$(".step").removeClass("active");
	$("#seventh-step").addClass("active");
	$('#seventh-step').addClass('completed');
});


$("#btn-prev-tip").click(function(){
	$(".step").removeClass("active");
	$("#sixth-step").addClass("active");
});


$("#btn-next-rmi").click(function(){
	$(".step").removeClass("active");
	$("#eight-step").addClass("active");
	$('#eight-step').addClass('completed');
});


$("#btn-prev-cci").click(function(){
	$(".step").removeClass("active");
	$("#seventh-step").addClass("active");
});

$("#btn-next-auth").click(function(){
	var error_rmi_pharmacy = '';
	var error_rmi_check = '';

	if($.trim($('#rmi-pharmacy').val()).length == 0)
	{
	   error_rmi_pharmacy = 'This field is required';
	   $('#error_rmi_pharmacy').text(error_rmi_pharmacy);
	   $('#rmi-pharmacy').addClass('has-error');
	}
	else
	{
	   error_rmi_pharmacy = '';
	   $('#error_rmi_pharmacy').text(error_rmi_pharmacy);
	   $('#rmi-pharmacy').removeClass('has-error');
	}


	if($("#rmiCheck1").prop("checked") == false)
	{
	   error_rmi_check = 'Please select the checkbox to proceed';
	   $('#error_rmi_check').text(error_rmi_check);
	   $('#rmiCheck1').addClass('has-error');
	}
	else
	{
	   error_rmi_pharmacy = '';
	   $('#error_rmi_check').text(error_rmi_check);
	   $('#rmiCheck1').removeClass('has-error');
	}




	if(error_rmi_pharmacy != '' || error_rmi_check != '')
	{
	   return false;
	}
	else
	{
	   $('.step').removeClass('active');
	   $('#ninth-step').addClass('active');
	}

});


$("#btn-prev-rmi").click(function(){
	$(".step").removeClass("active");
	$("#eight-step").addClass("active");
});


