$(document).ready(function(){
  $('#section1a').css({'display':'block'});
  $('[data-toggle="tooltip"]').tooltip();
})

$("[title]").tooltip({
  delay: { "show": 500, "hide": 100 },
  offset: '0 10',
  boundary: 'window',
  template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
});

// button functionality

function startNew(){
  document.getElementById('section1a').style.display='none';
  document.getElementById('section1b').style.display='block';
}

function findSaved1(){
  document.getElementById('section1a').style.display='none';
  document.getElementById('section1d').style.display='block';
}

function nextBtn1(){
  document.getElementById('section1b').style.display='none';
  document.getElementById('section1c').style.display='block';
}

function nextBtn2(){
  document.getElementById('section1c').style.display='none';
  document.getElementById('progress').style.display='block';
  document.getElementById('pricing').style.display='block';
}

function findSaved2(){
  document.getElementById('section1d').style.display='none';
  document.getElementById('progress').style.display='block';
  document.getElementById('section2').style.display='block';
}

function letsBuild1(){
  document.getElementById('pricing').style.display='none';
  document.getElementById('section2').style.display='block';
}

function letsBuild2(){
  document.getElementById('pricing').style.display='none';
  document.getElementById('section2').style.display='block';
}

function letsBuild3(){
  document.getElementById('pricing').style.display='none';
  document.getElementById('section2').style.display='block';
}

function previousStep2(){
  document.getElementById('section2').style.display='none';
  document.getElementById('pricing').style.display='block';
}

function continueStep2(){
  document.getElementById('section2').style.display='none';
  document.getElementById('section3').style.display='block';
}

function previousStep3(){
  document.getElementById('section3').style.display='none';
  document.getElementById('section2').style.display='block';
}

function continueStep3(){
  document.getElementById('section3').style.display='none';
  document.getElementById('section4').style.display='block';
}

function previousStep4(){
  document.getElementById('section4').style.display='none';
  document.getElementById('section3').style.display='block';
}

function continueStep4(){
  document.getElementById('section4').style.display='none';
  document.getElementById('section5').style.display='block';
}

function previousStep5(){
  document.getElementById('section5').style.display='none';
  document.getElementById('section4').style.display='block';
}

function continueStep5(){
  document.getElementById('section5').style.display='none';
  document.getElementById('section6').style.display='block';
}

function previousStep6(){
  document.getElementById('section6').style.display='none';
  document.getElementById('section5').style.display='block';
}

function continueStep6(){
  document.getElementById('section6').style.display='none';
  document.getElementById('section7').style.display='block';
}

function previousStep7(){
  document.getElementById('section7').style.display='none';
  document.getElementById('section6').style.display='block';
}

function continueStep7(){
  document.getElementById('section7').style.display='none';
  document.getElementById('section8a').style.display='block';
}

function previousStep8a(){
  document.getElementById('section8a').style.display='none';
  document.getElementById('section7').style.display='block';
}

function continueStep8a(){
  document.getElementById('section8a').style.display='none';
  document.getElementById('section8b').style.display='block';
}

function previousStep8b(){
  document.getElementById('section8b').style.display='none';
  document.getElementById('section8a').style.display='block';
}

function continueStep8b(){
  document.getElementById('section8b').style.display='none';
  document.getElementById('section8c').style.display='block';
}

function previousStep8c(){
  document.getElementById('section8c').style.display='none';
  document.getElementById('section8b').style.display='block';
}

function continueStep8c(){
  document.getElementById('section8c').style.display='none';
  document.getElementById('section8d').style.display='block';
}

function previousStep8d(){
  document.getElementById('section8d').style.display='none';
  document.getElementById('section8c').style.display='block';
}

function continueStep8d(){
  document.getElementById('section8d').style.display='none';
  document.getElementById('section8e').style.display='block';
}

function previousStep8e(){
  document.getElementById('section8e').style.display='none';
  document.getElementById('section8d').style.display='block';
}

function continueStep8e(){
  document.getElementById('section8e').style.display='none';
  document.getElementById('section8f').style.display='block';
}

function previousStep8f(){
  document.getElementById('section8f').style.display='none';
  document.getElementById('section8e').style.display='block';
}

function continueStep8f(){
  document.getElementById('section8f').style.display='none';
  document.getElementById('section9').style.display='block';
}

function previousStep9(){
  document.getElementById('section9').style.display='none';
  document.getElementById('section8f').style.display='block';
}

function continueStep9(){
  document.getElementById('section9').style.display='none';
  document.getElementById('section10').style.display='block';
}

function previousStep10(){
  document.getElementById('section10').style.display='none';
  document.getElementById('section9').style.display='block';
}

function continueStep10(){
  document.getElementById('section10').style.display='none';
  document.getElementById('section11').style.display='block';
}

function previousStep11(){
  document.getElementById('section11').style.display='none';
  document.getElementById('section10').style.display='block';
}

function continueStep11(){
  document.getElementById('section11').style.display='none';
  document.getElementById('section12').style.display='block';
}

function previousStep12(){
  document.getElementById('section12').style.display='none';
  document.getElementById('section11').style.display='block';
}

$('.required').on('keyup', function (ev) {
    $(this).toggleClass('green', !!$(this).val().trim());
});

$('.optional').on('keyup', function (ev) {
    $(this).toggleClass('green', !!$(this).val().trim());
});

$('.required').on('change', function (ev) {
    $(this).toggleClass('green', !!$(this).val().trim());
});

$('.optional').on('change', function (ev) {
    $(this).toggleClass('green', !!$(this).val().trim());
});
// .siblings().removeClass("active")
//Basic info - Domain purchase: yes Response
function doMain() {
  var x = document.getElementById("domain");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Basic info - SSL Certificate: yes Response
function ssL() {
  var x = document.getElementById("ssl");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Top-section - Company logo: Response
function loGo() {
  var x = document.getElementById("companylogo");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Provide A Company Logo - Favicon: No Response
function faviCon() {
  var x = document.getElementById("favicon");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Top-section - Banner: Response
function baNner() {
  var x = document.getElementById("banner");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Top-section - freepik 
function freePik() {
  var x = document.getElementById("freepik");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Top-section - call to action 
function callAction() {
  var x = document.getElementById("callaction");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - Request Forms: email Response
function reqEmail() {
  var x = document.getElementById("reqemail");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - Request Forms: fax Response
function reqFax() {
  var x = document.getElementById("reqfax");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - Request Forms: documentation type
function docType() {
  var x = document.getElementById("doctype");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - Request Forms: documentation type
function collectType() {
  var x = document.getElementById("collecttype");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - New Patient Forms: No Response
function newpt() {
  var x = document.getElementById("newpt");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - New Patient Forms: email Response
function nptEmail() {
  var x = document.getElementById("nptemail");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - New Patient Forms: fax Response
function nptFax() {
  var x = document.getElementById("nptfax");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - New Patient Forms: digitize
function digitizeNewpt() {
  var x = document.getElementById("digitizenewpt");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - Submit demo: insurance list
function insuranceList() {
  var x = document.getElementById("insurancelist");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - Submit demo: email Response
function demoEmail() {
  var x = document.getElementById("demoemail");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - Submit demo: fax Response
function demoFax() {
  var x = document.getElementById("demofax");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - book appointment -- appointment type
function aptType() {
  var x = document.getElementById("apttype");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - book appointment -- email
function aptEmail() {
  var x = document.getElementById("aptemail");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - book appointment -- fax
function aptFax() {
  var x = document.getElementById("aptfax");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


//Patient Resource Center - book appointment -- operational hours
function operHours() {
  var x = document.getElementById("operhours");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - autherization -- usertpform
function autherForm() {
  var x = document.getElementById("autherform");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - autherization -- email
function authEmail() {
  var x = document.getElementById("authemail");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - autherization -- fax
function authFax() {
  var x = document.getElementById("authfax");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//Patient Resource Center - autherization -- fax
function digitizeAuthpt() {
  var x = document.getElementById("digitizeauthpt");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}