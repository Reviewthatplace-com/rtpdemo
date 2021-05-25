//mask functions
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

//mask implementation
$('[type="tel"]').keyup(phoneMask);
$('[id="patientZip"]').keyup(zipMask);
$('[id="insuranceZip"]').keyup(zipMask);
$('[id="patient-ssn"]').keyup(ssnMask);
$('[id="patient-zip"]').keyup(zipMask);
$('[id="ecp-zip"]').keyup(zipMask);