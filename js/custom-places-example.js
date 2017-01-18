function runExample3() {
    $("#custom-places").mapsed({
		showOnLoad: 	
		[
			// City Varieties
			
			// Random made up CUSTOM place
			{
				// flag that this place should have the tooltip shown when the map is first loaded
				autoShow: true,
				lat: 12.96833,
				lng:79.158845,
				name: "VIT University",
				street: "Riviera 2015",
				userData: 99
			}

		]
		
	});									
}


$(document).ready(function() {
	runExample3();
});


