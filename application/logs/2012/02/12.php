<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-12 02:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 02:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:37:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: poll ~ APPPATH/views/template.php [ 79 ]
2012-02-12 03:37:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: poll ~ APPPATH/views/template.php [ 79 ]
--
#0 /var/www/sms_voting_kohana/application/views/template.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/sms_vo...', 79, Array)
#1 /var/www/sms_voting_kohana/system/classes/kohana/view.php(61): include('/var/www/sms_vo...')
#2 /var/www/sms_voting_kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/sms_vo...', Array)
#3 /var/www/sms_voting_kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/sms_voting_kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Poll))
#6 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-12 03:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/get_pin_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-12 03:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/get_pin_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 03:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/get_pin_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-12 03:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/get_pin_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 03:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/get_pin_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-12 03:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/get_pin_code was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 03:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-12 03:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 03:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-12 03:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 03:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/klklk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-02-12 03:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/klklk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 03:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 03:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 03:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:40:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/ajax.php [ 24 ]
2012-02-12 04:40:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/ajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:41:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
2012-02-12 04:41:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:42:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
2012-02-12 04:42:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:42:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
2012-02-12 04:42:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:43:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
2012-02-12 04:43:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:44:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 29 ]
2012-02-12 04:44:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:44:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 29 ]
2012-02-12 04:44:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:45:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 29 ]
2012-02-12 04:45:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:45:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 34 ]
2012-02-12 04:45:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:46:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 61 ]
2012-02-12 04:46:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:46:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 71 ]
2012-02-12 04:46:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/ajax.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 04:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 04:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 04:54:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 60 ]
2012-02-12 04:54:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/ajax.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 07:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 07:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 07:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 07:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 12:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 12:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 12:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 12:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 12:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 12:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 13:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 13:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:10:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONST ~ APPPATH/classes/controller/ajax.php [ 50 ]
2012-02-12 15:10:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONST ~ APPPATH/classes/controller/ajax.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 15:10:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/ajax.php [ 158 ]
2012-02-12 15:10:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/ajax.php [ 158 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 15:10:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_AS, expecting ';' ~ APPPATH/classes/controller/ajax.php [ 168 ]
2012-02-12 15:10:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_AS, expecting ';' ~ APPPATH/classes/controller/ajax.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 15:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:17:32 --- ERROR: ErrorException [ 1 ]: Class 'getRange' not found ~ APPPATH/classes/controller/ajax.php [ 107 ]
2012-02-12 15:17:32 --- STRACE: ErrorException [ 1 ]: Class 'getRange' not found ~ APPPATH/classes/controller/ajax.php [ 107 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 15:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 23:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 23:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}