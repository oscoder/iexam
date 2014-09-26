<?php

class __Mustache_de758aa5dd31cbbd6d151f85b2a270ce extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div id="forgot-box" class="forgot-box widget-box no-border">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="widget-body">
';
        $buffer .= $indent . '	 <div class="widget-main">
';
        $buffer .= $indent . '		<h4 class="header red lighter bigger"><i class="ace-icon fa fa-key"></i> Retrieve Password</h4>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="space-6"></div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '			Enter your email and to receive instructions
';
        $buffer .= $indent . '		</p>
';
        $buffer .= $indent . '		<form>
';
        $buffer .= $indent . '			 <fieldset>
';
        $buffer .= $indent . '				<label class="block clearfix">
';
        $buffer .= $indent . '					<span class="block input-icon input-icon-right">
';
        $buffer .= $indent . '						<input type="email" class="form-control" placeholder="Email" />
';
        $buffer .= $indent . '						<i class="ace-icon fa fa-envelope"></i>
';
        $buffer .= $indent . '					</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<div class="clearfix">
';
        $buffer .= $indent . '					<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
';
        $buffer .= $indent . '						<i class="ace-icon fa fa-lightbulb-o"></i>
';
        $buffer .= $indent . '						<span class="bigger-110">Send Me!</span>
';
        $buffer .= $indent . '					</button>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			  </fieldset>
';
        $buffer .= $indent . '		</form>
';
        $buffer .= $indent . '	 </div><!-- /.widget-main -->
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	 <div class="toolbar center">
';
        $buffer .= $indent . '		<a href="#" data-target="#login-box" class="back-to-login-link">Back to login <i class="ace-icon fa fa-arrow-right"></i></a>
';
        $buffer .= $indent . '	 </div>
';
        $buffer .= $indent . '	</div><!-- /.widget-body -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div><!-- /.forgot-box -->';

        return $buffer;
    }
}
