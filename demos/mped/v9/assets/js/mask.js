function phoneMask() 
{ 
	var num = $(this).val().replace(/\D/g,''); 
	$(this).val('(' + num.substring(0,3) + ') ' + num.substring(3,6) + '-' + num.substring(6,10)); 
}

function zipMask() 
{ 
	var num = $(this).val().replace(/\D/g,''); 
	$(this).val(num.substring(0,5) + ' - ' + num.substring(5,9)); 
}

function ssnMask() 
{ 
	var num = $(this).val().replace(/\D/g,''); 
	$(this).val(num.substring(0,3) + '-'  + num.substring(3,5)+ '-' + num.substring(5,9)); 
}

function date() 
{ 
	var num = $(this).val().replace(/\D/g,''); 
	$(this).val(num.substring(0,2) + '-'  + num.substring(2,4)+ '-' + num.substring(4,8)); 
}

$('[type="tel"]').keyup(phoneMask);
$('.zip').keyup(zipMask);
$('.ssn').keyup(ssnMask);
$('.datepicker').keyup(date);
