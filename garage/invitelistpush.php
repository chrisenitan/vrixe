<?php


  if($phpurl == 'vrixe-enn'){$appID = "527b2883-5dff-4a9b-88bd-5e2e3e74c9f4"; $tempid = "3aa42c49-4807-443f-a3be-c315c5d8ad41";}else{$appID = "151afe3d-500c-49f3-b682-dd9c5084a863"; $tempid = "da019b3a-7e60-4148-ac16-0234f9c99c8b";}

//god have mercy on you for coding it like this chris. make each pushid array and set rubbish as not id
$mainpusharrayids = str_replace(",,", ",", $pushlist); //just incase user had no id and double ,, was entered in contact form. tho we aim to prefill all users id

/*
  echo"
  <script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: '$appID',
    });
  });

OneSignal.push(function() {
     //OneSignal.sendTag('who', '$cid');
   //OneSignal.deleteTag('who');
   
    OneSignal.getUserId(function(userId) {
    console.log('OneSignal User ID:  string: $pushlist then $appID star: $pushlistar ', userId); 
  });
               
});
</script>
";
*/

$allpusharrayids = explode(",", $mainpusharrayids); 

$initialplsa = $allpusharrayids[0]; if($initialplsa > ""){$plsa = $allpusharrayids[0];}else{$plsa = "66666666-36f0-432b-9f5d-4bfeec61fa81";}
$initialplsb = $allpusharrayids[1]; if($initialplsb > ""){$plsb = $allpusharrayids[1];}else{$plsb = "66666666-36f0-432b-9f5d-4bfeec61fa81";}
$initialplsc = $allpusharrayids[2]; if($initialplsc > ""){$plsc = $allpusharrayids[2];}else{$plsc = "66666666-36f0-432b-9f5d-4bfeec61fa81";}
$initialplsd = $allpusharrayids[3]; if($initialplsd > ""){$plsd = $allpusharrayids[3];}else{$plsd = "66666666-36f0-432b-9f5d-4bfeec61fa81";}
$initialplse = $allpusharrayids[4]; if($initialplse > ""){$plse = $allpusharrayids[4];}else{$plse = "66666666-36f0-432b-9f5d-4bfeec61fa81";}
$initialplsf = $allpusharrayids[5]; if($initialplsf > ""){$plsf = $allpusharrayids[5];}else{$plsf = "66666666-36f0-432b-9f5d-4bfeec61fa81";}
  

	function sendMessage($string, $tempid, $appID, $plsa, $plsb, $plsc, $plsd, $plse, $plsf){
		
   
		$fields = array(
			'app_id' => $appID,
			'include_player_ids' => array("$plsa","$plsb","$plsc","$plsd","$plse","$plsf"),
			'data' => array("foo" => "bar"),
      'template_id' => $tempid,
      'url' => 'https://vrixe.com/invitation.php?iv='.$string
		);
		
		$fields = json_encode($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}
	
	$response = sendMessage($string, $tempid, $appID, $plsa, $plsb, $plsc, $plsd, $plse, $plsf);
	$return["allresponses"] = $response;
	$return = json_encode( $return);



  ?>
  