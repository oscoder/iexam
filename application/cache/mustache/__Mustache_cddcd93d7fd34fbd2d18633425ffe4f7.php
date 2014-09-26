<?php

class __Mustache_cddcd93d7fd34fbd2d18633425ffe4f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="row">
';
        // 'treat_as_comment___remove' section
        $value = $context->find('treat_as_comment___remove');
        $buffer .= $this->sectionF8787fa0aa4fdf91f8cb27c613a87c58($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-xs-12">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- #section:pages/inbox -->
';
        $buffer .= $indent . '  <div class="tabbable">
';
        if ($partial = $this->mustache->loadPartial('page.tabs')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="tab-content no-border no-padding">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	 <div id="inbox" class="tab-pane in active">
';
        $buffer .= $indent . '		<div class="message-container">
';
        if ($partial = $this->mustache->loadPartial('page.navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '		 ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '		 <div class="message-list-container">
';
        if ($partial = $this->mustache->loadPartial('page.message_list')) {
            $buffer .= $partial->renderInternal($context, $indent . '		  ');
        }
        $buffer .= $indent . '		 </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.message_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '		 ');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	 </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</div><!-- /.tab-content -->
';
        $buffer .= $indent . '  </div><!-- /.tabbable -->
';
        $buffer .= $indent . '  <!-- /section:pages/inbox -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' </div><!-- /.col -->
';
        $buffer .= $indent . '</div><!-- /.row -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.message_form')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.message_content')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function sectionF8787fa0aa4fdf91f8cb27c613a87c58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--
	You can uncomment the following for another style of inbox menus.
	Just make sure the next ".col-xs-12" becomes ".col-xs-10" or something.
	And you should also remove tabs, etc and just keep ".message-container" element.
-->

<!--
  <div class="col-xs-2 inbox-menu">
	<div class="center">
		<a href="#" class="btn btn-purple btn-new-mail">
			<i class="ace-icon fa fa-envelope"></i>
			Write Mail
		</a>
	</div>
	<div class="space-6"></div>
	{{> page.folders}}
  </div>

  <div class="vspace-8-xs"></div>
-->
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
                
                $buffer .= $indent . '<!--
';
                $buffer .= $indent . '	You can uncomment the following for another style of inbox menus.
';
                $buffer .= $indent . '	Just make sure the next ".col-xs-12" becomes ".col-xs-10" or something.
';
                $buffer .= $indent . '	And you should also remove tabs, etc and just keep ".message-container" element.
';
                $buffer .= $indent . '-->
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<!--
';
                $buffer .= $indent . '  <div class="col-xs-2 inbox-menu">
';
                $buffer .= $indent . '	<div class="center">
';
                $buffer .= $indent . '		<a href="#" class="btn btn-purple btn-new-mail">
';
                $buffer .= $indent . '			<i class="ace-icon fa fa-envelope"></i>
';
                $buffer .= $indent . '			Write Mail
';
                $buffer .= $indent . '		</a>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	<div class="space-6"></div>
';
                if ($partial = $this->mustache->loadPartial('page.folders')) {
                    $buffer .= $partial->renderInternal($context, $indent . '	');
                }
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div class="vspace-8-xs"></div>
';
                $buffer .= $indent . '-->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
