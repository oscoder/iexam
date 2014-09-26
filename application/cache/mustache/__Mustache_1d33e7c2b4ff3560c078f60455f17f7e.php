<?php

class __Mustache_1d33e7c2b4ff3560c078f60455f17f7e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- #section:pages/error -->
';
        $buffer .= $indent . '<div class="error-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="well">
';
        $buffer .= $indent . '	<h1 class="grey lighter smaller">
';
        $buffer .= $indent . '		<span class="blue bigger-125"><i class="ace-icon fa fa-random"></i> 500</span> Something Went Wrong
';
        $buffer .= $indent . '	</h1>
';
        $buffer .= $indent . '	<hr />
';
        $buffer .= $indent . '	<h3 class="lighter smaller"> But we are working <i class="ace-icon fa fa-wrench icon-animated-wrench bigger-125"></i> on it! </h3>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="space"></div>
';
        $buffer .= $indent . '	<div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<h4 class="lighter smaller">Meanwhile, try one of the following:</h4>
';
        $buffer .= $indent . '		<ul class="list-unstyled spaced inline bigger-110 margin-15">
';
        $buffer .= $indent . '			<li><i class="ace-icon fa fa-hand-o-right blue"></i> Read the faq</li>
';
        $buffer .= $indent . '			<li><i class="ace-icon fa fa-hand-o-right blue"></i> Give us more info on how this specific error occurred!</li>
';
        $buffer .= $indent . '		</ul>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<hr />
';
        $buffer .= $indent . '	<div class="space"></div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="center">
';
        $buffer .= $indent . '		<a href="javascript:history.back()" class="btn btn-grey"><i class="ace-icon fa fa-arrow-left"></i> Go Back</a>
';
        $buffer .= $indent . '		<a href="#" class="btn btn-primary"><i class="ace-icon fa fa-tachometer"></i> Dashboard</a>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /section:pages/error -->';

        return $buffer;
    }
}
