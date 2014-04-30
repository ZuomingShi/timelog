$(function() {

	window.SundialCalendar = {};

	$(document).on("submit", "#thisModal form", function(event) {
		submitNewEvent(SundialCalendar.calendar);
		event.preventDefault();
	});

	$('body').on('hidden.bs.modal', '.modal', function() {
		$(this).removeData('bs.modal');
		$('#thisModal').html("");
	});

	var categories = [];

	$.get("/log/view_cat_cal", function(cats) {
		// TODO: do selective querying when real dates are used, so we don't have to
		// get all events, however, it is unclear yet how much of a performance bottleneck
		// this will be.
		for (var i = 0; i < cats.length; i++) {
			categories.push({
				title: cats[i].name,
				id: cats[i].CID,
				color: cats[i].color
			});
		}
	});

	var eventsBeforeParsed = [];
	var eventsAfterParsed = [];

	$.get("/log/view_cal", function(events) {

		eventsBeforeParsed = events;

		//TODO: do selective querying when real dates are used, so we don't have to
		//get all events, however, it is unclear yet how much of a performance bottleneck
		//this will be.

		for (var i = 0; i < events.length; i++) {
			events[i].color = "#FFFFFF";
			for (var i2 = 0; i2 < categories.length; i2++) {
				if (events[i].CID == categories[i2].id) {
					events[i].color = "#" + categories[i2].color;
				}
			}

			eventsAfterParsed.push({
				title: "placeholder title",
				start: new Date(events[i].startDateTime),
				end: new Date(events[i].endDateTime),
				allDay: false,
				description: events[i].notes,
				id: events[i].LID,
				backgroundColor: events[i].color
			});
		}
	});

	SundialCalendar.calendar = $('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title'
		},
		selectable: true,
		selectHelper: true,
		allDaySlot: false,
		slotMinutes: 15,
		defaultView: "agendaWeek",
		editable: true,
		events: eventsAfterParsed,
		select: function(start, end, allDay) {
			eventEditorModal(start, end, SundialCalendar.calendar);			
		},
		eventClick: function(calEvent, jsEvent, view) {

			//Edit existing event

			var tmp;
			var title;
			var description;

			//var x = $("#thisModal form").submit();

			console.log(x);

		},
		eventDrop: function(calEvent, dayDelta, minuteDelta, allDay, revertFunc) {

			var stFromatted = $.fullCalendar.formatDate(calEvent.start, "yyyy-MM-dd HH:mm");
			var etFromatted = $.fullCalendar.formatDate(calEvent.end, "yyyy-MM-dd HH:mm");

			$.post("/log/save_from_calendar/" + calEvent.id, {
				entryname: calEvent.title,
				category: "placeholder",
				startDateTime: stFromatted,
				endDateTime: etFromatted,
				notes: calEvent.description
			})
		},
		eventResize: function(calEvent, dayDelta, minuteDelta, revertFunc) {

			var stFromatted = $.fullCalendar.formatDate(calEvent.start, "yyyy-MM-dd HH:mm");
			var etFromatted = $.fullCalendar.formatDate(calEvent.end, "yyyy-MM-dd HH:mm");

			$.post("/log/save_from_calendar/" + calEvent.id, {
				entryname: calEvent.title,
				category: "placeholder",
				startDateTime: stFromatted,
				endDateTime: etFromatted,
				notes: calEvent.description
			});
		},
		eventRender: function(event, element) {
			if (event.description != null) {
				element.find('.fc-event-title').prepend("<b>").append("</b><br/>" + event.description);
			}
		}
	});

});

function eventEditorModal(start, end, calendar) {

	console.log('on eventEditorModal');

	$("#thisModal").on("shown.bs.modal", function() {
		$("#startDateTime").val($.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm"));
		$("#endDateTime").val($.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm"));
	});

	$('#thisModal').modal({
		remote: '/api/log/edit/modal'
	});
}


function submitNewEvent(fc) {

	var form = $("#thisModal form");

	$.post('/api/log/save', form.serialize(), function(data) {

		console.log("server returned", data);

		SundialCalendar.calendar.fullCalendar('renderEvent', {
				
				title: data.CID,
				description: data.notes,
				start: data.startDateTime,
				end: data.endDateTime,
				id: data.LID,
				allDay: false
			},
			true // make the event "stick"
		);

	});

	SundialCalendar.calendar.fullCalendar('unselect');

}