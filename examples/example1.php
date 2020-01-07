<?php
	// Create a simple KML with a single point
	
	// Include the component
	require_once '../XML/KML/Create.php';
	
	// Create new KML object
	$kml = new XML_KML_Create;
	$kml->properties["name"] = "example1";
	$kml->properties["description"] = "Example1.php\nCreate_XML.php by cairnswm\nCreated by https://github.com/cairnswm/Create_KML";
	
	// Set a folder to store places
	$foldername = "Places";

	// Create a place object
	$place = $kml->createPlace();

	// Set place object parameters
	$place->setId('1')
		->setName('Tour Divide')
		->setDesc('Start of the Tour Divide')
		->setFolder($foldername)
		->setCoords(-115.56016,51.161267);

	//Add place to KML
	$kml->addItem($place);

	$place = null;

	// save kml to file
	file_put_contents('output.kml', $kml);
	
?>	