<?php

class __Mustache_9b907b7762bf96ee68d668f38e082bed extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="login-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="center">
';
        $buffer .= $indent . '	<h1>
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-leaf green"></i>
';
        $buffer .= $indent . '		<span class="red">Ace</span>
';
        $buffer .= $indent . '		<span class="white" id="id-text2">Application</span>
';
        $buffer .= $indent . '	</h1>
';
        $buffer .= $indent . '	<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="space-6"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="position-relative">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('page.login_box')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '	
';
        if ($partial = $this->mustache->loadPartial('page.forgot_box')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '	
';
        if ($partial = $this->mustache->loadPartial('page.signup_box')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '	
';
        $buffer .= $indent . '</div><!-- /.position-relative -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="navbar-fixed-top align-right">
';
        $buffer .= $indent . '  <br /> &nbsp;
';
        $buffer .= $indent . '  <a id="btn-login-dark" href="#">Dark</a> &nbsp; <span class="blue">/</span> &nbsp;
';
        $buffer .= $indent . '  <a id="btn-login-blur" href="#">Blur</a> &nbsp; <span class="blue">/</span> &nbsp;
';
        $buffer .= $indent . '  <a id="btn-login-light" href="#">Light</a> &nbsp; &nbsp; &nbsp;
';
        $buffer .= $indent . ' </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
