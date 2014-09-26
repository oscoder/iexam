<?php

class __Mustache_ca3fbef4ba97517b26b433354ced709d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '	<!-- #section:pages/pricing.large -->
';
        // 'page.packages-large' section
        $value = $context->findDot('page.packages-large');
        $buffer .= $this->section4e3910421f2f909689030fd3f08d8f8e($context, $indent, $value);
        $buffer .= $indent . '	<!-- /section:pages/pricing.large -->
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="space-24"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h3 class="header smaller red">Small Style</h3>
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '	<!-- #section:pages/pricing.small-header -->
';
        $buffer .= $indent . '	<div class="col-xs-4 col-sm-3 pricing-span-header">
';
        $buffer .= $indent . '		<div class="widget-box transparent">
';
        $buffer .= $indent . '			<div class="widget-header">
';
        $buffer .= $indent . '				<h5 class="widget-title bigger lighter">Package Name</h5>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main no-padding">
';
        $buffer .= $indent . '				<ul class="list-unstyled list-striped pricing-table-header">
';
        $buffer .= $indent . '					<li>Disk Space </li>
';
        $buffer .= $indent . '					<li>Bandwidth </li>
';
        $buffer .= $indent . '					<li>Email Accounts </li>
';
        $buffer .= $indent . '					<li>MySQL Databases </li>
';
        $buffer .= $indent . '					<li>Ad Credit </li>
';
        $buffer .= $indent . '					<li>Free Domain </li>
';
        $buffer .= $indent . '				</ul>
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:pages/pricing.small-header -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<!-- #section:pages/pricing.small-body -->
';
        $buffer .= $indent . '	<div class="col-xs-8 col-sm-9 pricing-span-body">
';
        // 'page.packages-small' section
        $value = $context->findDot('page.packages-small');
        $buffer .= $this->section126024565e891dc088f76f40772604bf($context, $indent, $value);
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:pages/pricing.small-body -->
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section4e3910421f2f909689030fd3f08d8f8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> page.package-large}}
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
                
                if ($partial = $this->mustache->loadPartial('page.package-large')) {
                    $buffer .= $partial->renderInternal($context, $indent . '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section126024565e891dc088f76f40772604bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> page.package-small}}
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
                
                if ($partial = $this->mustache->loadPartial('page.package-small')) {
                    $buffer .= $partial->renderInternal($context, $indent . '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
