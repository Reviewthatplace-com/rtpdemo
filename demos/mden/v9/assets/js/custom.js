$(document).ready(function(){
  $('#section1a').css({'display':'block'});
})

// button functionality
function saveExit(){
  document.getElementById('registration-section').style.display='none';
  document.getElementById('progress').style.display='none';
  document.getElementById('confirmation').style.display='block';
  document.getElementById('confirm1').style.display='none';
  document.getElementById('confirm3').style.display='block';
}

function letStart(){
  document.getElementById('confirmation').style.display='none';
  document.getElementById('confirm3').style.display='none';
  document.getElementById('section1d').style.display='block';
}

function doLater(){
  document.getElementById('confirm3').style.display='none';
  document.getElementById('confirm2').style.display='block';
}

function nextStep(){
  document.getElementById('confirm1').style.display='none';
  document.getElementById('confirm2').style.display='block';
  document.getElementById('progress').style.display='none';
}

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
  document.getElementById('registration-section').style.display='block';
}

function findSaved2(){
  document.getElementById('section1d').style.display='none';
  document.getElementById('progress').style.display='block';
  document.getElementById('registration-section').style.display='block';
}

function submitForm(){
  document.getElementById('registration-section').style.display='none';
  document.getElementById('confirmation').style.display='block';
  document.getElementById('confirm1').style.display='block';
}


// checkbox turn to green

$(document).ready(function(){
  $(".form-radio").click(function(){
    $(this).children(".required-label").removeClass("required-label");
    $(this).siblings().children(".radiolabel").addClass("checkbox-yellow");
  })
  $(".form-checkbox").click(function(){
    $(this).children(".required-label").removeClass("required-label");
    $(this).siblings().children(".checklabel").addClass("checkbox-yellow");
  })
})

$(document).ready(function(){
  $(".required-label").click(function(){
    $(this).removeClass("checkbox-yellow")
  })
})


// floating labels

$('.floating-labels .form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

// For Custom File Input
    $('.custom-file-input').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

// border color change on data filling

$('.required').on('keyup', function (ev) {
    $(this).toggleClass('green-border', !!$(this).val().trim());
});

$('.optional').on('keyup', function (ev) {
    $(this).toggleClass('green-border', !!$(this).val().trim());
});

$('.required').on('change', function (ev) {
    $(this).toggleClass('green-border', !!$(this).val().trim());
});

$('.required-upload').on('change', function (ev) {
    $(this).toggleClass('upload-green-border', !!$(this).val().trim());
});

// Tooltips Initialization
 $(function () {
   $('[data-toggle="tooltip"]').tooltip()
 })

 $("[title]").tooltip({
        placement: 'bottom',
  delay: { "show": 500, "hide": 100 },
  offset: '0 10',
  boundary: 'window',
  template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
});



//language function

 function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}

/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */


