<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-09-17 01:36:29 --- ERROR: ErrorException [ 4096 ]: Object of class View_Pages_Admin_Admin could not be converted to string ~ SYSPATH/classes/kohana/response.php [ 225 ]
2014-09-17 01:37:26 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in /Users/oscoder/Webserver/iexam/application/classes/controller/user.php on line 35 and defined ~ MODPATH/kostache/classes/kohana/kostache.php [ 36 ]
2014-09-17 01:42:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method View_Pages_Admin_Login::set() ~ APPPATH/classes/controller/user.php [ 36 ]
2014-09-17 01:46:01 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "kostache" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 01:47:25 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "kostache" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 01:48:31 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "kostache" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 01:55:44 --- ERROR: ErrorException [ 1 ]: Cannot access parent:: when current class scope has no parent ~ APPPATH/classes/view/pages/admin/admin.php [ 16 ]
2014-09-17 02:07:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method View_Pages_Admin_Login::set() ~ APPPATH/classes/controller/user.php [ 37 ]
2014-09-17 02:08:57 --- ERROR: ErrorException [ 1 ]: Cannot use object of type View_Pages_Admin_Login as array ~ APPPATH/classes/controller/user.php [ 37 ]
2014-09-17 02:11:52 --- ERROR: ErrorException [ 1 ]: Cannot use object of type View_Pages_Admin_Login as array ~ APPPATH/classes/controller/user.php [ 37 ]
2014-09-17 02:16:32 --- ERROR: ErrorException [ 4096 ]: Object of class View_Pages_Admin_Admin could not be converted to string ~ SYSPATH/classes/kohana/response.php [ 225 ]
2014-09-17 14:58:08 --- ERROR: ErrorException [ 1 ]: Class 'Sidenav' not found ~ MODPATH/aceadmin/classes/kohana/aceadmin.php [ 42 ]
2014-09-17 15:01:26 --- ERROR: ErrorException [ 2 ]: file_get_contents(/Users/oscoder/Webserver/iexam/modules/aceadmin/classes/kohana/..//app/data/pages/.json): failed to open stream: No such file or directory ~ MODPATH/aceadmin/classes/aceadmin/page.php [ 21 ]
2014-09-17 15:03:09 --- ERROR: ErrorException [ 1 ]: Class 'CSV' not found ~ MODPATH/aceadmin/classes/aceadmin/page.php [ 84 ]
2014-09-17 15:04:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kostache::setPartialsLoader() ~ MODPATH/aceadmin/classes/kohana/aceadmin.php [ 70 ]
2014-09-17 15:07:43 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Kostache::$_engine ~ APPPATH/classes/controller/admin.php [ 16 ]
2014-09-17 15:09:44 --- ERROR: ErrorException [ 1 ]: Class 'CustomLoader' not found ~ MODPATH/aceadmin/classes/kohana/aceadmin.php [ 71 ]
2014-09-17 15:10:29 --- ERROR: ErrorException [ 1 ]: Cannot access private property Mustache_Engine::$cache ~ MODPATH/aceadmin/classes/kohana/aceadmin.php [ 77 ]
2014-09-17 15:13:51 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 15:26:22 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 15:29:22 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 15:30:06 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 15:31:27 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 15:33:17 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 15:36:18 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 15:37:14 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 16:59:19 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 17:02:38 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "

	
		
		
		
		{{page.title}} - {{site.title}}	
		
		
		
		
		{{> layout._template.styles}}{{! there are also some scripts as well }}
	

	
	{{> layout.navbar}}

		
		 
		 try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		 

		 {{> layout.sidebar}}

			
			  {{^page.no-breadcrumbs}}{{!show breadcrumbs only if a "no-breadcrumbs" variable is "not" defined}}
				{{> layout.breadcrumbs}}
			  {{/page.no-breadcrumbs}}

				
					{{> layout.settings}}

				   
					{{^page.no-header}}{{!if no such thing as "no-header", then print header}}
					
						{{page.title}} {{#page.description}} {{page.description}}{{/page.description}}
					
					{{/page.no-header}}

					
					 

{{> page.content }}

					 
					
				   

				
			
			
			{{> layout.footer}}


			
				
			
		

		{{> layout._template.scripts}}
	

" not found ~ MODPATH/kostache/classes/mustache/loader/kohana.php [ 36 ]
2014-09-17 17:06:53 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Aceadmin_CustomLoader::__construct(), called in /Users/oscoder/Webserver/iexam/modules/aceadmin/classes/kohana/aceadmin.php on line 71 and defined ~ MODPATH/aceadmin/classes/aceadmin/customloader.php [ 14 ]
2014-09-17 17:26:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Aceadmin::$_page ~ MODPATH/aceadmin/classes/kohana/aceadmin.php [ 71 ]
2014-09-17 17:30:39 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Mustache_Engine::setLoader() must implement interface Mustache_Loader, null given, called in /Users/oscoder/Webserver/iexam/modules/aceadmin/classes/kohana/aceadmin.php on line 70 and defined ~ MODPATH/kostache/classes/mustache/engine.php [ 265 ]
2014-09-17 17:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/aceadmin/classes/assets/css/bootstrap.min.css" ~ SYSPATH/classes/kohana/request.php [ 759 ]
2014-09-17 17:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/aceadmin/classes/assets/css/bootstrap.min.css" ~ SYSPATH/classes/kohana/request.php [ 759 ]
2014-09-17 17:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/aceadmin/classes/assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 759 ]
2014-09-17 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/aceadmin/classes/assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 759 ]
2014-09-17 17:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/aceadmin/classes/assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 759 ]
2014-09-17 17:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/aceadmin/classes/assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 759 ]
2014-09-17 19:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/aceadmin/classes/assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 759 ]
2014-09-17 19:43:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Mustache_Loader_FilesystemLoader::_construct() ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 22 ]
2014-09-17 19:44:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 34 ]
2014-09-17 19:45:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 34 ]
2014-09-17 19:45:20 --- ERROR: ErrorException [ 4 ]: parse error ~ xdebug://debug-eval [ 1 ]
2014-09-17 19:45:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 34 ]
2014-09-17 19:46:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 34 ]
2014-09-17 20:41:48 --- ERROR: ErrorException [ 2 ]: file_get_contents(/Users/oscoder/Webserver/iexam/application/classes/views/layouts/../app/data/common/site.json): failed to open stream: No such file or directory ~ APPPATH/classes/views/layouts/login.php [ 26 ]
2014-09-17 20:54:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Views_Layouts_Login::$_base_dir ~ APPPATH/classes/views/layouts/login.php [ 17 ]
2014-09-17 20:55:22 --- ERROR: ErrorException [ 1 ]: Call to undefined function _load_file() ~ APPPATH/classes/views/layouts/login.php [ 26 ]
2014-09-17 20:58:38 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/views/layouts/login.php [ 45 ]
2014-09-17 20:59:09 --- ERROR: ErrorException [ 1 ]: Call to undefined function _load_file() ~ APPPATH/classes/views/layouts/login.php [ 37 ]
2014-09-17 21:01:21 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "app/data/common/site" not found ~ APPPATH/classes/views/layouts/login.php [ 21 ]
2014-09-17 21:04:46 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "app/data/common/site" not found ~ APPPATH/classes/views/layouts/login.php [ 21 ]
2014-09-17 21:05:55 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "app/data/common/site" not found ~ APPPATH/classes/views/layouts/login.php [ 21 ]
2014-09-17 21:12:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_name ~ APPPATH/classes/views/layouts/login.php [ 53 ]
2014-09-17 21:13:12 --- ERROR: ErrorException [ 2 ]: file_get_contents(data/pages/index.json): failed to open stream: No such file or directory ~ MODPATH/koace/classes/koace/page.php [ 21 ]
2014-09-17 21:14:35 --- ERROR: ErrorException [ 2 ]: file_get_contents(data/pages/index.json): failed to open stream: No such file or directory ~ MODPATH/koace/classes/koace/page.php [ 21 ]
2014-09-17 21:30:07 --- ERROR: ErrorException [ 4 ]: parse error, expecting `','' or `')'' ~ MODPATH/koace/classes/koace/page.php [ 27 ]
2014-09-17 21:31:06 --- ERROR: ErrorException [ 8 ]: Undefined index: base ~ MODPATH/koace/classes/koace/page.php [ 34 ]
2014-09-17 21:32:29 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "data/common/script-mapping.json" not found ~ MODPATH/koace/classes/koace/page.php [ 18 ]
2014-09-17 21:33:44 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "data/common/script-mapping.json" not found ~ MODPATH/koace/classes/koace/page.php [ 18 ]
2014-09-17 21:37:59 --- ERROR: ErrorException [ 4 ]: parse error ~ xdebug://debug-eval [ 1 ]
2014-09-17 21:40:36 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "data/common/script-mapping.json" not found ~ MODPATH/koace/classes/koace/page.php [ 18 ]
2014-09-17 21:41:24 --- ERROR: Kohana_Exception [ 0 ]: Mustache template "data/common/script-mapping.json" not found ~ MODPATH/koace/classes/koace/page.php [ 18 ]
2014-09-17 21:45:29 --- ERROR: Mustache_Exception_RuntimeException [ 0 ]: FilesystemLoader baseDir must be a directory: aceui ~ MODPATH/koace/classes/mustache/loader/filesystemloader.php [ 57 ]
2014-09-17 21:46:42 --- ERROR: Mustache_Exception_RuntimeException [ 0 ]: FilesystemLoader baseDir must be a directory: aceui ~ MODPATH/koace/classes/mustache/loader/filesystemloader.php [ 57 ]
2014-09-17 21:56:26 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'parent' ~ xdebug://debug-eval [ 2 ]
2014-09-17 21:58:36 --- ERROR: Mustache_Exception_RuntimeException [ 0 ]: FilesystemLoader baseDir must be a directory: /Users/oscoder/Webserver/iexam/modules/koace/classes/mustache/loader/../../../../../../application/aceui/views ~ MODPATH/koace/classes/mustache/loader/filesystemloader.php [ 57 ]
2014-09-17 22:00:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/koace/classes/kohana/koace.php [ 39 ]
2014-09-17 22:01:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/koace/classes/kohana/koace.php [ 39 ]
2014-09-17 22:02:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/koace/classes/kohana/koace.php [ 39 ]
2014-09-17 22:09:05 --- ERROR: ErrorException [ 4096 ]: Object of class __Mustache_ee6dc9c0cddd757a0516024abd0df69b could not be converted to string ~ MODPATH/koace/classes/mustache/engine.php [ 605 ]
2014-09-17 22:09:34 --- ERROR: ErrorException [ 4096 ]: Object of class __Mustache_ee6dc9c0cddd757a0516024abd0df69b could not be converted to string ~ MODPATH/koace/classes/mustache/engine.php [ 605 ]
2014-09-17 22:11:57 --- ERROR: ErrorException [ 4096 ]: Object of class __Mustache_ee6dc9c0cddd757a0516024abd0df69b could not be converted to string ~ MODPATH/koace/classes/mustache/engine.php [ 605 ]
2014-09-17 22:13:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 32 ]
2014-09-17 22:15:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Mustache_Loader_KoaceLoader::$Layouts_name ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 37 ]
2014-09-17 22:22:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Mustache_Loader_KoaceLoader::$_Layouts_name ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 37 ]
2014-09-17 22:23:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Mustache_Loader_KoaceLoader::$_Layouts_name ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 37 ]
2014-09-17 22:27:28 --- ERROR: ErrorException [ 1 ]: Class 'Views_Layouts_Login' not found ~ APPPATH/classes/controller/user.php [ 35 ]
2014-09-17 22:28:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Mustache_Loader_KoaceLoader::$_layout_name ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 37 ]
2014-09-17 22:28:55 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 25 ]
2014-09-17 22:34:19 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 22:36:38 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 22:36:54 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 22:38:00 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 22:39:26 --- ERROR: Mustache_Exception_UnknownTemplateException [ 0 ]: Unknown template: /layouts/.mustache ~ MODPATH/koace/classes/mustache/loader/filesystemloader.php [ 102 ]
2014-09-17 22:48:53 --- ERROR: ErrorException [ 4 ]: parse error, expecting `"identifier (T_STRING)"' ~ xdebug://debug-eval [ 2 ]
2014-09-17 22:49:00 --- ERROR: ErrorException [ 4 ]: parse error ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 28 ]
2014-09-17 22:49:29 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 22:50:46 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 22:53:08 --- ERROR: ErrorException [ 4 ]: parse error ~ xdebug://debug-eval [ 1 ]
2014-09-17 22:53:08 --- ERROR: ErrorException [ 1 ]: Class 'Views_Layouts_Login' not found ~ APPPATH/classes/controller/user.php [ 35 ]
2014-09-17 22:53:09 --- ERROR: ErrorException [ 1 ]: Class 'Views_Layouts_Login' not found ~ APPPATH/classes/controller/user.php [ 35 ]
2014-09-17 22:53:09 --- ERROR: ErrorException [ 1 ]: Class 'Views_Layouts_Login' not found ~ APPPATH/classes/controller/user.php [ 35 ]
2014-09-17 23:55:02 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 23:55:02 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 23:55:02 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 23:55:03 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 23:55:03 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]
2014-09-17 23:55:03 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, object given ~ MODPATH/koace/classes/mustache/loader/koaceloader.php [ 26 ]