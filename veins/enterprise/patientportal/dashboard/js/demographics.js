$("#selectInsurance").on("change", function() {     
            if($(this).val() === "mineNotListed")
            {
                $(".notListedSection").show();
            }
            else
            {
                $(".notListedSection").hide();
            }
        });


        $("#selectSecondaryInsurance").on("change", function() {     
            if($(this).val() === "mineNotListed")
            {
                $(".notListedSectionSecondary").show();
            }
            else
            {
                $(".notListedSectionSecondary").hide();
            }
        });

    $("#planNameSelect").on("change", function() {     
        if($(this).val() === "mineNotListed")
        {
            $("#notListedPlan").show();
        }
        else
        {
            $("#notListedPlan").hide();
        }
    });

    $('input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea').each(function (element, i) {
    if ((element.value !== undefined && element.value.length > 0) || $(this).attr('placeholder') !== null) {
        $(this).siblings('label').addClass('active');
    }
    else {
        $(this).siblings('label').removeClass('active');
    }
});