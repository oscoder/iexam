<?php

class __Mustache_d46c86ab8c3e389e2c0bfec74c5970ed extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'page.friends' section
        $value = $context->findDot('page.friends');
        $buffer .= $this->section9fc43568fde546202d05e679f404fbf7($context, $indent, $value);

        return $buffer;
    }

    private function section8349c34453eb3c71cc3ee266104e7ac0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'orange';
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
                
                $buffer .= 'orange';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE933477cd380e541dace7b483bbc2628(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'grey';
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
                
                $buffer .= 'grey';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF62c2bad06960ca3e30310f81374698b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'red';
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
                
                $buffer .= 'red';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section588428fc7b591d06a2bb3438ee00909f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'green';
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
                
                $buffer .= 'green';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fc43568fde546202d05e679f404fbf7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="itemdiv memberdiv"><div class="inline pos-rel">
	<div class="user">
		<a href="#">
			<img src="{{{path.assets}}}/avatars/{{{avatar}}}" alt="{{name}}\'s avatar">
		</a>
	</div>
	
	<div class="body">
		<div class="name">
			<a href="#">
			<span class="user-status status-{{status}}"></span>
			{{name}}
			</a>
		</div>
	</div>

	<div class="popover"><div class="arrow"></div><div class="popover-content">
		<div class="bolder">{{occupation}}</div>
		<div class="time">
			<i class="ace-icon fa fa-clock-o middle bigger-120 {{#online}}orange{{/online}}{{#offline}}grey{{/offline}}{{#busy}}red{{/busy}}{{#idle}}orange{{/idle}}"></i>
			<span class="{{#online}}green{{/online}}{{#offline}}grey{{/offline}}{{#busy}}grey{{/busy}}">
				{{time}}
			</span>
		</div>
		
		<div class="hr dotted hr-8"></div>
		<div class="tools action-buttons">
			<a href="#"><i class="ace-icon fa fa-facebook-square blue bigger-150"></i></a>
			<a href="#"><i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i></a>
			<a href="#"><i class="ace-icon fa fa-google-plus-square red bigger-150"></i></a>
		</div>
	</div></div>
</div></div>
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
                
                $buffer .= $indent . '<div class="itemdiv memberdiv"><div class="inline pos-rel">
';
                $buffer .= $indent . '	<div class="user">
';
                $buffer .= $indent . '		<a href="#">
';
                $buffer .= $indent . '			<img src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/avatars/';
                $value = $this->resolveValue($context->find('avatar'), $context, $indent);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'s avatar">
';
                $buffer .= $indent . '		</a>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	
';
                $buffer .= $indent . '	<div class="body">
';
                $buffer .= $indent . '		<div class="name">
';
                $buffer .= $indent . '			<a href="#">
';
                $buffer .= $indent . '			<span class="user-status status-';
                $value = $this->resolveValue($context->find('status'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>
';
                $buffer .= $indent . '			';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '			</a>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	<div class="popover"><div class="arrow"></div><div class="popover-content">
';
                $buffer .= $indent . '		<div class="bolder">';
                $value = $this->resolveValue($context->find('occupation'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '		<div class="time">
';
                $buffer .= $indent . '			<i class="ace-icon fa fa-clock-o middle bigger-120 ';
                // 'online' section
                $value = $context->find('online');
                $buffer .= $this->section8349c34453eb3c71cc3ee266104e7ac0($context, $indent, $value);
                // 'offline' section
                $value = $context->find('offline');
                $buffer .= $this->sectionE933477cd380e541dace7b483bbc2628($context, $indent, $value);
                // 'busy' section
                $value = $context->find('busy');
                $buffer .= $this->sectionF62c2bad06960ca3e30310f81374698b($context, $indent, $value);
                // 'idle' section
                $value = $context->find('idle');
                $buffer .= $this->section8349c34453eb3c71cc3ee266104e7ac0($context, $indent, $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '			<span class="';
                // 'online' section
                $value = $context->find('online');
                $buffer .= $this->section588428fc7b591d06a2bb3438ee00909f($context, $indent, $value);
                // 'offline' section
                $value = $context->find('offline');
                $buffer .= $this->sectionE933477cd380e541dace7b483bbc2628($context, $indent, $value);
                // 'busy' section
                $value = $context->find('busy');
                $buffer .= $this->sectionE933477cd380e541dace7b483bbc2628($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '				';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '			</span>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		<div class="hr dotted hr-8"></div>
';
                $buffer .= $indent . '		<div class="tools action-buttons">
';
                $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-facebook-square blue bigger-150"></i></a>
';
                $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i></a>
';
                $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-google-plus-square red bigger-150"></i></a>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div></div>
';
                $buffer .= $indent . '</div></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
