<?php

class __Mustache_61c4922970f304076880bc817adff06a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<li class="grey">
';
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-tasks"></i>
';
        $buffer .= $indent . '		<span class="badge badge-grey">';
        $value = $this->resolveValue($context->findDot('layout.navbar_tasks.count'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
';
        $buffer .= $indent . '		<li class="dropdown-header">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-check"></i> ';
        $value = $this->resolveValue($context->findDot('layout.navbar_tasks.count'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Tasks to complete
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '
';
        // 'layout.navbar_tasks.latest' section
        $value = $context->findDot('layout.navbar_tasks.latest');
        $buffer .= $this->section8e1ea408bcc13da7c6d580a8609c5138($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<li class="dropdown-footer">
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				See tasks with details
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-arrow-right"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section8e1ea408bcc13da7c6d580a8609c5138(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<li>
			<a href="#">
				<div class="clearfix">
					<span class="pull-left">{{title}}</span>
					<span class="pull-right">{{percentage}}%</span>
				</div>
				<div class="progress progress-mini {{progress-class}}">
					<div style="width:{{percentage}}%" class="progress-bar {{progress-bar-class}}"></div>
				</div>
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
                
                $buffer .= $indent . '		<li>
';
                $buffer .= $indent . '			<a href="#">
';
                $buffer .= $indent . '				<div class="clearfix">
';
                $buffer .= $indent . '					<span class="pull-left">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '					<span class="pull-right">';
                $value = $this->resolveValue($context->find('percentage'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%</span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				<div class="progress progress-mini ';
                $value = $this->resolveValue($context->find('progress-class'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '					<div style="width:';
                $value = $this->resolveValue($context->find('percentage'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%" class="progress-bar ';
                $value = $this->resolveValue($context->find('progress-bar-class'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</a>
';
                $buffer .= $indent . '		</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
