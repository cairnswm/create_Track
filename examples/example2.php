<?php
	// Create an KML with a track
	
	// Include the component
	require_once '../XML/KML/Create.php';
	
	// Create new KML object
	$kml = new XML_KML_Create;
	$kml->properties["name"] = "example2";
	$kml->properties["description"] = "Example2.php - create KML with track\nby Create_XML.php by cairnswm\nCreated by https://github.com/cairnswm/Create_KML";
	
	// Set a folder to store places
	$foldername = "Track";

	// Create a place object
	$place = $kml->createPlace();

	// Set place object - in this case a line
	$place->setId('1')
		->setName('Tour Divide')
		->setDesc('Example lines for Tour Divide')
		->setFolder($foldername)
		->setLinePoint(-115.56016,51.161267)
		->setLinePoint(-115.55016,51.041267)
		->setLinePoint(-115.57016,49.971267)
		->setLinePoint(-115.54016,49.881267)
		->setLinePoint(-115.58016,49.861267);

		
	//Add place to KML
	$kml->addItem($place);

	$place = null;

	// save kml to file
	file_put_contents('output.kml', $kml);
	
?>	