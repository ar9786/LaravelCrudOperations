<?php
if(isset($_POST['token_id'])){
function callAPI($method, $url, $data){
	$curl = curl_init();
	switch ($method){
	  case "POST":
		 curl_setopt($curl, CURLOPT_POST, 1);
		 if ($data)
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		 break;
	  case "PUT":
		 curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
		 if ($data)
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
		 break;
	  default:
		 if ($data)
			$url = sprintf("%s?%s", $url, http_build_query($data));
	}
	// OPTIONS:
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	  'Authorization: Bearer sk_test_XKokBfNWv6FIYuTMg5sLPjhJ',
	  'Content-Type: application/json',
	));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

	// EXECUTE:
	$result = curl_exec($curl);
	if(!$result){die("Connection Failure");}
	curl_close($curl);
	return $result;
} 
$data = [
			"amount" => "1",
			"currency" => "KWD",
			"threeDSecure" => true,
			"save_card" => false,
			"description" => "Test Description",
			"statement_descriptor" => "Sample",
			"metadata" => [
							"udf1" => "test 1",
							"udf2" => "test 2"
						],
			"reference" => [
							"transaction" => "txn_0001",
							"order" => "ord_0001"
						],
			"receipt" => [
							"email" => false,
							"sms" => true
			],
			"customer" => [
							"first_name" => "test",
							"middle_name" => "test",
							"last_name" => "test",
							"email" => "test@test.com",
							"phone" => [
											"country_code" => "965",
											"number" => "50000000"
							]
			],
			"source" => [
					"id" => $_POST['token_id'],
			],
			"post" => [
				"url" => "http://your_website.com/post_url"
			],
			"redirect" => [
				"url" => "https://www.sportstrives.com/html/payment.php"
			],
];
$api = callAPI("POST","https://api.tap.company/v2/charges",json_encode($data));

//$get_token_id = json_decode($api);
echo $api;
}