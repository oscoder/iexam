<?php

class __Mustache_02ec5a4c8bd671d55598f778b1c3c1e4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- #section:pages/inbox.compose-btn -->
';
        $buffer .= $indent . '  <li class="li-new-mail pull-right">
';
        $buffer .= $indent . '	<a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
';
        $buffer .= $indent . '	  <span class="btn btn-purple no-border">
';
        $buffer .= $indent . '		 <i class=" ace-icon fa fa-envelope bigger-130"></i>
';
        $buffer .= $indent . '		 <span class="bigger-110">Write Mail</span>
';
        $buffer .= $indent . '	  </span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '  </li><!-- /.li-new-mail -->
';
        $buffer .= $indent . '  <!-- /section:pages/inbox.compose-btn -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <li class="active">
';
        $buffer .= $indent . '	<a data-toggle="tab" href="#inbox" data-target="inbox">
';
        $buffer .= $indent . '		<i class="blue ace-icon fa fa-inbox bigger-130"></i>
';
        $buffer .= $indent . '		<span class="bigger-110">Inbox</span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '  </li>
';
        $buffer .= $indent . '  <li>
';
        $buffer .= $indent . '	<a data-toggle="tab" href="#sent" data-target="sent">
';
        $buffer .= $indent . '		<i class="orange ace-icon fa fa-location-arrow bigger-130 "></i>
';
        $buffer .= $indent . '		<span class="bigger-110">Sent</span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '  </li>
';
        $buffer .= $indent . '  <li>
';
        $buffer .= $indent . '	<a data-toggle="tab" href="#draft" data-target="draft">
';
        $buffer .= $indent . '		<i class="green ace-icon fa fa-pencil bigger-130"></i>
';
        $buffer .= $indent . '		<span class="bigger-110">Draft</span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '  </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <li class="dropdown">
';
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
';
        $buffer .= $indent . '		<i class="pink ace-icon fa fa-tags bigger-130"></i>
';
        $buffer .= $indent . '		<span class="bigger-110">Tags<i class="ace-icon fa fa-caret-down"></i></span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<ul class="dropdown-menu dropdown-light-blue dropdown-125">
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a data-toggle="tab" href="#tag-1">
';
        $buffer .= $indent . '			<span class="mail-tag badge badge-pink"></span>
';
        $buffer .= $indent . '			<span class="pink">Tag#1</span>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a data-toggle="tab" href="#tag-family">
';
        $buffer .= $indent . '			<span class="mail-tag badge badge-success"></span>
';
        $buffer .= $indent . '			<span class="green">Family</span>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a data-toggle="tab" href="#tag-friends">
';
        $buffer .= $indent . '			<span class="mail-tag badge badge-info"></span>
';
        $buffer .= $indent . '			<span class="blue">Friends</span>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	  <li>
';
        $buffer .= $indent . '		<a data-toggle="tab" href="#tag-work">
';
        $buffer .= $indent . '			<span class="mail-tag badge badge-grey"></span>
';
        $buffer .= $indent . '			<span class="grey">Work</span>
';
        $buffer .= $indent . '		</a>
';
        $buffer .= $indent . '	  </li>
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '  </li><!-- /.dropdown -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</ul>
';

        return $buffer;
    }
}
