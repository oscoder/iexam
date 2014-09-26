<?php

class __Mustache_530b87367a8a8a3aed092a25c9bba0fd extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="hide message-content" id="id-message-content">
';
        $buffer .= $indent . '	<!-- #section:pages/inbox.message-header -->
';
        $buffer .= $indent . '	<div class="message-header clearfix">
';
        $buffer .= $indent . '		<div class="pull-left">
';
        $buffer .= $indent . '			<span class="blue bigger-125">
';
        $buffer .= $indent . '				Clik to open this message
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<div class="space-4"></div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-star orange2"></i>
';
        $buffer .= $indent . '			&nbsp;
';
        $buffer .= $indent . '			<img class="middle" alt="John\'s Avatar" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/avatars/avatar.png" width="32" />
';
        $buffer .= $indent . '			&nbsp;
';
        $buffer .= $indent . '			<a href="#" class="sender">John Doe</a>
';
        $buffer .= $indent . '			&nbsp;
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
';
        $buffer .= $indent . '			<span class="time grey">Today, 7:15 pm</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="pull-right action-buttons">
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-reply green icon-only bigger-130"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-mail-forward blue icon-only bigger-130"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-trash-o red icon-only bigger-130"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:pages/inbox.message-header -->
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="hr hr-double"></div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<!-- #section:pages/inbox.message-body -->
';
        $buffer .= $indent . '	<div class="message-body">
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
';
        $buffer .= $indent . '		<p>
';
        $buffer .= $indent . '		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:pages/inbox.message-body -->
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="hr hr-double"></div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<!-- #section:pages/inbox.message-attachment -->
';
        $buffer .= $indent . '	<div class="message-attachment clearfix">
';
        $buffer .= $indent . '		<div class="attachment-title">
';
        $buffer .= $indent . '			<span class="blue bolder bigger-110">Attachments</span>
';
        $buffer .= $indent . '			&nbsp;
';
        $buffer .= $indent . '			<span class="grey">(2 files, 4.5 MB)</span>
';
        $buffer .= $indent . '			<div class="inline position-relative">
';
        $buffer .= $indent . '				<a href="#" data-toggle="dropdown" class="dropdown-toggle">
';
        $buffer .= $indent . '					&nbsp;<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '				<ul class="dropdown-menu dropdown-lighter">
';
        $buffer .= $indent . '				  <li><a href="#">Download all as zip</a></li>
';
        $buffer .= $indent . '				  <li><a href="#">Display in slideshow</a></li>
';
        $buffer .= $indent . '				</ul>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		&nbsp;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<ul class="attachment-list pull-left list-unstyled">
';
        $buffer .= $indent . '			<li>
';
        $buffer .= $indent . '				<a href="#" class="attached-file">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-file-o bigger-110"></i>
';
        $buffer .= $indent . '					<span class="attached-name">Document1.pdf</span>
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '				<span class="action-buttons">
';
        $buffer .= $indent . '					<a href="#"><i class="ace-icon fa fa-download bigger-125 blue"></i></a>
';
        $buffer .= $indent . '					<a href="#"><i class="ace-icon fa fa-trash-o bigger-125 red"></i></a>
';
        $buffer .= $indent . '				</span>
';
        $buffer .= $indent . '			</li>
';
        $buffer .= $indent . '			<li>
';
        $buffer .= $indent . '				<a href="#" class="attached-file">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-film bigger-110"></i>
';
        $buffer .= $indent . '					<span class="attached-name">Sample.mp4</span>
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '				<span class="action-buttons">
';
        $buffer .= $indent . '					<a href="#"><i class="ace-icon fa fa-download bigger-125 blue"></i></a>
';
        $buffer .= $indent . '					<a href="#"><i class="ace-icon fa fa-trash-o bigger-125 red"></i></a>
';
        $buffer .= $indent . '				</span>
';
        $buffer .= $indent . '			</li>
';
        $buffer .= $indent . '		</ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="attachment-images pull-right">
';
        $buffer .= $indent . '			<div class="vspace-4-sm"></div>
';
        $buffer .= $indent . '			<div>
';
        $buffer .= $indent . '				<img width="36" alt="image 4" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/images/gallery/thumb-4.jpg" />
';
        $buffer .= $indent . '				<img width="36" alt="image 3" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/images/gallery/thumb-3.jpg" />
';
        $buffer .= $indent . '				<img width="36" alt="image 2" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/images/gallery/thumb-2.jpg" />
';
        $buffer .= $indent . '				<img width="36" alt="image 1" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/images/gallery/thumb-1.jpg" />
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:pages/inbox.message-attachment -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div><!-- /.message-content -->';

        return $buffer;
    }
}
