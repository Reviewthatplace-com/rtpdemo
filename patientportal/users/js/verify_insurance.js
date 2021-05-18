$(function(){

	/* -------- get payer list and set to select ---------*/
		var insurance_provider=$("#insurance_provider");// html select id

		// ajax request
 		$.ajax({
 			type: "GET",
 			url: "/api/insurance/get_all_prayer",
 			dataType: "json",
 			success: function(data)
 			{
				var option=$("<option></option").attr({value:'',select:''}).text("Select");
				insurance_provider.append(option);

 				$.each(data,function(index,value){
 					if(value.isSupportingEligibility)
 					{
 						var optionvalue = { payerName: value.payerName, payerCode: value.payerCode};
 						var myJSON = JSON.stringify(optionvalue);
 						
 						var option=$("<option></option").attr({value:myJSON}).text(value.payerName);
 						insurance_provider.append(option);
 					}
 				});

 				// prayer list loaded into html select

 			}
 		});
});
