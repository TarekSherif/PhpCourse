/// <reference path="jquery-1.10.2.js" />
   $(function () {

$(".Showmonths").click(function(event) {
	/* Act on the event */
	$("#Tblmonths").show('slow/400/fast');
});

$("td[data-day]").click(function(event) {
	
	$("#TxtCalendar").val($(this).data('day'));
	$(".active-Table").addClass('Notactive-Table').removeClass('active-Table').hide('slow/400/fast');
});
$("#TxtCalendar").focus(function(event) {
	/* Act on the event */
	if($(".active-Table").length<1)
	$(".jan").addClass('active-Table').show('slow/400/fast');

});
$("td[data-month]").click(function(event) {
	/* Act on the event */
	var monthName=$(this).data('month');
	var activeTable= $(".active-Table");
$("."+monthName).addClass('active-Table').removeClass('Notactive-Table').show('slow/400/fast');;
	  $(activeTable).addClass('Notactive-Table').removeClass('active-Table').hide('slow/400/fast');

	  $("#Tblmonths").hide('slow/400/fast');

});
      $(".btnNext").click(function(event) {
        /* Act on the event */

		var activeTable= $(".active-Table");

      if($(activeTable).hasClass('Dec'))
       	$(".jan").addClass('active-Table').removeClass('Notactive-Table').show('slow/400/fast');
      else
        $(activeTable).next("table").addClass('active-Table').removeClass('Notactive-Table').show('slow/400/fast');


        $(activeTable).addClass('Notactive-Table').removeClass('active-Table').hide('slow/400/fast');


      });
   $(".btnPre").click(function(event) {
        /* Act on the event */
      var activeTable= $(".active-Table");
      if($(activeTable).hasClass("jan"))
      	 	$(".Dec").addClass('active-Table').removeClass('Notactive-Table').show('slow/400/fast');
      else
        $(activeTable).prev("table").addClass('active-Table').removeClass('Notactive-Table').show('slow/400/fast');
      
       
$(activeTable).addClass('Notactive-Table').removeClass('active-Table').hide('slow/400/fast');;
      });


        });
