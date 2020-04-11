<?php


function Read ($type){ 	

	$result = "";
	try
	{
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_POST, 1);

		if ($type == "JSON")
		{
			curl_setopt($curl, CURLOPT_POSTFIELDS, "{ \"APIKey\" : \"my_apikey\", \"Data\" : { \"CALCULATED\" : \"False\", \"DICTIONARIES\" : \"False\", \"CONVERSION\" : \"False\", \"FORMAT_SPEC\" : \"False\", \"ORIGINAL_RECORDS\" : \"False\" ,\"CUSTOM_VARS\" : \"\" ,\"OUTPUT_FORMAT\" : \"MV\" ,\"FILE_NAME\" : \"LK.CUSTOMERS\" ,\"RECORD_IDS\" : [ { \"ID\" : \"2\" }, { \"ID\" : \"3\" } ] ,\"RECORD_DICTCLAUSE\" : \"\"} }");	
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));
		}
		else
		{
			curl_setopt($curl, CURLOPT_POSTFIELDS, "<LkCommand><APIKey>my_apikey</APIKey><Data><CALCULATED>False</CALCULATED><DICTIONARIES>False</DICTIONARIES><CONVERSION>False</CONVERSION><FORMAT_SPEC>False</FORMAT_SPEC><ORIGINAL_RECORDS>False</ORIGINAL_RECORDS><CUSTOM_VARS></CUSTOM_VARS><OUTPUT_FORMAT>MV</OUTPUT_FORMAT><FILE_NAME>LK.CUSTOMERS</FILE_NAME><RECORD_IDS><ID>2</ID><ID>3</ID></RECORD_IDS><RECORD_DICTCLAUSE></RECORD_DICTCLAUSE></Data></LkCommand>");	
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: text/xml',));
		}
		
		curl_setopt($curl, CURLOPT_URL, "http://yourdomain.com:11201/api/read");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		curl_close($curl);
		
	} catch (Exception $e) {
		$result = $e->getMessage();
	}
	
	/*if ($type == "JSON")
	{
		return "<div class='linkarplugin-read-json'>".$result."</div>";
	}
	else
	{
		return "<div class='linkarplugin-read-xml'>".$result."</div>";
	}*/	
	return $result;
}


?>