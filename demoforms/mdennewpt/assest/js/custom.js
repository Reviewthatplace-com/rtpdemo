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