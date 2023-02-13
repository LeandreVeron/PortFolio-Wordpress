<?php        
/* {
function doGet(e){
    return ContentService.createTextOutput("Method GET not allowed"); // ??
}
}
function doPost(e){
 var send = PHPcontact.sendGmail(e); // ??
 return ContentService.createTextOutput(send); // ??
}  */


/* var_dump($_POST); */

$data = array(
    "mail" => 'leandre.verongreta48@gmail.com',// votre adresse mail
    "objet" => $_POST["objet"] , // sujet du message sous le format : « NOM , DATE(JJ/MM) : [OBJET] »
    "message" => $_POST["message"],  // contenu du message
    "isHTML" => 'true'
   );

/* var_dump($data); */

// initialisation de la session

    $ch = curl_init(?string $url = null): CurlHandle|false

// configuration des options
 curl_setopt($ch, CURLOPT_URL, "https://script.google.com/macros/s/AKfycbzg0OF_hgRfdSqOG9AwL0xq57FLMCl18QDY8I13Pq-lecS6_clbgrhwjXRBrMwSZJLawg/exec");
curl_setopt($ch, CURLOPT_HEADER, 0);

?>      