<?php

class __Mustache_3445e27fe7f492af9a4ce6289834c96e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<form id="id-message-form" class="hide form-horizontal message-form col-xs-12">
';
        $buffer .= $indent . '<!-- #section:pages/inbox.compose -->
';
        $buffer .= $indent . ' <div>
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<span class="input-icon">
';
        $buffer .= $indent . '				<input type="email" name="recipient" id="form-field-recipient" data-value="alex@doe.com" value="alex@doe.com" placeholder="Recipient(s)" />
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-user"></i>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="hr hr-18 dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>
';
        $buffer .= $indent . '		<div class="col-sm-6 col-xs-12">
';
        $buffer .= $indent . '			<div class="input-icon block col-xs-12 no-padding">
';
        $buffer .= $indent . '				<input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject" />
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-comment-o"></i>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="hr hr-18 dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right">
';
        $buffer .= $indent . '			<span class="inline space-24 hidden-480"></span>
';
        $buffer .= $indent . '			Message:
';
        $buffer .= $indent . '		</label>
';
        $buffer .= $indent . '		<!-- #section:plugins/editor.wysiwyg -->
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<div class="wysiwyg-editor"></div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<!-- /section:plugins/editor.wysiwyg -->
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="hr hr-18 dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group no-margin-bottom">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right">Attachments:</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<div id="form-attachments">
';
        $buffer .= $indent . '				<!-- #section:custom/file-input -->
';
        $buffer .= $indent . '				<input type="file" name="attachment[]" />
';
        $buffer .= $indent . '				<!-- /section:custom/file-input -->
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>		
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="align-right">
';
        $buffer .= $indent . '		<button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-paperclip bigger-140"></i>
';
        $buffer .= $indent . '			Add Attachment
';
        $buffer .= $indent . '		</button>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="space"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' </div>
';
        $buffer .= $indent . '<!-- /section:pages/inbox.compose -->
';
        $buffer .= $indent . '</form>';

        return $buffer;
    }
}
