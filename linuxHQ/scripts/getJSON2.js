$(document).ready(function() {
	$.getJSON("/linuxHQ/json/desktops.json", function(data) {

	// $.getJSON("/linuxHQ/json/desktops.json", function(data) {
			console.log(data);

		// $("#desktopData").html(JSON.parse(data));
		$("#desktopData").html(JSON.stringify(data));


		$("#desktopData").html(JSON.stringify(data[0]));

	})
});
