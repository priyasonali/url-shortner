<?php
class SaveUrl extends SQLite3 {
    function __construct()
      {
         $this->open('urls.db');
      }
}
$db = new SaveUrl();
   if(!$db){
      echo $db->lastErrorMsg();
   } 
   //http://localhost/url-shortner/1489780963

   $sql =<<<EOF
      SELECT * from url WHERE short = '$short';
EOF;

  $ret = $db->query($sql);
  if($ret != null){
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      header("Location:".$row['original']);
      exit();
   }
  }else{
     header("Location: http://localhost/url-shortner/");
     exit();
  }
   $db->close();