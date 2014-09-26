<?php

class __Mustache_d68ede934b0fa5f9cf5353ab3f652c58 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html lang="en">
';
        $buffer .= $indent . '	<head>
';
        $buffer .= $indent . '		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
';
        $buffer .= $indent . '		<meta charset="utf-8" />
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<title>';
        $value = $this->resolveValue($context->findDot('page.title'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' - ';
        $value = $this->resolveValue($context->findDot('site.title'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</title>	
';
        $buffer .= $indent . '		<meta name="description" content="';
        $value = $this->resolveValue($context->findDot('page.description'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" />
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		';
        if ($partial = $this->mustache->loadPartial('layout._template.styles')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '
';
        $buffer .= $indent . '	</head>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<body class="no-skin">
';
        if ($partial = $this->mustache->loadPartial('layout.navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="main-container" id="main-container">
';
        $buffer .= $indent . '		 <script type="text/javascript">
';
        $buffer .= $indent . '		 try{ace.settings.check(\'main-container\' , \'fixed\')}catch(e){}
';
        $buffer .= $indent . '		 </script>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('layout.sidebar')) {
            $buffer .= $partial->renderInternal($context, $indent . '		 ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="main-content">
';
        $buffer .= $indent . '				<div class="page-content">
';
        if ($partial = $this->mustache->loadPartial('layout.settings')) {
            $buffer .= $partial->renderInternal($context, $indent . '					');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '				   <div class="page-content-area">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '					<div class="row">
';
        $buffer .= $indent . '					 <div class="col-xs-12">
';
        $buffer .= $indent . '<!-- PAGE CONTENT BEGINS -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- PAGE CONTENT ENDS -->
';
        $buffer .= $indent . '					 </div><!-- /.col -->
';
        $buffer .= $indent . '					</div><!-- /.row -->
';
        $buffer .= $indent . '				   </div><!-- /.page-content-area -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				</div><!-- /.page-content -->
';
        $buffer .= $indent . '			</div><!-- /.main-content -->
';
        $buffer .= $indent . '			
';
        if ($partial = $this->mustache->loadPartial('layout.footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</div><!-- /.main-container -->
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('layout._template.scripts')) {
            $buffer .= $partial->renderInternal($context, $indent . '		');
        }
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }
}
