<?php

//echo $_GET['tap_id'];
//die;

if(isset($_GET['tap_id']))
{
    echo $_GET['tap_id'];
    $sk='sk_test_esxO1PmGAk3lvadQEhT7HMby';//account//sandbox
    function callAPI($method, $url, $data){
	$curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "{}",
          CURLOPT_HTTPHEADER => array(
            "authorization: Bearer sk_live_IUBxR2rMNgldL68Z5EQJ4iyk"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
	}
	// OPTIONS:
	//account testing-sk_test_esxO1PmGAk3lvadQEhT7HMby
	//testing--sk_test_XKokBfNWv6FIYuTMg5sLPjhJ
// 	curl_setopt($curl, CURLOPT_URL, $url);
// 	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
// 	  'Authorization: Bearer sk_test_esxO1PmGAk3lvadQEhT7HMby',
// 	  'Content-Type: application/json',
// 	));
// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

	// EXECUTE:
// 	$result = curl_exec($curl);
// 	if(!$result){die("Connection Failure");}
// 	curl_close($curl);
// 	return $result;
    //} 
    
    $api="https://api.tap.company/v2/charges/".$_GET['tap_id'];
    
    echo "<pre>";
    echo callAPI('POST',$api,[]);
}
else
{
    echo "Payment declined.";
}
