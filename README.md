# linkar-rest-api-php
LINKAR REST API with PHP
In this example, a way to consume the Linkar REST API services from PHP can be seen.
This function performs a READ operation against the API and returns the result of the reading.
We use CURL (Client URL Library) for the query, the official documentation <a href = "https://www.php.net/manual/en/book.curl.php" target = "blank"> here </a> can be consulted for more information and other examples.
This code is used for both XML and JSON calls, as can be seen in the code, the $ type variable can be passed with the value "JSON" or "XML" as the function argument as required.
The variation between both formats is as follows:

- XML:
	curl_setopt($curl, CURLOPT_POSTFIELDS, "<LkCommand>...</LkCommand>");
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: text/xml',));
	
- JSON:
	curl_setopt($curl, CURLOPT_POSTFIELDS, "{ ... }");	
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));
