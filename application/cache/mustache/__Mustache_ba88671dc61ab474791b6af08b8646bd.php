<?php

class __Mustache_ba88671dc61ab474791b6af08b8646bd extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="messagebar-item-left">
';
        $buffer .= $indent . '	<label class="inline middle">
';
        $buffer .= $indent . '		<input type="checkbox" id="id-toggle-all" class="ace" />
';
        $buffer .= $indent . '		<span class="lbl"></span>
';
        $buffer .= $indent . '	</label>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	&nbsp;
';
        $buffer .= $indent . '	<div class="inline position-relative">
';
        $buffer .= $indent . '		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<ul class="dropdown-menu dropdown-lighter dropdown-100">
';
        $buffer .= $indent . '			<li><a id="id-select-message-all" href="#">All</a></li>
';
        $buffer .= $indent . '			<li><a id="id-select-message-none" href="#">None</a></li>
';
        $buffer .= $indent . '			<li class="divider"></li>
';
        $buffer .= $indent . '			<li><a id="id-select-message-unread" href="#">Unread</a></li>
';
        $buffer .= $indent . '			<li><a id="id-select-message-read" href="#">Read</a></li>			  
';
        $buffer .= $indent . '		</ul>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
