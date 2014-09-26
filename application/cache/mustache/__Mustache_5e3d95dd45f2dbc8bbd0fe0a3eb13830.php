<?php

class __Mustache_5e3d95dd45f2dbc8bbd0fe0a3eb13830 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<ul class="ace-thumbnails">
';
        // 'page.photos' section
        $value = $context->findDot('page.photos');
        $buffer .= $this->section6fd518596b43d1db59ed4874527e1bec($context, $indent, $value);
        $buffer .= $indent . '</ul>';

        return $buffer;
    }

    private function section6fd518596b43d1db59ed4874527e1bec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li>
	<a href="#" data-rel="colorbox">
	   <img alt="150x150" src="{{{path.images}}}/gallery/{{thumb}}">
	   <div class="text">
		<div class="inner">{{title}}</div>
	   </div>
	</a>
	<div class="tools tools-bottom">
		<a href="#"><i class="ace-icon fa fa-link"></i></a>
		<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
		<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
		<a href="#"><i class="ace-icon fa fa-times red"></i></a>
	</div>
  </li>
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
                
                $buffer .= $indent . '  <li>
';
                $buffer .= $indent . '	<a href="#" data-rel="colorbox">
';
                $buffer .= $indent . '	   <img alt="150x150" src="';
                $value = $this->resolveValue($context->findDot('path.images'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/gallery/';
                $value = $this->resolveValue($context->find('thumb'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '	   <div class="text">
';
                $buffer .= $indent . '		<div class="inner">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '	   </div>
';
                $buffer .= $indent . '	</a>
';
                $buffer .= $indent . '	<div class="tools tools-bottom">
';
                $buffer .= $indent . '		<a href="#"><i class="ace-icon fa fa-link"></i></a>
';
                $buffer .= $indent . '		<a href="#"><i class="ace-icon fa fa-paperclip"></i></a>
';
                $buffer .= $indent . '		<a href="#"><i class="ace-icon fa fa-pencil"></i></a>
';
                $buffer .= $indent . '		<a href="#"><i class="ace-icon fa fa-times red"></i></a>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
