<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-09-15 19:18:19 --- ERROR: ErrorException [ 1 ]: Call to undefined function defind() ~ APPPATH/classes/model/user.php [ 1 ]
2014-09-15 19:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/auth.php [ 33 ]
2014-09-15 19:19:15 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 159 ]
2014-09-15 19:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2014-09-15 19:40:46 --- ERROR: Error reading session data: 
2014-09-15 19:45:20 --- ERROR: ErrorException [ 4 ]: parse error, expecting `')'' ~ MODPATH/orm/classes/kohana/auth/orm.php [ 86 ]
2014-09-15 19:46:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1233 ]
2014-09-15 19:49:58 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1233 ]
2014-09-15 19:51:20 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1233 ]
2014-09-15 19:51:36 --- ERROR: Database_Exception [ 1364 ]: Field 'isadmin' doesn't have a default value [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('admin', 'c145edc30d292c3cb51e5e8db087ad6821427a748010c92b39674e79d7398e58', 'csauthor@gmail.com') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2014-09-15 19:52:12 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'password' at row 1 [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('admin', 'c145edc30d292c3cb51e5e8db087ad6821427a748010c92b39674e79d7398e58', 'csauthor@gmail.com') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2014-09-15 19:54:15 --- ERROR: Kohana_Exception [ 0 ]: The logins property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 746 ]
2014-09-15 19:58:00 --- ERROR: Kohana_Exception [ 0 ]: The logins property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 746 ]
2014-09-15 19:58:03 --- ERROR: ErrorException [ 4 ]: parse error ~ xdebug://debug-eval [ 1 ]
2014-09-15 19:59:41 --- ERROR: Kohana_Exception [ 0 ]: The logins property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 746 ]
2014-09-15 20:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 120 ]
2014-09-15 20:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 120 ]
2014-09-15 20:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 120 ]
2014-09-15 20:31:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Login::$auth_required ~ APPPATH/classes/controller/auth.php [ 42 ]
2014-09-15 22:21:00 --- ERROR: Error reading session data: 
2014-09-15 23:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2014-09-15 23:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2014-09-15 23:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2014-09-15 23:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2014-09-15 23:07:50 --- ERROR: ErrorException [ 1 ]: Class 'View_Pages_User_Login' not found ~ APPPATH/classes/controller/user.php [ 35 ]
2014-09-15 23:08:21 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/user.php [ 59 ]
2014-09-15 23:09:24 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/controller/user.php [ 59 ]
2014-09-15 23:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]