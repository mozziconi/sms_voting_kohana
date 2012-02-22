<?php
echo '<?xml version=”1.0” encoding=”utf-8”?>';

// parse $_POST
if(sizeof($_POST))
{
  $keys = array_keys($_POST);
  $key = $keys[0];
  $xml = $_POST[$key];
  //parse xml
  $request = new SimpleXMLElement($xml);
  
  $uid = $request['uid'];
  $protocol = $request['protocol'];
}
else
{
  $uid = 'test-uid';
  $protocol = 'test-protocol';
};

echo "\n<response-poll uid=”$uid” protocol=”$protocol” next-request-period=”60”>\n";

// connect to mysql
$connection = mysql_connect('localhost', 'root', 'password') or ($message = mysql_error());
mysql_set_charset('utf8') or ($message = mysql_error());
mysql_select_db('sms_voting') or ($message = mysql_error());

$q = 'select * from `messages` order by `created` asc limit 30';
$messages = mysql_query($q);
$ids = array();
if(mysql_num_rows($messages))
{
  while($message = mysql_fetch_object($messages))
  {
    echo "\t<message-poll>\n\t\t<abonent isnn=”ИСНН” phone=”{$message->phone}”/>\n\t\t<content-text content-type=\"text/plain\">{$message->message}</content-text>\n\t</message-poll>\n";
    $ids[] = $message->id;
  };
  $q = 'delete from `messages` where `id` in ('.implode(',',$ids).')';
  mysql_query($q);
}
else
{
  echo "\t<noreply/>\n";
}
echo "</response-poll>";
