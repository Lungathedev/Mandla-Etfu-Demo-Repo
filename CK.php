<?php

$total = $_POST['Amount'];

   function generateSignature($data, $passPhrase = null) {
    // Create parameter string
    $pfOutput = '';
    foreach( $data as $key => $val ) {
        if(!empty($val)) {
            $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
        }
    }
    // Remove last ampersand
    $getString = substr( $pfOutput, 0, -1 );
    if( $passPhrase !== null ) {
        $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
    }
    return md5( $getString );
}

$data = array(
    'merchant_id' => '#######',
    'merchant_key' => '#######',
    'return_url' => 'https://mandlaetfu.org.za/FP2.php',
    'cancel_url' => 'https://mandlaetfu.org.za/Fundraiser.php',
    'amount'=> $total,
    'item_name' => 'Mandla Etfu NPC support fundraiser',
);
$signature = generateSignature($data);
$data['signature'] = $signature;

$htmlForm = '<form action="https://www.payfast.co.za/eng/process" method="post" id="form">';
foreach($data as $name=> $value)
{
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
}
$htmlForm .= '<input type="submit" name="Pay" value="Order" id="Blanks" class="Orderbtn" style="display:none"/></form>';
echo $htmlForm;
echo'
<script>
function submit(){
document.getElementById("form").submit();
}
submit();
</script>';

