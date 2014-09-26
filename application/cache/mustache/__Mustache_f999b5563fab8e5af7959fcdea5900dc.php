<?php

class __Mustache_f999b5563fab8e5af7959fcdea5900dc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- #section:basics/navbar.layout -->
';
        $buffer .= $indent . '<div id="navbar" class="navbar navbar-default
';
        // 'page.user_menu_collapsible' section
        $value = $context->findDot('page.user_menu_collapsible');
        $buffer .= $this->sectionC9cbe018439bef1cd577b1968eff150a($context, $indent, $value);
        $buffer .= '
';
        // 'page.user_menu_collapsible' inverted section
        $value = $context->findDot('page.user_menu_collapsible');
        if (empty($value)) {
            
            // 'page.top_menu' section
            $value = $context->findDot('page.top_menu');
            $buffer .= $this->sectionC9cbe018439bef1cd577b1968eff150a($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        // 'page.horizontal-menu' section
        $value = $context->findDot('page.horizontal-menu');
        $buffer .= $this->sectionEababbf00f047499031d7842bf0315f9($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <script type="text/javascript">
';
        $buffer .= $indent . '	try{ace.settings.check(\'navbar\' , \'fixed\')}catch(e){}
';
        $buffer .= $indent . '  </script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="navbar-container" id="navbar-container">
';
        // 'page.side_menu_collapsible' inverted section
        $value = $context->findDot('page.side_menu_collapsible');
        if (empty($value)) {
            
            // 'page.responsive_style_2' inverted section
            $value = $context->findDot('page.responsive_style_2');
            if (empty($value)) {
                
                $buffer .= $indent . '	    <!-- #section:basics/sidebar.mobile.toggle -->
';
                $buffer .= $indent . '		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
';
                $buffer .= $indent . '			<span class="sr-only">Toggle sidebar</span>
';
                $buffer .= $indent . '			<span class="icon-bar"></span>
';
                $buffer .= $indent . '			<span class="icon-bar"></span>
';
                $buffer .= $indent . '			<span class="icon-bar"></span>
';
                $buffer .= $indent . '		</button>
';
                $buffer .= $indent . '		<!-- /section:basics/sidebar.mobile.toggle -->
';
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="navbar-header pull-left">
';
        $buffer .= $indent . '	 <!-- #section:basics/navbar.layout.brand -->
';
        $buffer .= $indent . '	 <a href="#" class="navbar-brand">
';
        $buffer .= $indent . '		<small>
';
        $buffer .= $indent . '			<i class="';
        $value = $this->resolveValue($context->findDot('site.brand_icon'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '			';
        $value = $this->resolveValue($context->findDot('site.brand_text'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '		</small>
';
        $buffer .= $indent . '	 </a>
';
        $buffer .= $indent . '	 <!-- /section:basics/navbar.layout.brand -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<!-- #section:basics/navbar.dropdown -->
';
        $buffer .= $indent . '	<div class="navbar-buttons navbar-header pull-right ';
        // 'page.user_menu_collapsible' section
        $value = $context->findDot('page.user_menu_collapsible');
        $buffer .= $this->section44800381d400d22c07366a09c2440a03($context, $indent, $value);
        $buffer .= '" role="navigation">
';
        $buffer .= $indent . '	  <ul class="nav ace-nav">
';
        $buffer .= $indent . '			<!-- #section:basics/navbar.user_menu -->
';
        if ($partial = $this->mustache->loadPartial('layout.navbar.user_menu')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '			<!-- /section:basics/navbar.user_menu -->
';
        $buffer .= $indent . '	  </ul>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div><!-- /.navbar-container -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /section:basics/navbar.layout -->';

        return $buffer;
    }

    private function sectionC9cbe018439bef1cd577b1968eff150a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' navbar-collapse';
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
                
                $buffer .= $indent . ' navbar-collapse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEababbf00f047499031d7842bf0315f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' h-navbar';
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
                
                $buffer .= $indent . ' h-navbar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44800381d400d22c07366a09c2440a03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse navbar-collapse';
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
                
                $buffer .= ' collapse navbar-collapse';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
