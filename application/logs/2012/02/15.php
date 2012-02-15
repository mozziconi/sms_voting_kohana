<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-15 09:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 09:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 13:06:50 --- ERROR: Kohana_Exception [ 0 ]: The region property does not exist in the Model_Poll class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-02-15 13:06:50 --- STRACE: Kohana_Exception [ 0 ]: The region property does not exist in the Model_Poll class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/sms_voting_kohana/application/views/poll/list.php(6): Kohana_ORM->__get('region')
#1 /var/www/sms_voting_kohana/system/classes/kohana/view.php(61): include('/var/www/sms_vo...')
#2 /var/www/sms_voting_kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/sms_vo...', Array)
#3 /var/www/sms_voting_kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/sms_voting_kohana/application/views/template.php(39): Kohana_View->__toString()
#5 /var/www/sms_voting_kohana/system/classes/kohana/view.php(61): include('/var/www/sms_vo...')
#6 /var/www/sms_voting_kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/sms_vo...', Array)
#7 /var/www/sms_voting_kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/sms_voting_kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Poll))
#10 /var/www/sms_voting_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/sms_voting_kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2012-02-15 13:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 13:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 13:12:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 13:12:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 13:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 13:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 13:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 13:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 13:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 13:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 13:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 13:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 13:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 13:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_valid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 14:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-15 14:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gfx/icon_error.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/sms_voting_kohana/index.php(109): Kohana_Request->execute()
#1 {main}