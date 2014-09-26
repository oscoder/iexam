<?php

class __Mustache_4e2fbbb3eb354986943b39a2c95e9d76 extends Mustache_Template
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
        if ($partial = $this->mustache->loadPartial('layout._template.styles')) {
            $buffer .= $partial->renderInternal($context, $indent . '		');
        }
        $buffer .= $indent . '	</head>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<body class="login-layout">
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '		<div class="main-container">
';
        $buffer .= $indent . '			<div class="main-content">
';
        $buffer .= $indent . '				<div class="row">
';
        $buffer .= $indent . '				 <div class="col-sm-10 col-sm-offset-1">
';
        if ($partial = $this->mustache->loadPartial('page.content')) {
            $buffer .= $partial->renderInternal($context, $indent . '					');
        }
        $buffer .= $indent . '				 </div><!-- /.col -->
';
        $buffer .= $indent . '				</div><!-- /.row -->
';
        $buffer .= $indent . '			</div><!-- /.main-content -->
';
        $buffer .= $indent . '		</div><!-- /.main-container -->
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('layout._template.scripts')) {
            $buffer .= $partial->renderInternal($context, $indent . '		');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }
}
