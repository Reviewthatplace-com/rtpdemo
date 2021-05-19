/* masks */
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

$('[id="fax"]').keyup(phoneMask);
$('[type="tel"]').keyup(phoneMask);
$('[id="zip"]').keyup(zipMask);
$('[id="izip"]').keyup(zipMask);
$('[id="ssn"]').keyup(ssnMask);
/* masks */


/* datepicker */
$( function() 
{
	$( ".datepicker" ).datepicker();
} );