<?php
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$n = [
'cctv4k' => [2022575203, 600002264],//cccv-4k
' cctv8k' => [2020603421, 600002259],//cccv-8k
'cctv1' => [2022576803, 600001859],//cccv1
'cctv2' => [2022576703, 600001800],//cccv2
'cctv3' => [2 022576503 , 600001801],//cccv3(vip)
'cctv4' => [2022576603, 600001814],//cccv4
'cctv5' => [2022576403, 600001818],//cccv5
'cctv5p' => [2022576303, 600001817],//cccv5+
//'cctv6' => 4303, 600001802 ],//cccv6(vip)
'cctv6' => [2013693901, 600001802],//cccv6 HD(vip)
'cctv7' => [2022576203, 600004092],//cccv7
'cctv8' => [2022576103, 600001803],//cccv8(vip)
'cctv9' => [2022576003, 600004078],//cccv9
'cctv10' => [2022573003, 600001805],//CCTV10
'cctv11' => [20225 75903, 600001806] ,//CCTV11
'cctv12' => [2022575803, 600001807],//CCTV12
'cctv13' => [2022575703, 600001811],//CCTV13
'cctv14' => [2022575603, 600001809],//CCTV14
'cctv15' => [2022575503, 600001815],//CCTV15
'cctv16' => [2022575403, 600098637],//CCTV16
'cctv16-4k' => [2022575103, 600099502], //CCTV16-4k(vip)
'cctv17' => [2022575303, 600001810],//CCTV17
'bqkj' => [2012513403, 600099649],//CCTV Weapon Technology(vip)
'dyjc' => [2012514403, 600099655],//CCTV First Theater (vip)
'hjjc' => [2012511203, 600099620],//CCTV Nostalgia Theater (vip)
'fyjc' => [2012513603, 600099658],//CCTV Fengyun Theater (vip)
'fyyy' => [2012514103, 600099660], //CCTV Fengyun Music (vip)
'fyzq' => [2012514203, 600099636], //CCTV Fengyun Football (vip)
'dszn' => [2012514003, 600099656], //CCTV TV Guide (vip)
'nxss' => [2012513903, 600099650], //CCTV Women's Fashion (vip)
'whjp' => [2012513803, 600099653], //CCTV CCTV Culture Boutique (vip)
'sjdl' => [2012513303, 600099637], //CCTV World Geography (vip)
'gefwq' => [2012512503, 600099659], //CCTV Golf and Tennis (vip)
'ystq' => [2012513703, 600099652], / /CCTV CCTV Billiards (vip)
'wsjk' => [2012513503, 600099651], //CCTV Health (vip)
'cgtn' => [2022575003, 600014550], //CGTN
'cgtnjl' => [2022574703, 600084781], //CGTN Records
'cgtne' => [2022574803 , 600084744],//CGTN Spanish
'cgtnf' => [2022574903, 600051659],//CGTN French
'cgtna' => [2022574603, 600084704],//CGTN Arabic
'cgtnr' => [2022574803, 600084758] ,//CGTN Russian
'cetv1' => [2022823801, 600001810], //CETV1
'bjws' => [2000272103, 600002309], //Beijing TV
'dfws' => [2000292403, 600002483], //Dragon TV
'tjws' => [2019927003, 600058659], //Tianjin TV
'cqws' => [2000297803, 600002531], //Chongqing TV
'hljws' => [2000293903, 600002498], //Heilongjiang TV
'lnws' => [2000281303, 600002505], // Liaoning TV
'hbws' => [2000293403, 600002493], // Hebei TV
'sdws' => [2000294803, 600002513],//Shandong TV'ahws
' => [2000298003, 600002532],//Anhui TV'hnws
' => [2000296103, 600002525],//Henan TV'hubws
' => [2000294503, 600002508],//Hubei TV'hunws
' => [2000296203, 600002475],//Hunan TV'jxws' =>
[2000294103, 600002503],//Jiangxi TV'jsws
' => [2000295603, 600002521],//Jiangsu TV'zjws
' => [2000295503, 600002520],//Zhejiang TV'dnws
' => [2000292503, 600002484],//Southeast TV'gdws
' => [2000292703, 600002485],//Guangdong TV'szws
' => [2000292203, 600002481],//Shenzhen TV'gxws
' => [2000294203, 600002509],//Guangxi TV'gzws
' => [2000293303, 600002490],//Guizhou TV'scws
' => [2000295003, 600002516],//Sichuan TV'xjws
' => [2019927403, 600085259],//Xinjiang TV'btws
' => [2022606701, 600085259],//Bingtuan TV'hinws
' => [2000291503, 600002506],//Hainan TV
];

$cnlid = $n[$id][0];
$livepid = $n[$id][1];
//$livepid = '600001859';
$guid = "lsdbop7p_".nu(11);
$salt = '0f$IVHi9Qno?G';
$platform = "5910204";
$key = hex2bin("48e5918a74ae21c972b90cce8af6c8be");
$iv = hex2bin("9a7e7d23610266b1d9fbf98581384d92");
$ts = time();
$el = "|{$cnlid}|{$ts}|mg3c3b04ba|V1.0.0 |{$guid}|{$platform}| https://www.yangshipin.c |mozilla/5.0 (windows nt ||Mozilla|Netscape|Win32|";
$len = strlen($el);
$xl = 0;
for($i=0;$i<$len;$i++){
$xl = ($xl << 5) - $xl + ord($el[$i]);
$xl &= $xl & 0xFFFFFFFF;
}
$xl = ($xl > 2147483648) ? $xl - 4294967296 : $xl;
$el = '|'.$xl.$el;
$ckey = "--01".strtoupper(bin2hex(openssl_encrypt($el,"AES-128-CBC",$key,1,$iv)));
function Kc($t) { // Sort and sign the parameter array
$e = "";
$r = [];
$Rc = '0f$IVHi9Qno?G';
foreach ($t as $key => $value) {
$r[] = $key;
}
sort($r);
foreach ($r as $index => $key) {
if ($index != 0) {
$e .= "&";
}
if (is_array($t[$key])) {
$t[$key] = implode(",", $t[$key]);
}
$e .= $key . "=" . rawurlencode($t[$key]);
}
$e .= $Rc;
return md5($e);
}
function nu($t = 10) {
$e = "ABCDEFGHIJKlMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$r = strlen($e);
$n = "";
for ($i = 0; $i < $t; $i++) {
$n .= $e[rand(0, $r - 1)];
}
return $n;
}
$randomString = nu(10);
//Get the current millisecond time
$currentTimeMillis = round(microtime(true) * 1000);
$request_id = "999999".$randomString.$currentTimeMillis;
function sign($param) {//Sign the data
$e = "";
$r = array_keys($param);
sort($r); // Sort the attribute name
arrayforeach ($r as $n => $key) {
if ($n != 0) {
$e .= "&";
}
if (is_array($param[$key])) {
$t[$key] = implode(',', $param[$key]); // If the attribute value is an array, convert it to a string
}
$e .= $key . "=" . rawurlencode($param[$key]); // Use rawurlencode to URL encode
}
$e .= "Q0uVOpuUpXTOUwRn"; // Add a fixed string to the end of the signature stringreturn
md5($e); // Perform MD5 hashing on the signature string
}
$param = [
"pid"=>$livepid,
"guid"=>$guid,
"appid"=>"ysp_pc",
"rand_str"=>nu(10),
];
$singature=sign($param);
$param["signature"] = $singature;
//print_r($param); View request array
$bstrURL = "https://player-api.yangshipin.cn/v1/player/auth";//Request URL
$headers = [
"Content-Type: application/x-www-form-urlencoded;charset=UTF-8",
"Referer: https://www.yangshipin.cn/ ",
"Cookie: guid={$guid}; versionName=99.99.99; versionCode=999999; vplatform=109; platformVersion=Chrome; deviceModel=123; updateProtocol=1; seqId=36;request-id={$request_id}",
"Yspappid: 519748109",
];
$ch = curl_init($bstrURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
$data = curl_exec($ch);
curl_close($ch);
$json_data = json_decode($data);
$token = $json_data->data->token;
//echo $token;
End of auth acquisition
//Start to obtain get_info information
$params = [
"cnlid" => "{$cnlid}",
"livepid" => "{$livepid}",
"stream" => "2",
"guid" => $guid,
"cKey" => $ckey,
"adjust" => 1,
"sphttps" => "1",
"platform" => "5910204",
"cmd" => "2",
"encryptVer" => "8.1",
"dtype" => "1",
"devi d" => "devid",
"otype" => "ojson",
"appVer" => "V1.0.0",
"app_version" => "V1.0.0",
"rand_str" => nu(10),
"channel" => "ysp_tx",
"defn" => "fhd",
];
$sign1 = Kc($params);
$params["signature"] = $sign1;
$bstrURL1 = "https://player-api.yangshipin.cn/v1/player/get_live_info";
$headers1 = [
"Content-Type: application/json;charset=UTF-8",
"Referer: https:// www.yangshipin.cn/",
"Cookie: guid={$guid}; versionName=99.99.99; versionCode=999999; vplatform=109; platformVersion=Chrome; deviceModel=123; updateProtocol=1; seqId=36;request-id={$request_id} ",
"Yspappid: 519748109",
"yspplayertoken: {$token}",
];
$ch = curl_init($bstrURL1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($params));
$data = curl_exec($ch);
//echo $data;
// Close CURL session
curl_close($ch);
$json = json_decode($data);
$ live = $json->data->playurl;
$extended_param = $json->data->extended_param;
$chanllCode = json_decode($json->data->chanll)->code;
$decodeChanll = base64_decode($chanllCode);
// Define regular expressions to match the assignment statements of des_key and des_iv
$patternKey = '/var des_key = "(.*?)";/';
$patternIv = '/var des_iv = "(.*?)";/ ';
// Initialize variables to store extracted values
​​$desKey = "";
$desIv = "";
// Use regular expressions to extract the value of des_key
if (preg_match($patternKey, $decodeChanll, $matchesKey)) {
$desKey = $matchesKey[1];
}
// Use regular expression to extract the value of des_iv
if (preg_match($patternIv, $decodeChanll, $matchesIv)) {
$ desIv = $matchesIv[1];
}
//Define the array to be encrypted
$jsonString = '{"mver":"1","subver":"1.2","host":"www.yangshipin.cn/#/tv /home?pid=","referer":"","canvas":"YSPANGLE(Intel,Intel(R)Iris(R)XeGraphics(0x000046A6)Direct3D11vs_5_0ps_5_0,D3D11)"}';
$data = json_decode($jsonString , true);
function encryptData($data,$desKey,$desIv) {
$plaintext = json_encode($data,JSON_UNESCAPED_SLASHES);
$key = base64_decode($desKey);
$iv = base64_decode($desIv);
$encrypted = openssl_encrypt($plaintext, 'des-ede3-cbc', $key, OPENSSL_RAW_DATA, $iv);
return strtoupper(bin2hex($encrypted));
}
//Define variables to save revoi value
$encryptedHex = encryptData($data,$desKey,$desIv);//revoi value
//header('Location:'. $live."&revoi=".$encryptedHex.$extended_param);
//exit();

$live = $live."&revoi=".$encryptedHex.$extended_param ;

//Replace the cdn domain name. This line can be deleted for domestic servers Code
$live = str_replace("https://outlivecloud-cdn.ysp.cctv.cn", "http://hlslive-tx-cdn.ysp.cctv.cn",$live);


//CCTV6, CETV1, Bingtuan TV special format processing
$cut = substr($n[$id][0], 0, 8);
if($id == 'cctv6'||$id == 'cetv1'||$id == 'btws') {
$burl = explode("{$n[$id][0]}_fhd.m3u8",$live)[0];
  } else {
// $burl = explode("{$n[$id][0]}.m3u8",$live)[0];
     $burl = explode("$cut",$live)[0];
     }

$d = file_get_contents($live);
$str = preg_replace("/(.*?.ts)/", $burl."$1",$d);
header("Content-Type: application/vnd.apple.mpegurl" );
header("Content-Disposition: inline; filename=index.m3u8");
echo $str;
?>
