$(document).ready(function() {
  //tooltip;
  $('.tip').tooltip();
  //datepicker
  $("#inputDate").datepicker();

  //taginput
  $('#source-tags').tagsinput();

  //String to Slug
	$("#inputTitle").stringToSlug({
		setEvents: 'keyup keydown blur',
		getPut: '#inputSlug',
		space: '-'
	});

});