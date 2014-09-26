<?php

class __Mustache_f8ba97443bf7e79d9b8953a8d7f4534d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="messagebar-item-right">
';
        $buffer .= $indent . '	<div class="inline position-relative">
';
        $buffer .= $indent . '		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
';
        $buffer .= $indent . '			Sort &nbsp;<i class="ace-icon fa fa-caret-down bigger-125"></i>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<ul class="dropdown-menu dropdown-lighter dropdown-menu-right dropdown-100">
';
        $buffer .= $indent . '			<li><a href="#"><i class="ace-icon fa fa-check green"></i> Date </a></li>
';
        $buffer .= $indent . '			<li><a href="#"><i class="ace-icon fa fa-check invisible"></i> From</a></li>
';
        $buffer .= $indent . '			<li><a href="#"><i class="ace-icon fa fa-check invisible"></i> Subject</a></li>
';
        $buffer .= $indent . '		</ul>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
