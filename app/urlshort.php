<?php
class SaveUrl extends SQLite3 {
    function __construct()
      {
         $this->open('urls.db');
      }
}

$db = new SaveUrl();
$date = new DateTime();
$tym = $date->getTimestamp();

//$db->exec("DELETE FROM url");

$short = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/url-shortner/$tym";

$db->exec("CREATE TABLE url (original TEXT, short TEXT)");
$sql = "INSERT INTO url (original, short) VALUES ('$uri', '$short')";
if(isset($_REQUEST['new'])){
 $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
      echo 'error';
   } 


$result = [
    'original' => $uri,
    'short' => $short 
];

$result_json = json_encode($result, JSON_UNESCAPED_SLASHES, JSON_PRETTY_PRINT);
header('Content-type: application/json');
echo $result_json;
}
$db->close();