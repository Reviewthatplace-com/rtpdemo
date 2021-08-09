// Setup the calendar with the current date
$(document).ready(function(){
    var date = new Date();
    var today = date.getDate();
    // Set click handlers for DOM elements
    $(".right-button").click({date: date}, next_year);
    $(".left-button").click({date: date}, prev_year);
    $(".month").click({date: date}, month_click);
    $("#add-button").click({date: date}, new_event);
    // Set current month as active
    $(".months-row").children().eq(date.getMonth()).addClass("active-month");
    init_calendar(date);
    var events = check_events(today, date.getMonth()+1, date.getFullYear());
    show_events(events, months[date.getMonth()], today);
});

// Initialize the calendar by appending the HTML dates
function init_calendar(date) {
    $(".tbody").empty();
    $(".events-container").empty();
    var calendar_days = $(".tbody");
    var month = date.getMonth();
    var year = date.getFullYear();
    var day_count = days_in_month(month, year);
    var row = $("<tr class='table-row'></tr>");
    var today = date.getDate();
    // Set date to 1 to find the first day of the month
    date.setDate(1);
    var first_day = date.getDay();
    // 35+firstDay is the number of date elements to be added to the dates table
    // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
    for(var i=0; i<35+first_day; i++) {
        // Since some of the elements will be blank, 
        // need to calculate actual date from index
        var day = i-first_day+1;
        // If it is a sunday, make a new row
        if(i%7===0) {
            calendar_days.append(row);
            row = $("<tr class='table-row'></tr>");
        }
        // if current index isn't a day in this month, make it blank
        if(i < first_day || day > day_count) {
            var curr_date = $("<td class='table-date nil'>"+"</td>");
            row.append(curr_date);
        }   
        else {
            var curr_date = $("<td class='table-date'>"+day+"</td>");
            var events = check_events(day, month+1, year);
            if(today===day && $(".active-date").length===0) {
                curr_date.addClass("active-date");
                show_events(events, months[month], day);
            }
            // If this date has any events, style it with .event-date
            if(events.length!==0) {
                curr_date.addClass("event-date");
            }
            // Set onClick handler for clicking a date
            curr_date.click({events: events, month: months[month], day:day}, date_click);
            row.append(curr_date);
        }
    }
    // Append the last row and set the current year
    calendar_days.append(row);
    $(".year").text(year);
}

// Get the number of days in a given month/year
function days_in_month(month, year) {
    var monthStart = new Date(year, month, 1);
    var monthEnd = new Date(year, month + 1, 1);
    return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);    
}

// Event handler for when a date is clicked
function date_click(event) {
    $(".events-container").show(250);
    $("#dialog").hide(250);
    $(".active-date").removeClass("active-date");
    $(this).addClass("active-date");
    show_events(event.data.events, event.data.month, event.data.day);
};

// Event handler for when a month is clicked
function month_click(event) {
    $(".events-container").show(250);
    $("#dialog").hide(250);
    var date = event.data.date;
    $(".active-month").removeClass("active-month");
    $(this).addClass("active-month");
    var new_month = $(".month").index(this);
    date.setMonth(new_month);
    init_calendar(date);
}

// Event handler for when the year right-button is clicked
function next_year(event) {
    $("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()+1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    init_calendar(date);
}

// Event handler for when the year left-button is clicked
function prev_year(event) {
    $("#dialog").hide(250);
    var date = event.data.date;
    var new_year = date.getFullYear()-1;
    $("year").html(new_year);
    date.setFullYear(new_year);
    init_calendar(date);
}

// Event handler for clicking the new event button
function new_event(event) {
    // if a date isn't selected then do nothing
    if($(".active-date").length===0)
        return;
    // remove red error input on click
    $("input").click(function(){
        $(this).removeClass("error-input");
    })
    // empty inputs and hide events
    $("#dialog input[type=text]").val('');
    $("#dialog input[type=number]").val('');
    $(".events-container").hide(250);
    $("#dialog").show(250);
    // Event handler for cancel button
    $("#cancel-button").click(function() {
        $("#name").removeClass("error-input");
        $("#count").removeClass("error-input");
        $("#dialog").hide(250);
        $(".events-container").show(250);
    });
    // Event handler for ok button
    $("#ok-button").unbind().click({date: event.data.date}, function() {
        var date = event.data.date;
        var name = $("#name").val().trim();
        var count = parseInt($("#count").val().trim());
        var day = parseInt($(".active-date").html());
        // Basic form validation
        if(name.length === 0) {
            $("#name").addClass("error-input");
        }
        else if(isNaN(count)) {
            $("#count").addClass("error-input");
        }
        else {
            $("#dialog").hide(250);
            console.log("new event");
            new_event_json(name, count, date, day);
            date.setDate(day);
            init_calendar(date);
        }
    });
}

// Adds a json event to event_data
function new_event_json(name, count, date, day) {
    var event = {
        "occasion": name,
        "invited_count": count,
        "year": date.getFullYear(),
        "month": date.getMonth()+1,
        "day": day
    };
    event_data["events"].push(event);
}

// Display all events of the selected date in card views
function show_events(events, month, day) {
    // Clear the dates container
    $(".events-container").empty();
    $(".events-container").show(250);
    console.log(event_data["events"]);
    // If there are no events for this date, notify the user
    if(events.length===0) {
        var event_card = $("<div class='event-card'></div>");
        var event_name = $("<div class='event-name'>There are no events planned for "+month+" "+day+".</div>");
        $(event_card).css({ "border-left": "10px solid #FF1744" });
        $(event_card).append(event_name);
        $(".events-container").append(event_card);
    }
    else {
        // Go through and add each event as a card to the events container
        for(var i=0; i<events.length; i++) {
            var event_card = $("<div class='event-card'></div>");
            var event_name = $("<div class='event-name'>"+events[i]["occasion"]+":</div>");
            var event_count = $("<div class='event-count'>"+events[i]["invited_count"]+" Invited</div>");
            if(events[i]["cancelled"]===true) {
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                event_count = $("<div class='event-cancelled'>Cancelled</div>");
            }
            $(event_card).append(event_name).append(event_count);
            $(".events-container").append(event_card);
        }
    }
}

// Checks if a specific date has any events
function check_events(day, month, year) {
    var events = [];
    for(var i=0; i<event_data["events"].length; i++) {
        var event = event_data["events"][i];
        if(event["day"]===day &&
            event["month"]===month &&
            event["year"]===year) {
                events.push(event);
            }
    }
    return events;
}

// Given data for events in JSON format
var event_data = {
    "events": [
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
        {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10,
        "cancelled": true
    },
    {
        "occasion": " Repeated Test Event ",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 10
    },
    {
        "occasion": " Test Event",
        "invited_count": 120,
        "year": 2017,
        "month": 5,
        "day": 11
    }
    ]
};

const months = [ 
    "January", 
    "February", 
    "March", 
    "April", 
    "May", 
    "June", 
    "July", 
    "August", 
    "September", 
    "October", 
    "November", 
    "December" 
];


// BookAppointments Steps Start
  $(document).ready(function(){
   $('#rastep1').css({'display':'block'});
   $("#rasteponenext").click(function(){
    $('#rastep1').css({'display':'none'});
    $('#rastep2').css({'display':'block'});
  });
  $("#rasteptwoback").click(function(){
    $('#rastep2').css({'display':'none'});
    $('#rastep1').css({'display':'block'});
  });
  $("#rasteptwonext").click(function(){
    $('#rastep2').css({'display':'none'});
    $('#rastep3').css({'display':'block'});
    $('#rastep0').css({'display':'none'});
  });
  $("#rastepthreeback").click(function(){
    $('#rastep3').css({'display':'none'});
    $('#rastep2').css({'display':'block'});
    $('#rastep0').css({'display':'block'});
  });
  $("#rastepthreenext").click(function(){
    $('#rastep3').css({'display':'none'});
    $('#rastep4').css({'display':'block'});
  });
  $("#rastepfourback").click(function(){
    $('#rastep4').css({'display':'none'});
    $('#rastep3').css({'display':'block'});
  });
  $("#rastepfournext").click(function(){
    $('#rastep4').css({'display':'none'});
    $('#rastep5').css({'display':'block'});
  });
  $("#rastepfiveback").click(function(){
    $('#rastep5').css({'display':'none'});
    $('#rastep4').css({'display':'block'});
  });
  $("#rastepfivenext").click(function(){
    $('#rastep5').css({'display':'none'});
    $('#rastep6').css({'display':'block'});
  });
  $("#rastepsixback").click(function(){
    $('#rastep6').css({'display':'none'});
    $('#rastep5').css({'display':'block'});
  });
  $("#rastepsevennext").click(function(){
    $('#rastep6').css({'display':'none'});
    $('#rastep7').css({'display':'block'});
  });
  $("#rastepsevenback").click(function(){
    $('#rastep7').css({'display':'none'});
    $('#rastep6').css({'display':'block'});
  });
  $("#rastepeightnext").click(function(){
    $('#rastep7').css({'display':'none'});
    $('#rastep8').css({'display':'block'});
  });
  $("#rastepeightback").click(function(){
    $('#rastep8').css({'display':'none'});
    $('#rastep7').css({'display':'block'});
  });
  })
// BookAppointments Steps End

// RequestForm Steps Start
  $(document).ready(function(){
    $('#rfstep1').css({'display':'block'});
    $("#rfsteponenext").click(function(){
    $('#rfstep1').css({'display':'none'});
    $('#rfstep2').css({'display':'block'});
  });
  $("#rfsteptwoback").click(function(){
    $('#rfstep2').css({'display':'none'});
    $('#rfstep1').css({'display':'block'});
  });
  $("#rfsteptwonext").click(function(){
    $('#rfstep2').css({'display':'none'});
    $('#rfstep3').css({'display':'block'});
  });
  $("#rfstepthreeback").click(function(){
    $('#rfstep3').css({'display':'none'});
    $('#rfstep2').css({'display':'block'});
  });
  $("#rfstepthreenext").click(function(){
    $('#rfstep3').css({'display':'none'});
    $('#rfstep4').css({'display':'block'});
  });
  $("#rfstepfourback").click(function(){
    $('#rfstep4').css({'display':'none'});
    $('#rfstep3').css({'display':'block'});
  });
  $("#rfstepfournext").click(function(){
    $('#rfstep4').css({'display':'none'});
    $('#rfstep5').css({'display':'block'});
  });
  $("#rfstepfiveback").click(function(){
    $('#rfstep5').css({'display':'none'});
    $('#rfstep4').css({'display':'block'});
  });
  $("#rfstepfivenext").click(function(){
    $('#rfstep5').css({'display':'none'});
    $('#rfstep6').css({'display':'block'});
  });
  $("#rfstepsixnext").click(function(){
    $('#rfstep6').css({'display':'none'});
    $('#rfstep7').css({'display':'block'});
  });
  })

  function showfield(name){
    if(name=='pickUp')document.getElementById('div1').innerHTML=' <div class="form-group slide"><label id="formlable" for="birthDate" class="col-sm-12 control-label">Pickup Date</label><div class="col-sm-12"><input required type="date" id="birthDate" class="" placeholder="Date of Birth" autofocus></div></div>'
    else document.getElementById('div1').innerHTML='';
  
    if(name=='Email')document.getElementById('div2').innerHTML=' <div class="form-group slide"> <label id="formlable" for="email" class="col-sm-12 control-label">Email Address</label> <div class="col-sm-12"> <input required type="text" id="text" class="" placeholder="Enter Email Address" class="form-control" autofocus> </div></div>'
    else document.getElementById('div2').innerHTML='';
  
    if(name=='fax')document.getElementById('div3').innerHTML='  <div class="form-group slide"> <label id="formlable" for="phonenumber" class="col-sm-12 control-label">Fax Number</label> <div class="col-sm-12"> <input required type="text" id="phonenumber" class="" name="phoneNumber" placeholder="Contact Number"> </div></div>'
    else document.getElementById('div3').innerHTML='';
  
    if(name=='Other')document.getElementById('div4').innerHTML=' <div class="form-group slide"> <label id="formlable" for="birthDate" class="col-sm-12 control-label">Please Explain</label> <div class="col-sm-12"> <textarea name="describe" class="form-control" id="describe" required="" rows="3" placeholder="Please Explain"></textarea> </div></div>'
    else document.getElementById('div4').innerHTML='';
  };
// RequestForm Steps End

// UpdateDemo Steps Start
  $(document).ready(function(){
      $('#ufstep1').css({'display':'block'});
      $("#ufsteponenext").click(function(){
      $('#ufstep1').css({'display':'none'});
      $('#ufstep2').css({'display':'block'});
      });
      $("#ufsteptwoback").click(function(){
      $('#ufstep2').css({'display':'none'});
      $('#ufstep1').css({'display':'block'});
      });
      $("#ufsteptwonext").click(function(){
      $('#ufstep2').css({'display':'none'});
      $('#ufstep3').css({'display':'block'});
      });
      $("#ufstepthreeback").click(function(){
      $('#ufstep3').css({'display':'none'});
      $('#ufstep2').css({'display':'block'});
      });
      $("#ufstepthreenext").click(function(){
      $('#ufstep3').css({'display':'none'});
      $('#ufstep4').css({'display':'block'});
      });
      $("#ufstepfourback").click(function(){
      $('#ufstep4').css({'display':'none'});
      $('#ufstep3').css({'display':'block'});
      });
      $("#ufstepfournext").click(function(){
      $('#ufstep4').css({'display':'none'});
      $('#ufstep5').css({'display':'block'});
      });
      $("#ufstepfiveback").click(function(){
      $('#ufstep5').css({'display':'none'});
      $('#ufstep4').css({'display':'block'});
      });
      $("#ufstepfivenext").click(function(){
      $('#ufstep5').css({'display':'none'});
      $('#ufstep6').css({'display':'block'});
      });
      $("#ufstepsixback").click(function(){
      $('#ufstep6').css({'display':'none'});
      $('#ufstep5').css({'display':'block'});
      });
      $("#ufstepsixnext").click(function(){
      $('#ufstep6').css({'display':'none'});
      $('#ufstep7').css({'display':'block'});
      });
      $("#ufstepsevennext").click(function(){
      $('#ufstep7').css({'display':'none'});
      $('#ufstep8').css({'display':'block'});
      });
  })

  // show and hide for insurance type
  function insType() {
        var x = document.getElementById("insurancetype");
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        }
  }
// UpdateDemo Steps End

// AuthorizationRelease Steps Start
  $(document).ready(function(){
      $('#arfstep1').css({'display':'block'});
      $("#arfsteponenext").click(function(){
        $('#arfstep1').css({'display':'none'});
        $('#arfstep2').css({'display':'block'});
      });
      $("#arfsteptwoback").click(function(){
        $('#arfstep2').css({'display':'none'});
        $('#arfstep1').css({'display':'block'});
      });
      $("#arfsteptwonext").click(function(){
        $('#arfstep2').css({'display':'none'});
        $('#arfstep3').css({'display':'block'});
      });
      $("#arfstepthreeback").click(function(){
        $('#arfstep3').css({'display':'none'});
        $('#arfstep2').css({'display':'block'});
      });
      $("#arfstepthreenext").click(function(){
        $('#arfstep3').css({'display':'none'});
        $('#arfstep4').css({'display':'block'});
      });
      $("#arfstepfourback").click(function(){
        $('#arfstep4').css({'display':'none'});
        $('#arfstep3').css({'display':'block'});
      });
      $("#arfstepfournext").click(function(){
        $('#arfstep4').css({'display':'none'});
        $('#arfstep5').css({'display':'block'});
      });
      $("#arfstepfiveback").click(function(){
        $('#arfstep5').css({'display':'none'});
        $('#arfstep4').css({'display':'block'});
      });
      $("#arfstepfivenext").click(function(){
        $('#arfstep5').css({'display':'none'});
        $('#arfstep6').css({'display':'block'});
      });
      $("#arfstepsixback").click(function(){
        $('#arfstep6').css({'display':'none'});
        $('#arfstep5').css({'display':'block'});
      });
      $("#arfstepsixnext").click(function(){
        $('#arfstep6').css({'display':'none'});
        $('#arfstep7').css({'display':'block'});
      });
      $("#arfstepsevenback").click(function(){
        $('#arfstep7').css({'display':'none'});
        $('#arfstep6').css({'display':'block'});
      });
      $("#arfstepsevennext").click(function(){
        $('#arfstep7').css({'display':'none'});
        $('#arfstep8').css({'display':'block'});
      });
      $("#arfstepeightback").click(function(){
        $('#arfstep8').css({'display':'none'});
        $('#arfstep7').css({'display':'block'});
      });
      $("#arfstepeightnext").click(function(){
        $('#arfstep8').css({'display':'none'});
        $('#arfstep9').css({'display':'block'});
      });
      $("#arfstepnineback").click(function(){
        $('#arfstep9').css({'display':'none'});
        $('#arfstep8').css({'display':'block'});
      });
      $("#arfstepninenext").click(function(){
        $('#arfstep9').css({'display':'none'});
        $('#arfstep10').css({'display':'block'});
      });
      $("#arfsteptenback").click(function(){
        $('#arfstep10').css({'display':'none'});
        $('#arfstep9').css({'display':'block'});
      });
      $("#arfsteptennext").click(function(){
        $('#arfstep10').css({'display':'none'});
        $('#arfstep11').css({'display':'block'});
      });
      $("#arfstepelevenback").click(function(){
        $('#arfstep11').css({'display':'none'});
        $('#arfstep10').css({'display':'block'});
      });
      $("#arfstepelevennext").click(function(){
        $('#arfstep11').css({'display':'none'});
        $('#arfstep12').css({'display':'block'});
      });
      $("#arfsteptwelveback").click(function(){
        $('#arfstep12').css({'display':'none'});
        $('#arfstep11').css({'display':'block'});
      });
      $("#arfsteptwelvenext").click(function(){
        $('#arfstep12').css({'display':'none'});
        $('#arfstep13').css({'display':'block'});
      });
      $("#arfstepthirteenenext").click(function(){
        $('#arfstep13').css({'display':'none'});
        $('#arfstep14').css({'display':'block'});
      });
  })

  // show and hide for Email
  function emailType() {
    var x = document.getElementById("emailType");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  };

  // show and hide for Phone
  function faxType() {
    var x = document.getElementById("faxType");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  };
// AuthorizationRelease Steps End


// General functions Start
  $(document).ready(function(){
    $('#srfstep1').css({'display':'block'});
    $("#srfsteponenext").click(function(){
      $('#srfstep1').css({'display':'none'});
      $('#srfstep2').css({'display':'block'});
    });
    $("#srfsteptwoback").click(function(){
      $('#srfstep2').css({'display':'none'});
      $('#srfstep1').css({'display':'block'});
    });
    $("#srfsteptwonext").click(function(){
      $('#srfstep2').css({'display':'none'});
      $('#srfstep3').css({'display':'block'});
    });
    $("#srfstepthreeback").click(function(){
      $('#srfstep3').css({'display':'none'});
      $('#srfstep2').css({'display':'block'});
    });
    $("#srfstepthreenext").click(function(){
      $('#srfstep3').css({'display':'none'});
      $('#srfstep4').css({'display':'block'});
    });
    $("#srfstepfourback").click(function(){
      $('#srfstep4').css({'display':'none'});
      $('#srfstep3').css({'display':'block'});
    });
    $("#srfstepfournext").click(function(){
      $('#srfstep4').css({'display':'none'});
      $('#srfstep5').css({'display':'block'});
    });
    $("#srfstepfiveback").click(function(){
      $('#srfstep5').css({'display':'none'});
      $('#srfstep4').css({'display':'block'});
    });
    $("#srfstepfivenext").click(function(){
      $('#srfstep5').css({'display':'none'});
      $('#srfstep6').css({'display':'block'});
    });
    $("#srfstepsixback").click(function(){
      $('#srfstep6').css({'display':'none'});
      $('#srfstep5').css({'display':'block'});
    });
    $("#srfstepsixnext").click(function(){
      $('#srfstep6').css({'display':'none'});
      $('#srfstep7').css({'display':'block'});
    });
    $("#srfstepsevenback").click(function(){
      $('#srfstep7').css({'display':'none'});
      $('#srfstep6').css({'display':'block'});
    });
    $("#srfstepsevennext").click(function(){
      $('#srfstep7').css({'display':'none'});
      $('#srfstep8').css({'display':'block'});
    });
    $("#srfstepeightback").click(function(){
      $('#srfstep8').css({'display':'none'});
      $('#srfstep7').css({'display':'block'});
    });
    $("#srfstepeightnext").click(function(){
      $('#srfstep8').css({'display':'none'});
      $('#srfstep9').css({'display':'block'});
    });
    $("#srfstepnineback").click(function(){
      $('#srfstep9').css({'display':'none'});
      $('#srfstep8').css({'display':'block'});
    });
    $("#srfstepninenext").click(function(){
      $('#srfstep9').css({'display':'none'});
      $('#srfstep10').css({'display':'block'});
    });
    $("#srfsteptenback").click(function(){
      $('#srfstep10').css({'display':'none'});
      $('#srfstep9').css({'display':'block'});
    });
    $("#srfsteptennext").click(function(){
      $('#srfstep10').css({'display':'none'});
      $('#srfstep11').css({'display':'block'});
    });
    $("#srfstepelevenback").click(function(){
      $('#srfstep11').css({'display':'none'});
      $('#srfstep10').css({'display':'block'});
    });
    $("#srfstepelevennext").click(function(){
      $('#srfstep11').css({'display':'none'});
      $('#srfstep12').css({'display':'block'});
    });
    $("#srfsteptwelveback").click(function(){
      $('#srfstep12').css({'display':'none'});
      $('#srfstep11').css({'display':'block'});
    });
    $("#srfsteptwelvenext").click(function(){
      $('#srfstep12').css({'display':'none'});
      $('#srfstep13').css({'display':'block'});
    });
    $("#srfstepthirteenenext").click(function(){
      $('#srfstep13').css({'display':'none'});
      $('#srfstep14').css({'display':'block'});
    });
})

  function riskType() {
    var x = document.getElementById("risktype");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  };

  function explainType() {
    var x = document.getElementById("explaintype");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  };
// General functions End