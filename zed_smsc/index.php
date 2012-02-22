<?php
$xml = '<?xml version="1.0" encoding="UTF-8"?>';

if(isset($HTTP_RAW_POST_DATA))
{
  $request = $HTTP_RAW_POST_DATA;
  //parse xml
  $request = new SimpleXMLElement($request);
  
  $uid = $request['uid'];
  $protocol = $request['protocol'];
}
else
{
  header('HTTP/1.0 404 Not Found');
  die();
};

$xml .= '<response uid="'.$uid.'" protocol="'.$protocol.'" next-request-period="60">';

// connect to mysql
$connection = mysql_connect('localhost', 'root', 'password') or ($message = mysql_error());
mysql_set_charset('utf8') or ($message = mysql_error());
mysql_select_db('sms_voting') or ($message = mysql_error());

$q = 'select * from `messages` order by `created` asc limit 30';
$messages = mysql_query($q);
$ids = array();
$i = 1;
if(mysql_num_rows($messages))
{
  while($message = mysql_fetch_object($messages))
  {
    $xml .= '<message number="'.$i.'">';
    $xml .= '<abonent isnn="1082" phone="'.$message->phone.'" operator="infon_gateway"/><content-text content-type="text/plain">'.$message->message.'</content-text>';
    $xml .= '</message>';
    $ids[] = $message->id;
    $i += 1;
  };
  $q = 'delete from `messages` where `id` in ('.implode(',',$ids).')';
  mysql_query($q);
}
else
{
  $xml .= '<noreply/>';
}
$xml .= '</response>';

echo $xml;

