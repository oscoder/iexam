<?php

class __Mustache_6ec4de4c56163640b15a7d1f39122870 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- #section:pages/inbox.navbar -->
';
        $buffer .= $indent . '<div id="id-message-list-navbar" class="message-navbar clearfix">
';
        $buffer .= $indent . '	<div class="message-bar">
';
        $buffer .= $indent . '		<div class="message-infobar" id="id-message-infobar">
';
        $buffer .= $indent . '			<span class="blue bigger-150">Inbox</span>
';
        $buffer .= $indent . '			<span class="grey bigger-110">(2 unread messages)</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="message-toolbar hide">
';
        if ($partial = $this->mustache->loadPartial('page.message_actions')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div>
';
        if ($partial = $this->mustache->loadPartial('page.message_select')) {
            $buffer .= $partial->renderInternal($context, $indent . '		');
        }
        if ($partial = $this->mustache->loadPartial('page.message_sort')) {
            $buffer .= $partial->renderInternal($context, $indent . '		');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<!-- #section:pages/inbox.navbar-search -->
';
        $buffer .= $indent . '		<div class="nav-search minimized">
';
        $buffer .= $indent . '			<form class="form-search">
';
        $buffer .= $indent . '			  <span class="input-icon">
';
        $buffer .= $indent . '				<input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ..." />
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-search nav-search-icon"></i>
';
        $buffer .= $indent . '			  </span>
';
        $buffer .= $indent . '			</form>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<!-- /section:pages/inbox.navbar-search -->
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="id-message-item-navbar" class="hide message-navbar clearfix">
';
        $buffer .= $indent . '	<div class="message-bar">
';
        $buffer .= $indent . '		<div class="message-toolbar">
';
        if ($partial = $this->mustache->loadPartial('page.message_actions')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div>
';
        $buffer .= $indent . '		<div class="messagebar-item-left">
';
        $buffer .= $indent . '			<a href="#" class="btn-back-message-list">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
';
        $buffer .= $indent . '				<b class="bigger-110 middle">Back</b>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<div class="messagebar-item-right">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
';
        $buffer .= $indent . '			<span class="grey">Today, 7:15 pm</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="id-message-new-navbar" class="hide message-navbar clearfix">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="message-bar">
';
        $buffer .= $indent . '		<div class="message-toolbar">
';
        $buffer .= $indent . '			<button type="button" class="btn btn-xs btn-white btn-primary">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-floppy-o bigger-125"></i>
';
        $buffer .= $indent . '				<span class="bigger-110">Save Draft</span>
';
        $buffer .= $indent . '			</button>
';
        $buffer .= $indent . '			<button type="button" class="btn btn-xs btn-white btn-primary">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-times bigger-125 orange2"></i>
';
        $buffer .= $indent . '				<span class="bigger-110">Discard</span>
';
        $buffer .= $indent . '			</button>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div>
';
        $buffer .= $indent . '		<div class="messagebar-item-left">
';
        $buffer .= $indent . '			<a href="#" class="btn-back-message-list">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
';
        $buffer .= $indent . '				<b class="middle bigger-110">Back</b>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<div class="messagebar-item-right">
';
        $buffer .= $indent . '			<span class="inline btn-send-message">
';
        $buffer .= $indent . '			  <button type="button" class="btn btn-sm btn-primary no-border btn-white btn-round">
';
        $buffer .= $indent . '				<span class="bigger-110">Send</span>
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
';
        $buffer .= $indent . '			  </button>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /section:pages/inbox.navbar -->';

        return $buffer;
    }
}
