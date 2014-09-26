<?php

class __Mustache_d7a1093e7124ea5429520e379c2d0207 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'page.stats' section
        $value = $context->findDot('page.stats');
        $buffer .= $this->section77ffd4e9c3091edf802584d42b04a01e($context, $indent, $value);

        return $buffer;
    }

    private function section52f4a726f8b9e39065d04dccca6439eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{size}}';
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
                
                $value = $this->resolveValue($context->find('size'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fd308eba71ab937559df890a630fa24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{color}}';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('color'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section77ffd4e9c3091edf802584d42b04a01e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span class="btn btn-app btn-sm {{btn-color}} no-hover">
	<span class="line-height-1 {{#size}}{{size}}{{/size}}{{^size}}bigger-170{{/size}}{{#color}} {{color}}{{/color}}">
		{{value}}
	</span>
	<br />
	<span class="line-height-1 smaller-90">
		{{name}}
	</span>
</span>
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
                
                $buffer .= $indent . '<span class="btn btn-app btn-sm ';
                $value = $this->resolveValue($context->find('btn-color'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' no-hover">
';
                $buffer .= $indent . '	<span class="line-height-1 ';
                // 'size' section
                $value = $context->find('size');
                $buffer .= $this->section52f4a726f8b9e39065d04dccca6439eb($context, $indent, $value);
                // 'size' inverted section
                $value = $context->find('size');
                if (empty($value)) {
                    
                    $buffer .= 'bigger-170';
                }
                // 'color' section
                $value = $context->find('color');
                $buffer .= $this->section6fd308eba71ab937559df890a630fa24($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '		';
                $value = $this->resolveValue($context->find('value'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '	</span>
';
                $buffer .= $indent . '	<br />
';
                $buffer .= $indent . '	<span class="line-height-1 smaller-90">
';
                $buffer .= $indent . '		';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '	</span>
';
                $buffer .= $indent . '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
