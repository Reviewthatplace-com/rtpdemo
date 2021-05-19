$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

//navigation functionality
$("a").click(function(){
  $(this).closest("li").toggleClass("active");
});
$('.intial_hidden').hide();

// show and hide for marital status
function maritalStatus() {
  var x = document.getElementById("marital_status");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for insurance type
function insType() {
  var x = document.getElementById("insurancetype");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for condition for office
function fourCond() {
  var x = document.getElementById("second_medcond");
  var y = document.getElementById("third_medcond");
  var z = document.getElementById("fourth_medcond");
  if (z.style.display === "none" && y.style.display === "block" && x.style.display === "block") {
    z.style.display = "block";	
  }
  if (y.style.display === "none" && x.style.display === "block" && z.style.display === "none") {
    y.style.display = "block";	
  }
  if (x.style.display === "none" && y.style.display === "none" && z.style.display === "none") {
    x.style.display = "block";
  }
}


// show and hide for radiating
function Radiating1() {
  var x = document.getElementById("radiating_type1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas1a").addEventListener("click", function() {
  var rect = canvas1a.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas1a").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for radiating
function Radiating2() {
  var x = document.getElementById("radiating_type2");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas1b").addEventListener("click", function() {
  var rect = canvas1b.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas1b").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for radiating
function Radiating3() {
  var x = document.getElementById("radiating_type3");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas1c").addEventListener("click", function() {
  var rect = canvas1c.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas1c").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for radiating
function Radiating4() {
  var x = document.getElementById("radiating_type4");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas1d").addEventListener("click", function() {
  var rect = canvas1d.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas1d").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Burning
function Burning1() {
  var x = document.getElementById("burning_type1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas2a").addEventListener("click", function() {
  var rect = canvas2a.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas2a").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Burning
function Burning2() {
  var x = document.getElementById("burning_type2");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas2b").addEventListener("click", function() {
  var rect = canvas2b.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas2b").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Burning
function Burning3() {
  var x = document.getElementById("burning_type3");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas2c").addEventListener("click", function() {
  var rect = canvas2c.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas2c").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Burning
function Burning4() {
  var x = document.getElementById("burning_type4");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas2d").addEventListener("click", function() {
  var rect = canvas2d.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas2d").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Dull
function Dull1() {
  var x = document.getElementById("dull_type1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas3a").addEventListener("click", function() {
  var rect = canvas3a.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas3a").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Dull
function Dull2() {
  var x = document.getElementById("dull_type2");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas3b").addEventListener("click", function() {
  var rect = canvas3b.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas3b").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Dull
function Dull3() {
  var x = document.getElementById("dull_type3");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas3c").addEventListener("click", function() {
  var rect = canvas3c.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas3c").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Dull
function Dull4() {
  var x = document.getElementById("dull_type4");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas3d").addEventListener("click", function() {
  var rect = canvas3d.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas3d").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for insurance Aching
function Aching1() {
  var x = document.getElementById("aching_type1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas4a").addEventListener("click", function() {
  var rect = canvas4a.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas4a").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for insurance Aching
function Aching2() {
  var x = document.getElementById("aching_type2");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas4b").addEventListener("click", function() {
  var rect = canvas4b.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas4b").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for insurance Aching
function Aching3() {
  var x = document.getElementById("aching_type3");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas4c").addEventListener("click", function() {
  var rect = canvas4c.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas4c").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for insurance Aching
function Aching4() {
  var x = document.getElementById("aching_type4");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas4d").addEventListener("click", function() {
  var rect = canvas4d.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas4d").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Numbness
function Numbness1() {
  var x = document.getElementById("numbness_type1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas5a").addEventListener("click", function() {
  var rect = canvas5a.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas5a").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Numbness
function Numbness2() {
  var x = document.getElementById("numbness_type2");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas5b").addEventListener("click", function() {
  var rect = canvas5b.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas5b").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Numbness
function Numbness3() {
  var x = document.getElementById("numbness_type3");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas5c").addEventListener("click", function() {
  var rect = canvas5c.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas5c").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Numbness
function Numbness4() {
  var x = document.getElementById("numbness_type4");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas5d").addEventListener("click", function() {
  var rect = canvas5d.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas5d").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Stabbing
function Stabbing1() {
  var x = document.getElementById("stabbing_type1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas6a").addEventListener("click", function() {
  var rect = canvas6a.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas6a").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Stabbing
function Stabbing2() {
  var x = document.getElementById("stabbing_type2");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas6b").addEventListener("click", function() {
  var rect = canvas6b.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas6b").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Stabbing
function Stabbing3() {
  var x = document.getElementById("stabbing_type3");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas6c").addEventListener("click", function() {
  var rect = canvas6c.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas6c").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Stabbing
function Stabbing4() {
  var x = document.getElementById("stabbing_type4");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas6d").addEventListener("click", function() {
  var rect = canvas6d.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas6d").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Tingling
function Tingling1() {
  var x = document.getElementById("tingling_type1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas7a").addEventListener("click", function() {
  var rect = canvas7a.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas7a").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Tingling
function Tingling2() {
  var x = document.getElementById("tingling_type2");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas7b").addEventListener("click", function() {
  var rect = canvas7b.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas7b").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Tingling
function Tingling3() {
  var x = document.getElementById("tingling_type3");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas7c").addEventListener("click", function() {
  var rect = canvas7c.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas7c").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for Tingling
function Tingling4() {
  var x = document.getElementById("tingling_type4");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

document.getElementById("canvas7d").addEventListener("click", function() {
  var rect = canvas7d.getBoundingClientRect();
     var x = event.clientX - rect.left;
     var y = event.clientY - rect.top;
     var ctx = document.getElementById("canvas7d").getContext("2d");
     ctx.fillStyle = "#ff2626"; // Red color
     ctx.beginPath();
     ctx.arc(x, y, 10, 0, Math.PI * 2, true);
     ctx.fill();
});

// show and hide for psych_cond
function psychCond() {
  var x = document.getElementById("psych_cond");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for prev_surg
function prevSurg() {
  var x = document.getElementById("prev_surg");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for drugs_group
function drugsGroup() {
  var x = document.getElementById("drugs_group");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for spine_injury
function spineInjury() {
  var x = document.getElementById("spine_injury");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}



// show and hide for past problem group
function problemGroup() {
  var x = document.getElementById("problem_group");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for past cond treat
function condTreat() {
  var x = document.getElementById("cond_treat");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for past complaint
function pastComplaint() {
  var x = document.getElementById("past_complaint");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for other treatment
function otherTreatment() {
  var x = document.getElementById("other_treatment");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for unfavoruable
function unFavourable() {
  var x = document.getElementById("un_favourable");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for smoke
function smokeGroup() {
  var x = document.getElementById("smoke_group");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for family condition
function familyCondition() {
  var x = document.getElementById("family_condition");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for hereditary condition
function hereditaryCondition() {
  var x = document.getElementById("hereditary_condition");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for nutrition supplement
function nutritionSupplement() {
  var x = document.getElementById("nutrition_supplement");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for flu short
function fluShort() {
  var x = document.getElementById("flu_short");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// show and hide for exercise
function exerCise() {
  var x = document.getElementById("exer_cise");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}


//global variable
var error_step_one;
var error_step_two;
var error_step_third;
var error_step_fourth;
var error_step_fifth;
var error_step_seventh;
var error_step_eighth;
var error_step_tenth;
var error_step_tweleth;
var error_step_thirteenth;
var error_step_fourteenth;
var error_step_fifteenth;
var error_step_sixteenth;


//validations

// step 1 validation
function step_one_validation()
{
	var error_filler_name = '';
	var error_filler_relationship = '';
	var error_filler_hyk = '';

	//name validation
	if($.trim($('#filler_name').val()).length == 0)
  	{
	   error_filler_name = 'Name is required';
	   $('#error_filler_name').text(error_filler_name);
	   $('#filler_name').addClass('has-error');
  	}
  	else
	{
	   error_filler_name = '';
	   $('#error_filler_name').text(error_filler_name);
	   $('#filler_name').removeClass('has-error');
	}

	//relationship validation
	if($.trim($('#filler_relationship').val()).length == 0)
  	{
	   error_filler_relationship = 'This field is required';
	   $('#error_filler_relationship').text(error_filler_relationship);
	   $('#filler_relationship').addClass('has-error');
  	}
  	else
	{
	   error_filler_relationship = '';
	   $('#error_filler_relationship').text(error_filler_relationship);
	   $('#filler_relationship').removeClass('has-error');
	}

	//how you know validation
	if($.trim($('#filler_hyk').val()).length == 0)
  	{
	   error_filler_hyk = 'This field is required';
	   $('#error_filler_hyk').text(error_filler_hyk);
	   $('#filler_hyk').addClass('has-error');
  	}
  	else
	{
	   error_filler_hyk = '';
	   $('#error_filler_hyk').text(error_filler_hyk);
	   $('#filler_hyk').removeClass('has-error');
	}

	error_step_one =  error_filler_name + error_filler_relationship + error_filler_hyk;

	if(error_step_one != '')
	{
		$('#first-step').addClass('active');
	   	$('#step-one-cirle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#first-step').removeClass('completed');
	   	$('#first-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#first-step').removeClass('active');
	   $('#first-step').removeClass('warning');
	   $('#step-one-cirle').html('<i class="fas fa-check"></i>');
	   $('#first-step').addClass('completed');
	   $('#second-step').addClass('active');
	}
}

//step 2 validation
function step_two_validation()
{
	var error_child_name = '';
	var error_child_dob = '';
	var error_child_home = '';
	var error_child_city = '';
	var error_child_state = '';
	var error_child_zip = '';
	var error_child_home_phone = '';
	var error_child_email = '';

	//name validation
	if($.trim($('#child_name').val()).length == 0)
  	{
	   error_child_name = 'This field is required';
	   $('#error_child_name').text(error_child_name);
	   $('#child_name').addClass('has-error');
  	}
  	else
	{
	   error_child_name = '';
	   $('#error_child_name').text(error_child_name);
	   $('#child_name').removeClass('has-error');
	}


	//dob validation
	if($.trim($('#child_dob').val()).length == 0)
  	{
	   error_child_dob = 'This is required';
	   $('#error_child_dob').text(error_child_dob);
	   $('#child_dob').addClass('has-error');
  	}
  	else
	{
	   error_child_dob = '';
	   $('#error_child_dob').text(error_child_dob);
	   $('#child_dob').removeClass('has-error');
	}


	//home validation
	if($.trim($('#child_home').val()).length == 0)
  	{
	   error_child_home = 'This is required';
	   $('#error_child_home').text(error_child_home);
	   $('#child_home').addClass('has-error');
  	}
  	else
	{
	   error_child_home = '';
	   $('#error_child_home').text(error_child_home);
	   $('#child_home').removeClass('has-error');
	}

	//city validation
	if($.trim($('#child_city').val()).length == 0)
  	{
	   error_child_city = 'This is required';
	   $('#error_child_city').text(error_child_city);
	   $('#child_city').addClass('has-error');
  	}
  	else
	{
	   error_child_city = '';
	   $('#error_child_city').text(error_child_city);
	   $('#child_city').removeClass('has-error');
	}


	//state validation
	if($.trim($('#child_state').val()).length == 0)
  	{
	   error_child_state = 'This is required';
	   $('#error_child_state').text(error_child_state);
	   $('#child_state').addClass('has-error');
  	}
  	else
	{
	   error_child_state = '';
	   $('#error_child_state').text(error_child_state);
	   $('#child_state').removeClass('has-error');
	}


	//zip validation
	if($.trim($('#child_zip').val()).length == 0)
  	{
	   error_child_zip = 'This is required';
	   $('#error_child_zip').text(error_child_zip);
	   $('#child_zip').addClass('has-error');
  	}
  	else
	{
	   error_child_zip = '';
	   $('#error_child_zip').text(error_child_zip);
	   $('#child_zip').removeClass('has-error');
	}


	//home_phone validation
	if($.trim($('#child_home_phone').val()).length == 0)
  	{
	   error_child_home_phone = 'This is required';
	   $('#error_child_home_phone').text(error_child_home_phone);
	   $('#child_home_phone').addClass('has-error');
  	}
  	else
	{
	   error_child_home_phone = '';
	   $('#error_child_home_phone').text(error_child_home_phone);
	   $('#child_home_phone').removeClass('has-error');
	}

	//email validation
	if($.trim($('#child_email').val()).length == 0)
  	{
	   error_child_email = 'This is required';
	   $('#error_child_email').text(error_child_email);
	   $('#child_email').addClass('has-error');
  	}
  	else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#child_email').val()))
  	{
  		error_child_email = '';
	   $('#error_child_email').text(error_child_email);
	   $('#child_email').removeClass('has-error');
  		
  	}
  	else
	{
	   error_child_email = 'Please Enter Valid Email';
	   $('#error_child_email').text(error_child_email);
	   $('#child_email').addClass('has-error');
	}


	error_step_two =  error_child_name + error_child_dob + error_child_home + error_child_city 
		+ error_child_state + error_child_zip + error_child_home_phone + error_child_email;

	if(error_step_two != '')
	{
		$('#second-step').addClass('active');
	   	$('#step-second-cirle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#second-step').removeClass('completed');
	   	$('#second-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#second-step').removeClass('active');
	   $('#second-step').removeClass('warning');
	   $('#step-second-cirle').html('<i class="fas fa-check"></i>');
	   $('#second-step').addClass('completed');
	   $('#third-step').addClass('active');
	}
}



//step 3 validation
function step_three_validation()
{
	var error_emg_contact = '';
	var error_emg_relationship = '';
	var error_emg_phone = '';

	//contact validation
	if($.trim($('#emg_contact').val()).length == 0)
  	{
	   error_emg_contact = 'This field is required';
	   $('#error_emg_contact').text(error_emg_contact);
	   $('#emg_contact').addClass('has-error');
  	}
  	else
	{
	   error_emg_contact = '';
	   $('#error_emg_contact').text(error_emg_contact);
	   $('#emg_contact').removeClass('has-error');
	}

	//relationship validation
	if($.trim($('#emg_relationship').val()).length == 0)
  	{
	   error_emg_relationship = 'This field is required';
	   $('#error_emg_relationship').text(error_emg_relationship);
	   $('#emg_relationship').addClass('has-error');
  	}
  	else
	{
	   error_emg_relationship = '';
	   $('#error_emg_relationship').text(error_emg_relationship);
	   $('#emg_relationship').removeClass('has-error');
	}

	//emg phone
	if($.trim($('#emg_phone').val()).length == 0)
  	{
	   error_emg_phone = 'This field is required';
	   $('#error_emg_phone').text(error_emg_phone);
	   $('#emg_phone').addClass('has-error');
  	}
  	else
	{
	   error_emg_phone = '';
	   $('#error_emg_phone').text(error_emg_phone);
	   $('#emg_phone').removeClass('has-error');
	}

	error_step_third =  error_emg_contact + error_emg_relationship + error_emg_phone;

	if(error_step_third != '' )
	{
	    $('#third-step').addClass('active');
	   	$('#step-third-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#third-step').removeClass('completed');
	   	$('#third-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#third-step').removeClass('active');
	   $('#third-step').removeClass('warning');
	   $('#step-third-circle').html('<i class="fas fa-check"></i>');
	   $('#third-step').addClass('completed');

	   $('#fourth-step').addClass('active');
	}
}


//step four valiidation
function step_four_validation()
{
	var error_race = '';
	var error_ethnicity = '';
	var error_language = '';

	//contact validation
	if($.trim($('#race').val()).length == 0)
  	{
	   error_race = 'This field is required';
	   $('#error_race').text(error_race);
	   $('#race').addClass('has-error');
  	}
  	else
	{
	   error_race = '';
	   $('#error_race').text(error_race);
	   $('#race').removeClass('has-error');
	}


	//emg phone
	if($.trim($('#ethnicity').val()).length == 0)
  	{
	   error_ethnicity = 'This field is required';
	   $('#error_ethnicity').text(error_ethnicity);
	   $('#ethnicity').addClass('has-error');
  	}
  	else
	{
	   error_ethnicity = '';
	   $('#error_ethnicity').text(error_ethnicity);
	   $('#ethnicity').removeClass('has-error');
	}

	//emg phone
	if($.trim($('#language').val()).length == 0)
  	{
	   error_language = 'This field is required';
	   $('#error_language').text(error_language);
	   $('#language').addClass('has-error');
  	}
  	else
	{
	   error_language = '';
	   $('#error_language').text(error_language);
	   $('#language').removeClass('has-error');
	}

	error_step_fourth =  error_race  + error_ethnicity + error_language;

	if(error_step_fourth != '' )
	{
	    $('#fourth-step').addClass('active');
	   	$('#step-fourth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#fourth-step').removeClass('completed');
	   	$('#fourth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#fourth-step').removeClass('active');
	   $('#fourth-step').removeClass('warning');
	   $('#step-fourth-circle').html('<i class="fas fa-check"></i>');
	   $('#fourth-step').addClass('completed');

	   $('#fifth-step').addClass('active');
	}
}



//step five valiidation
function step_five_validation()
{
	var error_marriage_status = '';
	var error_mom_name = '';
	var error_mom_dob = '';
	var error_mom_phone = '';
	var error_mom_ssn = '';
	var error_step_5_sign = ''

	//marriage status validation
	if($('input[name="marriage_status"]:checked').length == 0)
  	{
	   error_marriage_status = 'This field is required';
	   $('#marriage_status').addClass('radio-error');
  	}
  	else
	{
	   error_marriage_status = '';
	   $('#marriage_status').removeClass('radio-error');
	}

	//mom name validation
	if($.trim($('#mom_name').val()).length == 0)
  	{
	   error_mom_name = 'This field is required';
	   $('#error_mom_name').text(error_mom_name);
	   $('#mom_name').addClass('has-error');
  	}
  	else
	{
	   error_mom_name = '';
	   $('#error_mom_name').text(error_mom_name);
	   $('#mom_name').removeClass('has-error');
	}

	//mom dob validation
	if($.trim($('#mom_dob').val()).length == 0)
  	{
	   error_mom_dob = 'This field is required';
	   $('#error_mom_dob').text(error_mom_dob);
	   $('#mom_dob').addClass('has-error');
  	}
  	else
	{
	   error_mom_dob = '';
	   $('#error_mom_dob').text(error_mom_dob);
	   $('#mom_dob').removeClass('has-error');
	}

	//mom phone validation
	if($.trim($('#mom_phone').val()).length == 0)
  	{
	   error_mom_phone = 'This field is required';
	   $('#error_mom_phone').text(error_mom_phone);
	   $('#mom_phone').addClass('has-error');
  	}
  	else
	{
	   error_mom_phone = '';
	   $('#error_mom_phone').text(error_mom_phone);
	   $('#mom_phone').removeClass('has-error');
	}

	//mom ssn validation
	if($.trim($('#mom_ssn').val()).length == 0)
  	{
	   error_mom_ssn = 'This field is required';
	   $('#error_mom_ssn').text(error_mom_ssn);
	   $('#mom_ssn').addClass('has-error');
  	}
  	else
	{
	   error_mom_ssn = '';
	   $('#error_mom_ssn').text(error_mom_ssn);
	   $('#mom_ssn').removeClass('has-error');
	}

	//mom ssn validation
	if($.trim($('#step_5_sign').val()).length == 0)
  	{
	   error_step_5_sign = 'Please Sign Here';
	   $('#error_step_5_sign').text(error_step_5_sign);
	   $('#step_5_sign').addClass('has-error');
  	}
  	else
	{
	   error_step_5_sign = '';
	   $('#error_step_5_sign').text(error_step_5_sign);
	   $('#step_5_sign').removeClass('has-error');
	}

	
	error_step_fifth =  error_marriage_status + error_mom_name + error_mom_dob + error_mom_phone + error_mom_ssn + error_step_5_sign;

	if(error_step_fifth != '' )
	{
	    $('#fifth-step').addClass('active');
	   	$('#step-fifth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#fifth-step').removeClass('completed');
	   	$('#fifth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#fifth-step').removeClass('active');
	   $('#fifth-step').removeClass('warning');
	   $('#step-fifth-circle').html('<i class="fas fa-check"></i>');
	   $('#fifth-step').addClass('completed');
	   $('#sixth-step').addClass('active');
	}
}


//step six valiidation
function step_six_validation()
{
   $('#sixth-step').removeClass('active');
   $('#sixth-step').removeClass('warning');
   $('#step-sixth-circle').html('<i class="fas fa-check"></i>');
   $('#sixth-step').addClass('completed');
   $('#seventh-step').addClass('active');
}


//step seven valiidation
function step_seven_validation()
{
	var error_child_livewith = '';
	var error_any_smoker = '';
	var error_smoker_name = '';
	var error_any_alcohol = '';
	var error_alcohol_name = '';
	var error_any_violence = '';
	var error_violence_situation = '';

	//child live with validation
	if($.trim($('#child_livewith').val()).length == 0)
  	{
	   error_child_livewith = 'This field is required';
	   $('#error_child_livewith').text(error_child_livewith);
	   $('#child_livewith').addClass('has-error');
  	}
  	else
	{
	   error_child_livewith = '';
	   $('#error_child_livewith').text(error_child_livewith);
	   $('#child_livewith').removeClass('has-error');
	}


	//smoker validation
	if($.trim($('#any_smoker').val()).length == 0)
  	{
	   error_any_smoker = 'This field is required';
	   $('#error_any_smoker').text(error_any_smoker);
	   $('#any_smoker').addClass('has-error');
  	}
  	else if($.trim($('#any_smoker').val()) == 'Yes')
  	{
  		error_any_smoker = '';
	    $('#error_any_smoker').text(error_any_smoker);
	    $('#any_smoker').removeClass('has-error');
  		
  		if($.trim($('#smoker_name').val()).length == 0)
	  	{
		   error_smoker_name = 'This field is required';
		   $('#error_smoker_name').text(error_smoker_name);
		   $('#smoker_name').addClass('has-error');
	  	}
	  	else
		{
		   error_smoker_name = '';
		   $('#error_smoker_name').text(error_smoker_name);
		   $('#smoker_name').removeClass('has-error');
		}
  	}
  	else
	{
	   error_any_smoker = '';
	   $('#error_any_smoker').text(error_any_smoker);
	   $('#any_smoker').removeClass('has-error');
	}


	//alcholer validation
	if($.trim($('#any_alcohol').val()).length == 0)
  	{
	   error_any_alcohol = 'This field is required';
	   $('#error_any_alcohol').text(error_any_alcohol);
	   $('#any_alcohol').addClass('has-error');
  	}
  	else if($.trim($('#any_alcohol').val()) == 'Yes')
  	{
  		error_any_alcohol = '';
	    $('#error_any_alcohol').text(error_any_alcohol);
	    $('#any_alcohol').removeClass('has-error');

  		if($.trim($('#alcohol_name').val()).length == 0)
	  	{
		   error_alcohol_name = 'This field is required';
		   $('#error_alcohol_name').text(error_alcohol_name);
		   $('#alcohol_name').addClass('has-error');
	  	}
	  	else
		{
		   error_alcohol_name = '';
		   $('#error_alcohol_name').text(error_alcohol_name);
		   $('#alcohol_name').removeClass('has-error');
		}
  	}
  	else
	{
	   error_any_alcohol = '';
	   $('#error_any_alcohol').text(error_any_alcohol);
	   $('#any_alcohol').removeClass('has-error');
	}

	//violence validation
	if($('input[name="Verbal"]:checked').length != 0 || $('input[name="Physical"]:checked').length != 0 
		|| $('input[name="Sexual"]:checked').length != 0)
  	{
  		if($.trim($('#violence_situation').val()).length == 0)
	  	{
		   error_violence_situation = 'This field is required';
		   $('#error_violence_situation').text(error_violence_situation);
		   $('#violence_situation').addClass('has-error');
	  	}
	  	else
		{
		   error_violence_situation = '';
		   $('#error_violence_situation').text(error_violence_situation);
		   $('#violence_situation').removeClass('has-error');
		}
  	}
	
	error_step_seventh =  error_child_livewith + error_any_smoker+ error_smoker_name + error_any_alcohol + error_alcohol_name + error_violence_situation;

	if(error_step_seventh != '' )
	{
	    $('#seventh-step').addClass('active');
	   	$('#step-seventh-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#seventh-step').removeClass('completed');
	   	$('#seventh-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#seventh-step').removeClass('active');
	   $('#seventh-step').removeClass('warning');
	   $('#step-seventh-circle').html('<i class="fas fa-check"></i>');
	   $('#seventh-step').addClass('completed');
	   $('#eighth-step').addClass('active');
	}
}


//step eight valiidation
function step_eight_validation()
{
	var error_any_medication = '';
	var error_any_allergy = '';

	//medication with validation
	if($.trim($('#any_medication').val()).length == 0)
  	{
	   error_any_medication = 'This field is required';
	   $('#error_any_medication').text(error_any_medication);
	   $('#any_medication').addClass('has-error');
  	}
  	else
	{
	   error_any_medication = '';
	   $('#error_any_medication').text(error_any_medication);
	   $('#any_medication').removeClass('has-error');
	}

	//any_allergy  validation
	if($.trim($('#any_allergy').val()).length == 0)
  	{
	   error_any_allergy = 'This field is required';
	   $('#error_any_allergy').text(error_any_allergy);
	   $('#any_allergy').addClass('has-error');
  	}
  	else
	{
	   error_any_allergy = '';
	   $('#error_any_allergy').text(error_any_allergy);
	   $('#any_allergy').removeClass('has-error');
	}


	error_step_eighth =  error_any_medication + error_any_allergy;

	if(error_step_eighth != '' )
	{
	    $('#eighth-step').addClass('active');
	   	$('#step-eighth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#eighth-step').removeClass('completed');
	   	$('#eighth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#eighth-step').removeClass('active');
	   $('#eighth-step').removeClass('warning');
	   $('#step-eighth-circle').html('<i class="fas fa-check"></i>');
	   $('#eighth-step').addClass('completed');
	   $('#ninth-step').addClass('active');
	}
}


//step ninth valiidation
function step_nine_validation()
{
   $('#ninth-step').removeClass('active');
   $('#ninth-step').removeClass('warning');
   $('#step-ninth-circle').html('<i class="fas fa-check"></i>');
   $('#ninth-step').addClass('completed');
   $('#tenth-step').addClass('active');
}


//step tenth valiidation
function step_ten_validation()
{
   var error_mother_healthy = '';
   var error_explain_mother_health = '';

   var error_father_health = '';
   var error_explain_father_health = '';

   var error_sibling_health = '';
   var error_sibling_explain = '';


	//mother health validation
	if($.trim($('#mother_healthy').val()).length == 0)
  	{
	   error_mother_healthy = 'This field is required';
	   $('#error_mother_healthy').text(error_mother_healthy);
	   $('#mother_healthy').addClass('has-error');
  	}
  	else if($.trim($('#mother_healthy').val()) == 'No')
  	{
  		error_explain_mother_health = '';
	   $('#error_explain_mother_health').text(error_explain_mother_health);
	   $('#explain_mother_health').removeClass('has-error');

  		if($.trim($('#explain_mother_health').val()).length == 0)
	  	{
		   error_explain_mother_health = 'This field is required';
		   $('#error_explain_mother_health').text(error_explain_mother_health);
		   $('#explain_mother_health').addClass('has-error');
	  	}
	  	else
		{
		   error_explain_mother_health = '';
		   $('#error_explain_mother_health').text(error_explain_mother_health);
		   $('#explain_mother_health').removeClass('has-error');
		}
  	}
  	else
	{
	   error_mother_healthy = '';
	   $('#error_mother_healthy').text(error_mother_healthy);
	   $('#mother_healthy').removeClass('has-error');
	}


	//father health validation
	if($.trim($('#father_health').val()).length == 0)
  	{
	   error_father_health = 'This field is required';
	   $('#error_father_health').text(error_father_health);
	   $('#father_health').addClass('has-error');
  	}
  	else if($.trim($('#father_health').val()) == 'No')
  	{
  		error_father_health = '';
	   $('#error_father_health').text(error_father_health);
	   $('#father_health').removeClass('has-error');
	   
  		if($.trim($('#explain_father_health').val()).length == 0)
	  	{
		   error_explain_father_health = 'This field is required';
		   $('#error_explain_father_health').text(error_explain_father_health);
		   $('#explain_father_health').addClass('has-error');
	  	}
	  	else
		{
		   error_explain_father_health = '';
		   $('#error_explain_father_health').text(error_explain_father_health);
		   $('#explain_father_health').removeClass('has-error');
		}
  	}
  	else
	{
	   error_father_health = '';
	   $('#error_father_health').text(error_father_health);
	   $('#father_health').removeClass('has-error');
	}


	//sibling health validation
	if($.trim($('#sibling_health').val()).length == 0)
  	{
	   error_sibling_health = 'This field is required';
	   $('#error_sibling_health').text(error_sibling_health);
	   $('#sibling_health').addClass('has-error');
  	}
  	else if($.trim($('#sibling_health').val()) == 'No')
  	{
  		error_sibling_health = '';
	   $('#error_sibling_health').text(error_sibling_health);
	   $('#sibling_health').removeClass('has-error');
	   
  		if($.trim($('#sibling_explain').val()).length == 0)
	  	{
		   error_sibling_explain = 'This field is required';
		   $('#error_sibling_explain').text(error_sibling_explain);
		   $('#sibling_explain').addClass('has-error');
	  	}
	  	else
		{
		   error_sibling_explain = '';
		   $('#error_sibling_explain').text(error_sibling_explain);
		   $('#sibling_explain').removeClass('has-error');
		}
  	}
  	else
	{
	   error_sibling_health = '';
	   $('#error_sibling_health').text(error_sibling_health);
	   $('#sibling_health').removeClass('has-error');
	}


	error_step_tenth =  error_mother_healthy + error_explain_mother_health + error_father_health 
	+ error_explain_father_health + error_sibling_health + error_sibling_explain;

	if(error_step_tenth != '')
	{
	    $('#tenth-step').addClass('active');
	   	$('#step-tenth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#tenth-step').removeClass('completed');
	   	$('#tenth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#tenth-step').removeClass('active');
	   $('#tenth-step').removeClass('warning');
	   $('#step-tenth-circle').html('<i class="fas fa-check"></i>');
	   $('#tenth-step').addClass('completed');

	   $('#eleventh-step').addClass('active');
	}
}

//step eleventh valiidation
function step_eleven_validation()
{
   $('#eleventh-step').removeClass('active');
   $('#eleventh-step').removeClass('warning');
   $('#step-eleventh-circle').html('<i class="fas fa-check"></i>');
   $('#eleventh-step').addClass('completed');
   $('#tweleth-step').addClass('active');
}


//step tweleve valiidation
function step_tweleve_validation()
{
	var error_assignment_date = '';
	var error_assignment_patient = '';
	var error_assignment_parent = '';
	var error_assignment_group = '';
	var error_assignment_ssn = '';

	var error_assignment_signdate = '';
	var error_assignment_relationship = '';
	var error_assignment_witness = '';
	var error_step_12_sign = '';

	//assignment_date
	if($.trim($('#assignment_date').val()).length == 0)
  	{
	   error_assignment_date = 'This field is required';
	   $('#error_assignment_date').text(error_assignment_date);
	   $('#assignment_date').addClass('has-error');
  	}
  	else
	{
	   error_assignment_date = '';
	   $('#error_assignment_date').text(error_assignment_date);
	   $('#assignment_date').removeClass('has-error');
	}

	//assignment_patient  validation
	if($.trim($('#assignment_patient').val()).length == 0)
  	{
	   error_assignment_patient = 'This field is required';
	   $('#error_assignment_patient').text(error_assignment_patient);
	   $('#assignment_patient').addClass('has-error');
  	}
  	else
	{
	   error_assignment_patient = '';
	   $('#error_assignment_patient').text(error_assignment_patient);
	   $('#assignment_patient').removeClass('has-error');
	}

	//assignment_parent  validation
	if($.trim($('#assignment_parent').val()).length == 0)
  	{
	   error_assignment_parent = 'This field is required';
	   $('#error_assignment_parent').text(error_assignment_parent);
	   $('#assignment_parent').addClass('has-error');
  	}
  	else
	{
	   error_assignment_parent = '';
	   $('#error_assignment_parent').text(error_assignment_parent);
	   $('#assignment_parent').removeClass('has-error');
	}

	//assignment_group  validation
	if($.trim($('#assignment_group').val()).length == 0)
  	{
	   error_assignment_group = 'This field is required';
	   $('#error_assignment_group').text(error_assignment_group);
	   $('#assignment_group').addClass('has-error');
  	}
  	else
	{
	   error_assignment_group = '';
	   $('#error_assignment_group').text(error_assignment_group);
	   $('#assignment_group').removeClass('has-error');
	}

	//assignment_ssn  validation
	if($.trim($('#assignment_ssn').val()).length == 0)
  	{
	   error_assignment_ssn = 'This field is required';
	   $('#error_assignment_ssn').text(error_assignment_ssn);
	   $('#assignment_ssn').addClass('has-error');
  	}
  	else
	{
	   error_assignment_ssn = '';
	   $('#error_assignment_ssn').text(error_assignment_ssn);
	   $('#assignment_ssn').removeClass('has-error');
	}

	//assignment_signdate  validation
	if($.trim($('#assignment_signdate').val()).length == 0)
  	{
	   error_assignment_signdate = 'This field is required';
	   $('#error_assignment_signdate').text(error_assignment_signdate);
	   $('#assignment_signdate').addClass('has-error');
  	}
  	else
	{
	   error_assignment_signdate = '';
	   $('#error_assignment_signdate').text(error_assignment_signdate);
	   $('#assignment_signdate').removeClass('has-error');
	}

	//assignment_relationship  validation
	if($.trim($('#assignment_relationship').val()).length == 0)
  	{
	   error_assignment_relationship = 'This field is required';
	   $('#error_assignment_relationship').text(error_assignment_relationship);
	   $('#assignment_relationship').addClass('has-error');
  	}
  	else
	{
	   error_assignment_relationship = '';
	   $('#error_assignment_relationship').text(error_assignment_relationship);
	   $('#assignment_relationship').removeClass('has-error');
	}

	//assignment_witness  validation
	if($.trim($('#assignment_witness').val()).length == 0)
  	{
	   error_assignment_witness = 'This field is required';
	   $('#error_assignment_witness').text(error_assignment_witness);
	   $('#assignment_witness').addClass('has-error');
  	}
  	else
	{
	   error_assignment_witness = '';
	   $('#error_assignment_witness').text(error_assignment_witness);
	   $('#assignment_witness').removeClass('has-error');
	}

	//step_12_sign  validation
	if($.trim($('#step_12_sign').val()).length == 0)
  	{
	   error_step_12_sign = 'This field is required';
	   $('#error_step_12_sign').text(error_step_12_sign);
	   $('#step_12_sign').addClass('has-error');
  	}
  	else
	{
	   error_step_12_sign = '';
	   $('#error_step_12_sign').text(error_step_12_sign);
	   $('#step_12_sign').removeClass('has-error');
	}


	error_step_tweleth =  error_assignment_date + error_assignment_patient + error_assignment_parent + error_assignment_group
	+ error_assignment_ssn + error_assignment_signdate + error_assignment_relationship + error_assignment_witness + error_step_12_sign;

	if(error_step_tweleth != '' )
	{
	    $('#tweleth-step').addClass('active');
	   	$('#step-tweleth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#tweleth-step').removeClass('completed');
	   	$('#tweleth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#tweleth-step').removeClass('active');
	   $('#tweleth-step').removeClass('warning');
	   $('#step-tweleth-circle').html('<i class="fas fa-check"></i>');
	   $('#tweleth-step').addClass('completed');
	   $('#thirteenth-step').addClass('active');
	}
}


//step thirteen valiidation
function step_thirteen_validation()
{

	var error_finance_checkbox = '';

	var error_finance_parent = '';
	var error_finance_child = '';
	var error_finance_date = '';
	var error_step_13_sign = '';

	if($('input[name="finance_checkbox"]:checked').length == 0)
  	{
	   error_finance_checkbox = 'This field is required';
	   $('#finance_check').addClass('radio-error');
  	}
  	else
	{
	   error_finance_checkbox = '';
	   $('#finance_check').removeClass('radio-error');
	}

	//finance_parent  validation
	if($.trim($('#finance_parent').val()).length == 0)
  	{
	   error_finance_parent = 'This field is required';
	   $('#error_finance_parent').text(error_finance_parent);
	   $('#finance_parent').addClass('has-error');
  	}
  	else
	{
	   error_finance_parent = '';
	   $('#error_finance_parent').text(error_finance_parent);
	   $('#finance_parent').removeClass('has-error');
	}

	//finance_child  validation
	if($.trim($('#finance_child').val()).length == 0)
  	{
	   error_finance_child = 'This field is required';
	   $('#error_finance_child').text(error_finance_child);
	   $('#finance_child').addClass('has-error');
  	}
  	else
	{
	   error_finance_child = '';
	   $('#error_finance_child').text(error_finance_child);
	   $('#finance_child').removeClass('has-error');
	}

	//finance_date  validation
	if($.trim($('#finance_date').val()).length == 0)
  	{
	   error_finance_date = 'This field is required';
	   $('#error_finance_date').text(error_finance_date);
	   $('#finance_date').addClass('has-error');
  	}
  	else
	{
	   error_finance_date = '';
	   $('#error_finance_date').text(error_finance_date);
	   $('#finance_date').removeClass('has-error');
	}


	//step_13_sign  validation
	if($.trim($('#step_13_sign').val()).length == 0)
  	{
	   error_step_13_sign = 'This field is required';
	   $('#error_step_13_sign').text(error_step_13_sign);
	   $('#step_13_sign').addClass('has-error');
  	}
  	else
	{
	   error_step_13_sign = '';
	   $('#error_step_13_sign').text(error_step_13_sign);
	   $('#step_13_sign').removeClass('has-error');
	}


	error_step_thirteenth =  error_finance_checkbox + error_finance_parent 
	+ error_finance_child + error_finance_date + error_step_13_sign;

	if(error_step_thirteenth != '' )
	{
	    $('#thirteenth-step').addClass('active');
	   	$('#step-thirteenth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#thirteenth-step').removeClass('completed');
	   	$('#thirteenth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#thirteenth-step').removeClass('active');
	   $('#thirteenth-step').removeClass('warning');
	   $('#step-thirteenth-circle').html('<i class="fas fa-check"></i>');
	   $('#thirteenth-step').addClass('completed');
	   $('#fourteenth-step').addClass('active');
	}
}


//step fourteen valiidation
function step_fourteen_validation()
{
	var error_health_phoneno = '';
	var error_health_email = '';

	var error_hipaa_6 = '';
	var error_hipaa_7 = '';

	var error_hipaa_patient_name = '';
	var error_hipaa_patient_date = '';
	var error_hipaa_patient_date = '';
	var error_step_14_sign = '';


	//health_phoneno  validation
	if($.trim($('#health_phoneno').val()).length == 0)
  	{
	   error_health_phoneno = 'This field is required';
	   $('#error_health_phoneno').text(error_health_phoneno);
	   $('#health_phoneno').addClass('has-error');
  	}
  	else
	{
	   error_health_phoneno = '';
	   $('#error_health_phoneno').text(error_health_phoneno);
	   $('#health_phoneno').removeClass('has-error');
	}

	//health_email  validation
	if($.trim($('#health_email').val()).length == 0)
  	{
	   error_health_email = 'This field is required';
	   $('#error_health_email').text(error_health_email);
	   $('#health_email').addClass('has-error');
  	}
  	else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#child_email').val()))
  	{
  		error_health_email = '';
	    $('#error_health_email').text(error_health_email);
	    $('#health_email').removeClass('has-error');
  	}
  	else
	{
	   error_health_email = 'Enter Valid Email';
	   $('#error_health_email').text(error_health_email);
	   $('#health_email').addClass('has-error');
	}

	if($('input[name="hipaa_6"]:checked').length == 0)
  	{
	   error_hipaa_6 = 'This field is required';
	   $('#hipaa_6').addClass('radio-error');
  	}
  	else
	{
	   error_hipaa_6 = '';
	   $('#hipaa_6').removeClass('radio-error');
	}

	if($('input[name="hipaa_7"]:checked').length == 0)
  	{
	   error_hipaa_7 = 'This field is required';
	   $('#hipaa_7_label').addClass('radio-error');
  	}
  	else
	{
	   error_hipaa_7 = '';
	   $('#hipaa_7_label').removeClass('radio-error');
	}

	//hipaa_patient_name  validation
	if($.trim($('#hipaa_patient_name').val()).length == 0)
  	{
	   error_hipaa_patient_name = 'This field is required';
	   $('#error_hipaa_patient_name').text(error_hipaa_patient_name);
	   $('#hipaa_patient_name').addClass('has-error');
  	}
  	else
	{
	   error_hipaa_patient_name = '';
	   $('#error_hipaa_patient_name').text(error_hipaa_patient_name);
	   $('#hipaa_patient_name').removeClass('has-error');
	}

	//hipaa_patient_date  validation
	if($.trim($('#hipaa_patient_date').val()).length == 0)
  	{
	   error_hipaa_patient_date = 'This field is required';
	   $('#error_hipaa_patient_date').text(error_hipaa_patient_date);
	   $('#hipaa_patient_date').addClass('has-error');
  	}
  	else
	{
	   error_hipaa_patient_date = '';
	   $('#error_hipaa_patient_date').text(error_hipaa_patient_date);
	   $('#hipaa_patient_date').removeClass('has-error');
	}

	//step_14_sign  validation
	if($.trim($('#step_14_sign').val()).length == 0)
  	{
	   error_step_14_sign = 'This field is required';
	   $('#error_step_14_sign').text(error_step_14_sign);
	   $('#step_14_sign').addClass('has-error');
  	}
  	else
	{
	   error_step_14_sign = '';
	   $('#error_step_14_sign').text(error_step_14_sign);
	   $('#step_14_sign').removeClass('has-error');
	}


	error_step_fourteenth =   error_hipaa_6 + error_hipaa_7 + error_health_phoneno 
	+ error_health_email + error_hipaa_patient_name + error_hipaa_patient_date + error_step_14_sign;

	if(error_step_fourteenth != '' )
	{
	    $('#fourteenth-step').addClass('active');
	   	$('#step-fourteenth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#fourteenth-step').removeClass('completed');
	   	$('#fourteenth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#fourteenth-step').removeClass('active');
	   $('#fourteenth-step').removeClass('warning');
	   $('#step-fourteenth-circle').html('<i class="fas fa-check"></i>');
	   $('#fourteenth-step').addClass('completed');
	   $('#fifteenth-step').addClass('active');
	}
}


//step fifteenth valiidation
function step_fifteen_validation()
{
	var error_consent_patient_name = '';
	var error_consent_patient_date = '';
	var error_consent_relationship = '';
	var error_consent_relationship = '';
	var error_step_15_sign = '';


	//consent_patient_name  validation
	if($.trim($('#consent_patient_name').val()).length == 0)
  	{
	   error_consent_patient_name = 'This field is required';
	   $('#error_consent_patient_name').text(error_consent_patient_name);
	   $('#consent_patient_name').addClass('has-error');
  	}
  	else
	{
	   error_consent_patient_name = '';
	   $('#error_consent_patient_name').text(error_consent_patient_name);
	   $('#consent_patient_name').removeClass('has-error');
	}

	//consent_patient_date  validation
	if($.trim($('#consent_patient_date').val()).length == 0)
  	{
	   error_consent_patient_date = 'This field is required';
	   $('#error_consent_patient_date').text(error_consent_patient_date);
	   $('#consent_patient_date').addClass('has-error');
  	}
  	else
	{
	   error_consent_patient_date = '';
	   $('#error_consent_patient_date').text(error_consent_patient_date);
	   $('#consent_patient_date').removeClass('has-error');
	}

	//consent_relationship  validation
	if($.trim($('#consent_relationship').val()).length == 0)
  	{
	   error_consent_relationship = 'This field is required';
	   $('#error_consent_relationship').text(error_consent_relationship);
	   $('#consent_relationship').addClass('has-error');
  	}
  	else
	{
	   error_consent_relationship = '';
	   $('#error_consent_relationship').text(error_consent_relationship);
	   $('#consent_relationship').removeClass('has-error');
	}


	//step_15_sign  validation
	if($.trim($('#step_15_sign').val()).length == 0)
  	{
	   error_step_15_sign = 'This field is required';
	   $('#error_step_15_sign').text(error_step_15_sign);
	   $('#step_15_sign').addClass('has-error');
  	}
  	else
	{
	   error_step_15_sign = '';
	   $('#error_step_15_sign').text(error_step_15_sign);
	   $('#step_15_sign').removeClass('has-error');
	}


	error_step_fifteenth =   error_consent_patient_name + error_consent_patient_date + error_consent_relationship + error_step_15_sign;

	if(error_step_fifteenth != '' )
	{
	    $('#fifteenth-step').addClass('active');
	   	$('#step-fifteenth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#fifteenth-step').removeClass('completed');
	   	$('#fifteenth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#fifteenth-step').removeClass('active');
	   $('#fifteenth-step').removeClass('warning');
	   $('#step-fifteenth-circle').html('<i class="fas fa-check"></i>');
	   $('#fifteenth-step').addClass('completed');

	   $('#sixteenth-step').addClass('active');
	}
}

//step sixteenth valiidation
function step_sixteen_validation()
{
   var error_auth_patient_name = '';
	var error_auth_patient_dob = '';
	var error_auth_patient_ssn = '';
	var error_ac_1 = '';
	var error_ac_2 = '';
	var error_ac_3 = '';
	var error_auth_sign_date = '';


	//auth_patient_name  validation
	if($.trim($('#auth_patient_name').val()).length == 0)
  	{
	   error_auth_patient_name = 'This field is required';
	   $('#error_auth_patient_name').text(error_auth_patient_name);
	   $('#auth_patient_name').addClass('has-error');
  	}
  	else
	{
	   error_auth_patient_name = '';
	   $('#error_auth_patient_name').text(error_auth_patient_name);
	   $('#auth_patient_name').removeClass('has-error');
	}

	//auth_patient_dob  validation
	if($.trim($('#auth_patient_dob').val()).length == 0)
  	{
	   error_auth_patient_dob = 'This field is required';
	   $('#error_auth_patient_dob').text(error_auth_patient_dob);
	   $('#auth_patient_dob').addClass('has-error');
  	}
  	else
	{
	   error_auth_patient_dob = '';
	   $('#error_auth_patient_dob').text(error_auth_patient_dob);
	   $('#auth_patient_dob').removeClass('has-error');
	}

	//auth_patient_ssn  validation
	if($.trim($('#auth_patient_ssn').val()).length == 0)
  	{
	   error_auth_patient_ssn = 'This field is required';
	   $('#error_auth_patient_ssn').text(error_auth_patient_ssn);
	   $('#auth_patient_ssn').addClass('has-error');
  	}
  	else
	{
	   error_auth_patient_ssn = '';
	   $('#error_auth_patient_ssn').text(error_auth_patient_ssn);
	   $('#auth_patient_ssn').removeClass('has-error');
	}

	if($('input[name="ac_1_1"]:checked').length == 0 && $('input[name="ac_1_2"]:checked').length == 0 &&
		$('input[name="ac_1_3"]:checked').length == 0 && $('input[name="ac_1_4"]:checked').length == 0 && 
		$('input[name="ac_1_5"]:checked').length == 0)
	{
	   error_ac_1 = 'Please Select Atleast One';
	   $('#error_ac_1').text(error_ac_1);
  	}
  	else
	{
	   error_ac_1 = '';
	   $('#error_ac_1').text(error_ac_1);
	}


	if($('input[name="ac_2_1"]:checked').length == 0 && $('input[name="ac_2_2"]:checked').length == 0 &&
		$('input[name="ac_2_3"]:checked').length == 0 && $('input[name="ac_2_4"]:checked').length == 0 && 
		$('input[name="ac_2_5"]:checked').length == 0 && 
		$('input[name="ac_2_6"]:checked').length == 0)
	{
	   error_ac_2 = 'Please Select Atleast One';
	   $('#error_ac_2').text(error_ac_2);
  	}
  	else
	{
	   error_ac_2 = '';
	   $('#error_ac_2').text(error_ac_2);
	}


	if($('input[name="ac_3_1"]:checked').length == 0 && $('input[name="ac_3_2"]:checked').length == 0 &&
		$('input[name="ac_3_3"]:checked').length == 0 && $('input[name="ac_3_4"]:checked').length == 0 && 
		$('input[name="ac_3_5"]:checked').length == 0)
	{
	   error_ac_3 = 'Please Select Atleast One';
	   $('#error_ac_3').text(error_ac_3);
  	}
  	else
	{
	   error_ac_3 = '';
	   $('#error_ac_3').text(error_ac_3);
	}

	//auth_sign_date  validation
	if($.trim($('#auth_sign_date').val()).length == 0)
  	{
	   error_auth_sign_date = 'This field is required';
	   $('#error_auth_sign_date').text(error_auth_sign_date);
	   $('#auth_sign_date').addClass('has-error');
  	}
  	else
	{
	   error_auth_sign_date = '';
	   $('#error_auth_sign_date').text(error_auth_sign_date);
	   $('#auth_sign_date').removeClass('has-error');
	}

	error_step_sixteenth = error_auth_patient_name + error_auth_patient_dob + error_auth_patient_ssn + error_ac_1 + error_ac_2 + error_ac_3
	+ error_auth_sign_date;

	if(error_step_sixteenth != '' )
	{
	    $('#sixteenth-step').addClass('active');
	   	$('#step-sixteenth-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#sixteenth-step').removeClass('completed');
	   	$('#sixteenth-step').addClass('warning');
	    return false;
	}
	else
	{
	   $('#sixteenth-step').removeClass('active');
	   $('#sixteenth-step').removeClass('warning');
	   $('#step-sixteenth-circle').html('<i class="fas fa-check"></i>');
	   $('#sixteenth-step').addClass('completed');
	   $('#finish-step').addClass('active');
	}
}




//to go step 2 functions
$("#next_step2").click(function(){
	step_one_validation();
});

// to go back to step 1
$("#prev_step1").click(function(){
	step_one_validation();
	$('#first-step').addClass('active');
	$('#second-step').removeClass('active');
});

// to go to step 3
$("#next_step3").click(function(){
	step_two_validation();
});

//to go back to step 2
$("#prev_step2").click(function(){
	$('#second-step').addClass('active');
	$('#third-step').removeClass('active');
});


// to goto step 4
$("#next_step4").click(function(){
	step_three_validation();
});

//to go backto step 3
$("#prev_step3").click(function(){
	$('#first-step').addClass('active');
	$('#second-step').removeClass('active');
});


//to go to step 5
$("#next_step5").click(function(){
	step_four_validation();
});

//to go to step 3 from 4
$("#prev_step3").click(function(){
	$('#third-step').addClass('active');
	$('#fourth-step').removeClass('active');
});


//to go to step 6
$("#next_step6").click(function(){
	step_five_validation();
});

//to go to step 4 from 5
$("#prev_step4").click(function(){
	$('#fourth-step').addClass('active');
	$('#fifth-step').removeClass('active');
});

//to go to step 7
$("#next_step7").click(function(){
	step_six_validation();
});

//to go to step 5 from 6
$("#prev_step5").click(function(){
	$('#fifth-step').addClass('active');
	$('#sixth-step').removeClass('active');
});


//to go to step 8
$("#next_step8").click(function(){
	step_seven_validation();
});

//to go to step 6 from 7
$("#prev_step6").click(function(){
	$('#sixth-step').addClass('active');
	$('#seventh-step').removeClass('active');
});

//to go to step 9
$("#next_step9").click(function(){
	step_eight_validation();
});

//to go to step 7 from 8
$("#prev_step7").click(function(){
	$('#seventh-step').addClass('active');
	$('#eighth-step').removeClass('active');
});

//to go to step 10
$("#next_step10").click(function(){
	step_nine_validation();
});

//to go to step 8 from 9
$("#prev_step8").click(function(){
	$('#eighth-step').addClass('active');
	$('#ninth-step').removeClass('active');
});


//to go to step 11
$("#next_step11").click(function(){
	step_ten_validation();
});

//to go to step 8 from 9
$("#prev_step9").click(function(){
	$('#ninth-step').addClass('active');
	$('#tenth-step').removeClass('active');
});


//to go to step 12
$("#next_step12").click(function(){
	step_eleven_validation();
});

//to go to step 10 from 11
$("#prev_step10").click(function(){
	$('#tenth-step').addClass('active');
	$('#eleventh-step').removeClass('active');
});


//to go to step 13
$("#next_step13").click(function(){
	step_tweleve_validation();
});
//to go to step 11 from 12
$("#prev_step11").click(function(){
	$('#eleventh-step').addClass('active');
	$('#tweleth-step').removeClass('active');
});


//to go to step 14
$("#next_step14").click(function(){
	step_thirteen_validation();
});
//to go to step 12 from 13
$("#prev_step12").click(function(){
	$('#tweleth-step').addClass('active');
	$('#thirteen-step').removeClass('active');
});


//to go to step 15
$("#next_step15").click(function(){
	step_fourteen_validation();
});
//to go to step 12 from 13
$("#prev_step13").click(function(){
	$('#thirteenth-step').addClass('active');
	$('#fourteenth-step').removeClass('active');
});

//to go to step 16
$("#next_step16").click(function(){
	step_fifteen_validation();
});
//to go to step 14 from 15
$("#prev_step14").click(function(){
	$('#fourteenth-step').addClass('active');
	$('#fifteenth-step').removeClass('active');
});

//to go to step 17
$("#next_step17").click(function(){
	step_sixteen_validation();
});
//to go to step 15 from 16
$("#prev_step16").click(function(){
	$('#fifteenth-step').addClass('active');
	$('#fourteenth-step').removeClass('active');
});








// last finish step
$("#btn-finish").click(function() {
	error = error_step_one + error_step_two + error_step_third + error_step_fourth 
	+ error_step_fifth + error_step_seventh + error_step_eighth 
	+ error_step_tenth + error_step_tweleth 
	+ error_step_thirteenth + error_step_fourteenth + error_step_fifteenth + error_step_sixteenth;

	var error_final_patient_name = '';
	var error_final_legal_rep = '';
	var error_final_relationship = '';
	var error_final_sign = '';


	//final_patient_name  validation
	if($.trim($('#final_patient_name').val()).length == 0)
  	{
	   error_final_patient_name = 'This field is required';
	   $('#error_final_patient_name').text(error_final_patient_name);
	   $('#final_patient_name').addClass('has-error');
  	}
  	else
	{
	   error_final_patient_name = '';
	   $('#error_final_patient_name').text(error_final_patient_name);
	   $('#final_patient_name').removeClass('has-error');
	}

	//final_legal_rep  validation
	if($.trim($('#final_legal_rep').val()).length == 0)
  	{
	   error_final_legal_rep = 'This field is required';
	   $('#error_final_legal_rep').text(error_final_legal_rep);
	   $('#final_legal_rep').addClass('has-error');
  	}
  	else
	{
	   error_final_legal_rep = '';
	   $('#error_final_legal_rep').text(error_final_legal_rep);
	   $('#final_legal_rep').removeClass('has-error');
	}

	//final_relationship  validation
	if($.trim($('#final_relationship').val()).length == 0)
  	{
	   error_final_relationship = 'This field is required';
	   $('#error_final_relationship').text(error_final_relationship);
	   $('#final_relationship').addClass('has-error');
  	}
  	else
	{
	   error_final_relationship = '';
	   $('#error_final_relationship').text(error_final_relationship);
	   $('#final_relationship').removeClass('has-error');
	}

	//final_relationship  validation
	if($.trim($('#final_sign').val()).length == 0)
  	{
	   error_final_sign = 'This field is required';
	   $('#error_final_sign').text(error_final_sign);
	   $('#final_sign').addClass('has-error');
  	}
  	else
	{
	   error_final_sign = '';
	   $('#error_final_sign').text(error_final_sign);
	   $('#final_sign').removeClass('has-error');
	}


	error_step_final = error_final_patient_name + error_final_legal_rep + error_final_relationship + error_final_sign;

	if(error_step_final != '')
	{
	    $('#finish-step').addClass('active');
	   	$('#step-finish-circle').html('<i class="fas fa-exclamation-triangle"></i>');
	   	$('#finish-step').removeClass('completed');
	   	$('#finish-step').addClass('warning');
	    return false;
	}
	else if(error == '')
	{
	   alert('good');
	}
	else
	{
		alert('Your form have the errors');
		event.preventDefault();

		step_one_validation();
		step_two_validation();
		step_three_validation();
		step_four_validation();
		step_five_validation();
		step_six_validation();
		step_seven_validation();
		step_eight_validation();
		step_nine_validation();
		step_ten_validation();
		step_eleven_validation();
		step_tweleve_validation();
		step_thirteen_validation();
		step_fourteen_validation();
		step_fifteen_validation();
		step_sixteen_validation();
	}
});

