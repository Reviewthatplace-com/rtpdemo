/* masks */
function phoneMask() 
{ 
	var num = $(this).val().replace(/\D/g,''); 
	$(this).val('(' + num.substring(0,3) + ') ' + num.substring(3,6) + '-' + num.substring(6,10)); 
}

function zipMask() 
{ 
	var num = $(this).val().replace(/\D/g,''); 
	$(this).val(num.substring(0,5)); 
}

function ssnMask() 
{ 
	var num = $(this).val().replace(/\D/g,''); 
	$(this).val(num.substring(0,3) + '-'  + num.substring(3,5)+ '-' + num.substring(5,9)); 
}

$('[type="tel"]').keyup(phoneMask);
$('.zip').keyup(zipMask);
$('.ssn').keyup(ssnMask);
