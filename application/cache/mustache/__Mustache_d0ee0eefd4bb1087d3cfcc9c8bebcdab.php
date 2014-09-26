<?php

class __Mustache_d0ee0eefd4bb1087d3cfcc9c8bebcdab extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<li class="green">
';
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
';
        $buffer .= $indent . '		<span class="badge badge-success">';
        $value = $this->resolveValue($context->findDot('layout.navbar_messages.count'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '	<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
';
        $buffer .= $indent . '		<li class="dropdown-header">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-envelope-o"></i> ';
        $value = $this->resolveValue($context->findDot('layout.navbar_messages.count'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Messages
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<li class="dropdown-content">
';
        $buffer .= $indent . '			<ul class="dropdown-menu dropdown-navbar">
';
        // 'layout.navbar_messages.latest' section
        $value = $context->findDot('layout.navbar_messages.latest');
        $buffer .= $this->section3118fa5e94591e860dd4f41e7b10f8c8($context, $indent, $value);
        $buffer .= $indent . '			</ul>
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<li class="dropdown-footer">
';
        $buffer .= $indent . '			<a href="';
        // 'createLinkFunction' section
        $value = $context->find('createLinkFunction');
        $buffer .= $this->sectionFc875a68f3095c7a553812dec53af0df($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '				See all messages
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-arrow-right"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section3118fa5e94591e860dd4f41e7b10f8c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<li>
					<a href="#">
						<img src="{{path.assets}}/avatars/{{img}}" class="msg-photo" alt="{{name}}\'s Avatar">
						<span class="msg-body">
							<span class="msg-title">
								<span class="blue">{{name}}:</span>
								{{summary}}
							</span>
							<span class="msg-time">
								<i class="ace-icon fa fa-clock-o"></i> <span>{{time}}</span>
							</span>
						</span>
					</a>
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
                
                $buffer .= $indent . '				<li>
';
                $buffer .= $indent . '					<a href="#">
';
                $buffer .= $indent . '						<img src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/avatars/';
                $value = $this->resolveValue($context->find('img'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="msg-photo" alt="';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'s Avatar">
';
                $buffer .= $indent . '						<span class="msg-body">
';
                $buffer .= $indent . '							<span class="msg-title">
';
                $buffer .= $indent . '								<span class="blue">';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '								';
                $value = $this->resolveValue($context->find('summary'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '							</span>
';
                $buffer .= $indent . '							<span class="msg-time">
';
                $buffer .= $indent . '								<i class="ace-icon fa fa-clock-o"></i> <span>';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '							</span>
';
                $buffer .= $indent . '						</span>
';
                $buffer .= $indent . '					</a>
';
                $buffer .= $indent . '				</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc875a68f3095c7a553812dec53af0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'inbox';
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
                
                $buffer .= 'inbox';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
