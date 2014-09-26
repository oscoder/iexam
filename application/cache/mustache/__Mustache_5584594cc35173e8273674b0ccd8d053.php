<?php

class __Mustache_5584594cc35173e8273674b0ccd8d053 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- bootstrap & fontawesome -->
';
        $buffer .= $indent . '<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/bootstrap.min.css" />';
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('layout._template.fontawesome')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- text fonts -->
';
        if ($partial = $this->mustache->loadPartial('layout._template.fonts')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- ace styles -->
';
        $buffer .= $indent . '<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace.min.css" />
';
        $buffer .= $indent . '<!--[if lte IE 9]>
';
        $buffer .= $indent . '	<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-part2.min.css" />
';
        $buffer .= $indent . '<![endif]-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-rtl.min.css" />
';
        $buffer .= $indent . '<!--[if lte IE 9]>
';
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-ie.min.css" />
';
        $buffer .= $indent . '<![endif]-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'site.onpage_help' section
        $value = $context->findDot('site.onpage_help');
        $buffer .= $this->section458aab718d4f62b8b04ccc65b26cb98f($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
';
        $buffer .= $indent . '<!--[if lt IE 9]>
';
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/html5shiv.js"></script>
';
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/respond.min.js"></script>
';
        $buffer .= $indent . '<![endif]-->';

        return $buffer;
    }

    private function section458aab718d4f62b8b04ccc65b26cb98f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! include "on page" help style }}
<link rel="stylesheet" href="{{{path.assets}}}/css/ace.onpage-help.css" />
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/css/ace.onpage-help.css" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
