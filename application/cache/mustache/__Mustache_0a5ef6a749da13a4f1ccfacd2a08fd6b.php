<?php

class __Mustache_0a5ef6a749da13a4f1ccfacd2a08fd6b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="tabbable">
';
        $buffer .= $indent . '	<!-- #section:pages/faq -->
';
        $buffer .= $indent . '	<ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
';
        $buffer .= $indent . '	  <li class="active">
';
        $buffer .= $indent . '		<a data-toggle="tab" href="#faq-tab-1">
';
        $buffer .= $indent . '			<i class="blue ace-icon fa fa-question-circle bigger-120"></i>
';
        $buffer .= $indent . '			General
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a data-toggle="tab" href="#faq-tab-2">
';
        $buffer .= $indent . '			<i class="green ace-icon fa fa-user bigger-120"></i>
';
        $buffer .= $indent . '			Account
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a data-toggle="tab" href="#faq-tab-3">
';
        $buffer .= $indent . '			<i class="orange ace-icon fa fa-credit-card bigger-120"></i>
';
        $buffer .= $indent . '			Payments
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li class="dropdown">
';
        $buffer .= $indent . '		<a data-toggle="dropdown" class="dropdown-toggle" href="#">
';
        $buffer .= $indent . '			<i class="purple ace-icon fa fa-magic bigger-120"></i>
';
        $buffer .= $indent . '			Misc<i class="ace-icon fa fa-caret-down"></i>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<ul class="dropdown-menu dropdown-lighter dropdown-125">
';
        $buffer .= $indent . '		  <li>
';
        $buffer .= $indent . '			<a data-toggle="tab" href="#faq-tab-4">
';
        $buffer .= $indent . '				Affiliates
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		  </li>
';
        $buffer .= $indent . '		  <li>
';
        $buffer .= $indent . '			<a data-toggle="tab" href="#faq-tab-4">
';
        $buffer .= $indent . '				Merchants
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		  </li>
';
        $buffer .= $indent . '		</ul>
';
        $buffer .= $indent . '	  </li><!-- /.dropdown -->
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '	<!-- /section:pages/faq -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="tab-content no-border padding-24">
';
        $buffer .= $indent . '		<div id="faq-tab-1" class="tab-pane fade in active">
';
        $buffer .= $indent . '			<h4 class="blue">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-check bigger-110"></i> General Questions
';
        $buffer .= $indent . '			</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="space-8"></div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.faq1')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		  
';
        $buffer .= $indent . '		<div id="faq-tab-2" class="tab-pane fade">
';
        $buffer .= $indent . '			<h4 class="blue">
';
        $buffer .= $indent . '				<i class="green ace-icon fa fa-user bigger-110"></i> Account Questions
';
        $buffer .= $indent . '			</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="space-8"></div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.faq2')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		  
';
        $buffer .= $indent . '		<div id="faq-tab-3" class="tab-pane fade">
';
        $buffer .= $indent . '			<h4 class="blue">
';
        $buffer .= $indent . '				<i class="orange ace-icon fa fa-credit-card bigger-110"></i> Payment Questions
';
        $buffer .= $indent . '			</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="space-8"></div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.faq3')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		  
';
        $buffer .= $indent . '		<div id="faq-tab-4" class="tab-pane fade">
';
        $buffer .= $indent . '			<h4 class="blue">
';
        $buffer .= $indent . '				<i class="purple ace-icon fa fa-magic bigger-110"></i> Miscellaneous Questions
';
        $buffer .= $indent . '			</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="space-8"></div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.faq4')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '     </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
