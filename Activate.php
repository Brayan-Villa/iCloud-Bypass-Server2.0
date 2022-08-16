<?php


FUNCTION PLISTKey($key, $string, $value){
  $CFString = "<key>".$key."</key>\n<".$string.">";
  if($value != null){
   $CFString = ".$value."</".$string.">";
  }
  else{
   $CFString = str_replace("<".$string.">", "</".$string.">", $CFString);
  }
  return $CFString;
}

echo PLISTKey("ActivationInfoXML", "dict", "");

?>
