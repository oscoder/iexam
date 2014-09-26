<?php

class __Mustache_57ecd5bc3febdd5bffdc1c94421cd6c8 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="inline position-relative align-left">
';
        $buffer .= $indent . '	<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
';
        $buffer .= $indent . '		<span class="bigger-110">Action</span>
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-caret-down icon-on-right"></i>
';
        $buffer .= $indent . '	</button>
';
        $buffer .= $indent . '	<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply</a></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward</a></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive</a></li>
';
        $buffer .= $indent . '		<li class="divider"></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read</a></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread</a></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag</a></li>
';
        $buffer .= $indent . '		<li class="divider"></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete</a></li>
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="inline position-relative align-left">
';
        $buffer .= $indent . '	<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
';
        $buffer .= $indent . '		<span class="bigger-110">Move to</span>
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-caret-down icon-on-right"></i>
';
        $buffer .= $indent . '	</button>
';
        $buffer .= $indent . '	<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1</a></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-stop blue"></i>&nbsp; Family</a></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-stop green"></i>&nbsp; Friends</a></li>
';
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-stop grey"></i>&nbsp; Work</a></li>
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<button type="button" class="btn btn-xs btn-white btn-primary">
';
        $buffer .= $indent . '	<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
';
        $buffer .= $indent . '	<span class="bigger-110">Delete</span>
';
        $buffer .= $indent . '</button>
';

        return $buffer;
    }
}
