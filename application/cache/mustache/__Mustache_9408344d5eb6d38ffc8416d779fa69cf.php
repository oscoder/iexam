<?php

class __Mustache_9408344d5eb6d38ffc8416d779fa69cf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<li class="light-blue';
        // 'page.side_menu_collapsible' section
        $value = $context->findDot('page.side_menu_collapsible');
        $buffer .= $this->section851add562f14f64a406fa91788a79ce9($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '	<a data-toggle="dropdown" href="#" class="dropdown-toggle">
';
        $buffer .= $indent . '		<img class="nav-user-photo" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/avatars/user.jpg" alt="Jason\'s Photo" />
';
        $buffer .= $indent . '		<span class="user-info">
';
        $buffer .= $indent . '			<small>Welcome,</small> Jason
';
        $buffer .= $indent . '		</span>
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-caret-down"></i>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '	<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-cog"></i> 设置</a></li>
';
        $buffer .= $indent . '		<li><a href="';
        // 'createLinkFunction' section
        $value = $context->find('createLinkFunction');
        $buffer .= $this->sectionFf31a99dbdfb4f3ced56be051ebc9c0e($context, $indent, $value);
        $buffer .= '"><i class="ace-icon fa fa-user"></i> Profile</a></li>
';
        $buffer .= $indent . '		<li class="divider"></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-power-off"></i> Logout</a></li>
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section851add562f14f64a406fa91788a79ce9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' user-min';
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
                
                $buffer .= ' user-min';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf31a99dbdfb4f3ced56be051ebc9c0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'profile';
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
                
                $buffer .= 'profile';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
