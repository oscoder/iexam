<?php

class __Mustache_12c7056e1e8b3f22c5616ce739fbcd5c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<form class="form-horizontal" role="form">
';
        $buffer .= $indent . '	<!-- #section:elements.form -->
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
';
        $buffer .= $indent . '			Text Field
';
        $buffer .= $indent . '		</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
';
        $buffer .= $indent . '		</div>		
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">
';
        $buffer .= $indent . '			Full Length
';
        $buffer .= $indent . '		</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:elements.form -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="space-4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-2">
';
        $buffer .= $indent . '			Password Field
';
        $buffer .= $indent . '		</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
';
        $buffer .= $indent . '			<span class="help-inline col-xs-12 col-sm-7">
';
        $buffer .= $indent . '				<span class="middle">Inline help text</span>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="space-4"></div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">
';
        $buffer .= $indent . '			Readonly field
';
        $buffer .= $indent . '		</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<input readonly type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
';
        $buffer .= $indent . '			<span class="help-inline col-xs-12 col-sm-7">
';
        $buffer .= $indent . '				<label class="middle">
';
        $buffer .= $indent . '					<input class="ace" type="checkbox" id="id-disable-check" />
';
        $buffer .= $indent . '					<span class="lbl"> Disable it!</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="space-4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm">
';
        $buffer .= $indent . '			<div class="space-2"></div>
';
        $buffer .= $indent . '			<div class="help-block" id="input-size-slider"></div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<div class="clearfix">
';
        $buffer .= $indent . '				<input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1">
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="space-2"></div>
';
        $buffer .= $indent . '			<div class="help-block" id="input-span-slider"></div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right">Input with Icon</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<!-- #section:elements.form.input-icon -->
';
        $buffer .= $indent . '			<span class="input-icon">
';
        $buffer .= $indent . '				<input type="text" id="form-field-icon-1">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-leaf blue"></i>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<span class="input-icon input-icon-right">
';
        $buffer .= $indent . '				<input type="text" id="form-field-icon-2">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-leaf green"></i>
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<!-- /section:elements.form.input-icon -->
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="space-4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
';
        $buffer .= $indent . '			<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="space-4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right"  for="form-field-tags">Tag input</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<!-- #section:plugins/input.tag-input -->
';
        $buffer .= $indent . '			<div class="inline">
';
        $buffer .= $indent . '			 <input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />			 
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<!-- /section:plugins/input.tag-input -->
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="space-4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="col-sm-3 control-label no-padding-right"  for="form-field-tags">Typeahead.js</label>
';
        $buffer .= $indent . '		<div class="col-sm-9">
';
        $buffer .= $indent . '			<!-- #section:plugins/bootstrap.typeahead-js -->
';
        $buffer .= $indent . '			<div class="pos-rel">
';
        $buffer .= $indent . '				<input class="typeahead scrollable" type="text" placeholder="States of USA" />
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<!-- /section:plugins/bootstrap.typeahead-js -->
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="clearfix form-actions">
';
        $buffer .= $indent . '		<div class="col-md-offset-3 col-md-9">
';
        $buffer .= $indent . '			<button class="btn btn-info" type="button"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>
';
        $buffer .= $indent . '			&nbsp; &nbsp; &nbsp;
';
        $buffer .= $indent . '			<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="hr hr-24"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="row">
';
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-4">
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '			<div class="widget-header">
';
        $buffer .= $indent . '				<h4 class="widget-title">Text Area</h4>
';
        $buffer .= $indent . '				<div class="widget-toolbar">
';
        $buffer .= $indent . '					<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
';
        $buffer .= $indent . '					<a href="#" data-action="close"><i class="ace-icon fa fa-times"></i></a>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main">
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-8">Default</label>
';
        $buffer .= $indent . '					<textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<!-- #section:plugins/input.limiter -->
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-9">With Character Limit</label>
';
        $buffer .= $indent . '					<textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>					
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<!-- /section:plugins/input.limiter -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<!-- #section:plugins/input.autosize -->
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-11">Autosize</label>
';
        $buffer .= $indent . '					<textarea id="form-field-11" class="autosize-transition form-control"></textarea>					
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<!-- /section:plugins/input.autosize -->
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </div><!-- /.span -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-4">
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '			<div class="widget-header">
';
        $buffer .= $indent . '				<h4 class="widget-title">Masked Input</h4>
';
        $buffer .= $indent . '				<span class="widget-toolbar">
';
        $buffer .= $indent . '					<a href="#" data-action="settings"><i class="ace-icon fa fa-cog"></i></a>
';
        $buffer .= $indent . '					<a href="#" data-action="reload"><i class="ace-icon fa fa-refresh"></i></a>
';
        $buffer .= $indent . '					<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
';
        $buffer .= $indent . '					<a href="#" data-action="close"><i class="ace-icon fa fa-times"></i></a>
';
        $buffer .= $indent . '				</span>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main">
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-mask-1">Date <small class="text-success">99/99/9999</small></label>
';
        $buffer .= $indent . '					<!-- #section:plugins/input.masked-input -->
';
        $buffer .= $indent . '					<div class="input-group">
';
        $buffer .= $indent . '						<input class="form-control input-mask-date" type="text" id="form-field-mask-1" />
';
        $buffer .= $indent . '						<span class="input-group-btn">
';
        $buffer .= $indent . '							<button class="btn btn-sm btn-default" type="button"><i class="ace-icon fa fa-calendar bigger-110"></i> Go!</button>
';
        $buffer .= $indent . '						</span>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					<!-- /section:plugins/input.masked-input -->
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-mask-2">Phone <small class="text-warning">(999) 999-9999</small></label>
';
        $buffer .= $indent . '					<div class="input-group">
';
        $buffer .= $indent . '						<span class="input-group-addon"><i class="ace-icon fa fa-phone"></i></span>
';
        $buffer .= $indent . '						<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" />
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-mask-3">Product Key <small class="text-error">a*-999-a999</small></label>
';
        $buffer .= $indent . '					<div class="input-group">
';
        $buffer .= $indent . '						<input class="form-control input-mask-product" type="text" id="form-field-mask-3" />
';
        $buffer .= $indent . '						<span class="input-group-addon"><i class="ace-icon fa fa-key"></i></span>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-mask-4">Eye Script <small class="text-info">~9.99 ~9.99 999</small></label>
';
        $buffer .= $indent . '					<div>
';
        $buffer .= $indent . '						<input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4" />
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </div><!-- /.span -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-4">
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '			<div class="widget-header">
';
        $buffer .= $indent . '				<h4 class="widget-title">Select Box</h4>
';
        $buffer .= $indent . '				<span class="widget-toolbar">
';
        $buffer .= $indent . '					<a href="#" data-action="settings"><i class="ace-icon fa fa-cog"></i></a>
';
        $buffer .= $indent . '					<a href="#" data-action="reload"><i class="ace-icon fa fa-refresh"></i></a>
';
        $buffer .= $indent . '					<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
';
        $buffer .= $indent . '					<a href="#" data-action="close"><i class="ace-icon fa fa-times"></i></a>
';
        $buffer .= $indent . '				</span>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main">
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-select-1">Default</label>
';
        $buffer .= $indent . '					<select class="form-control" id="form-field-select-1">
';
        $buffer .= $indent . '						  <option value=""></option>
';
        // 'page.states' section
        $value = $context->findDot('page.states');
        $buffer .= $this->sectionBad5c6996822ab0a7ef5abef84a13847($context, $indent, $value);
        $buffer .= $indent . '					</select>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-select-2">Multiple</label>
';
        $buffer .= $indent . '					<select class="form-control" id="form-field-select-2" multiple="multiple">
';
        // 'page.states' section
        $value = $context->findDot('page.states');
        $buffer .= $this->sectionDaed8b0a2479f413c3876988777b909f($context, $indent, $value);
        $buffer .= $indent . '					</select>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				<!-- #section:plugins/input.chosen -->
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label for="form-field-select-3">Chosen</label>
';
        $buffer .= $indent . '					<br />
';
        $buffer .= $indent . '					<select class="chosen-select" id="form-field-select-3" data-placeholder="Choose a State...">
';
        $buffer .= $indent . '						 <option value=""> </option>
';
        // 'page.states' section
        $value = $context->findDot('page.states');
        $buffer .= $this->sectionF877aa7a1eedbac8a9093ea1e7bd2c70($context, $indent, $value);
        $buffer .= $indent . '					</select>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<div class="row">
';
        $buffer .= $indent . '						<div class="col-sm-6">
';
        $buffer .= $indent . '							<span class="bigger-110">Multiple</span>
';
        $buffer .= $indent . '						</div><!-- /.span -->
';
        $buffer .= $indent . '						<div class="col-sm-6">
';
        $buffer .= $indent . '							<span class="pull-right inline">
';
        $buffer .= $indent . '								<span class="grey">style:</span>
';
        $buffer .= $indent . '								<span class="btn-toolbar inline middle no-margin">
';
        $buffer .= $indent . '									<span id="chosen-multiple-style" data-toggle="buttons" class="btn-group no-margin">
';
        $buffer .= $indent . '										<label class="btn btn-xs btn-yellow active">
';
        $buffer .= $indent . '											1
';
        $buffer .= $indent . '											<input type="radio" value="1" />
';
        $buffer .= $indent . '										</label>
';
        $buffer .= $indent . '										<label class="btn btn-xs btn-yellow">
';
        $buffer .= $indent . '											2
';
        $buffer .= $indent . '											<input type="radio" value="2" />
';
        $buffer .= $indent . '										</label>
';
        $buffer .= $indent . '									</span>
';
        $buffer .= $indent . '								</span>
';
        $buffer .= $indent . '							</span>
';
        $buffer .= $indent . '						</div><!-- /.span -->
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					<div class="space-2"></div>
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<select multiple class="chosen-select" id="form-field-select-4" data-placeholder="Choose a State...">
';
        // 'page.states' section
        $value = $context->findDot('page.states');
        $buffer .= $this->sectionB9571f13fc6ecd3113cf2e73ca385717($context, $indent, $value);
        $buffer .= $indent . '					</select>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<!-- /section:plugins/input.chosen -->
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </div><!-- /.span -->
';
        $buffer .= $indent . '		  
';
        $buffer .= $indent . '	</div><!-- /.row -->
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="space-24"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<h3 class="header smaller lighter blue">Checkboxes & Radio <small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small></h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="row">
';
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-5">
';
        $buffer .= $indent . '		<div class="control-group">
';
        $buffer .= $indent . '			<label class="control-label bolder blue">Checkbox</label>
';
        $buffer .= $indent . '			<!-- #section:custom/checkbox -->
';
        $buffer .= $indent . '			<div class="checkbox">
';
        $buffer .= $indent . '				<label>
';
        $buffer .= $indent . '					<input name="form-field-checkbox" type="checkbox" class="ace" /><span class="lbl"> choice 1</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="checkbox">
';
        $buffer .= $indent . '				<label>
';
        $buffer .= $indent . '					<input name="form-field-checkbox" type="checkbox" class="ace" /><span class="lbl">  choice 2</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="checkbox">
';
        $buffer .= $indent . '				<label>
';
        $buffer .= $indent . '					<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" /><span class="lbl"> choice 3</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="checkbox">
';
        $buffer .= $indent . '				<label class="block">
';
        $buffer .= $indent . '					<input name="form-field-checkbox" disabled type="checkbox" class="ace" /><span class="lbl"> disabled</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<!-- /section:custom/checkbox -->
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	  <div class="col-xs-12 col-sm-6">
';
        $buffer .= $indent . '		<div class="control-group">
';
        $buffer .= $indent . '			<label class="control-label bolder blue">Radio</label>
';
        $buffer .= $indent . '			<div class="radio">
';
        $buffer .= $indent . '				<label>
';
        $buffer .= $indent . '					<input name="form-field-radio" type="radio" class="ace" /><span class="lbl"> radio option 1</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="radio">
';
        $buffer .= $indent . '				<label>
';
        $buffer .= $indent . '					<input name="form-field-radio" type="radio" class="ace" /><span class="lbl"> radio option 2</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="radio">
';
        $buffer .= $indent . '				<label>
';
        $buffer .= $indent . '					<input name="form-field-radio" type="radio" class="ace" /><span class="lbl"> radio option 3</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="radio">
';
        $buffer .= $indent . '				<label>
';
        $buffer .= $indent . '					<input disabled name="form-field-radio" type="radio" class="ace" /><span class="lbl"> disabled</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	  </div>
';
        $buffer .= $indent . '	</div><!-- /.row -->
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="form-group">
';
        $buffer .= $indent . '		<label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>
';
        $buffer .= $indent . '		<div class="controls col-xs-12 col-sm-9">
';
        $buffer .= $indent . '			<!-- #section:custom/checkbox.switch -->
';
        $buffer .= $indent . '			<div class="row">
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl" data-lbl="CUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOM"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="row">
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="row">
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch btn-rotate" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="col-xs-3">
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" />
';
        $buffer .= $indent . '						<span class="lbl"></span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<!-- /section:custom/checkbox.switch -->
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<hr />
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="row">
';
        $buffer .= $indent . '		<div class="col-sm-4">
';
        $buffer .= $indent . '			<div class="widget-box">
';
        $buffer .= $indent . '				<div class="widget-header">
';
        $buffer .= $indent . '					<h4 class="widget-title">Custom File Input</h4>
';
        $buffer .= $indent . '					<div class="widget-toolbar">
';
        $buffer .= $indent . '						<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
';
        $buffer .= $indent . '						<a href="#" data-action="close"><i class="ace-icon fa fa-times"></i></a>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="widget-body">
';
        $buffer .= $indent . '				 <div class="widget-main">
';
        $buffer .= $indent . '					<div class="form-group">
';
        $buffer .= $indent . '						<div class="col-xs-12">
';
        $buffer .= $indent . '							<!-- #section:custom/file-input -->
';
        $buffer .= $indent . '							<input type="file" id="id-input-file-2" />
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					<div class="form-group">
';
        $buffer .= $indent . '						<div class="col-xs-12">
';
        $buffer .= $indent . '							<input multiple type="file" id="id-input-file-3" />
';
        $buffer .= $indent . '							<!-- /section:custom/file-input -->
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					<!-- #section:custom/file-input.filter -->
';
        $buffer .= $indent . '					<label>
';
        $buffer .= $indent . '						<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
';
        $buffer .= $indent . '						<span class="lbl"> Allow only images</span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '					<!-- /section:custom/file-input.filter -->
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="col-sm-4">
';
        $buffer .= $indent . '			<div class="widget-box">
';
        $buffer .= $indent . '				<div class="widget-header">
';
        $buffer .= $indent . '					<h4 class="widget-title">jQuery UI Sliders</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="widget-body">
';
        $buffer .= $indent . '				 <div class="widget-main">
';
        $buffer .= $indent . '					<div class="row">
';
        $buffer .= $indent . '						<div class="col-xs-3 col-md-2">
';
        $buffer .= $indent . '							<!-- #section:plugins/jquery.slider -->
';
        $buffer .= $indent . '							<div id="slider-range"></div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						<div class="col-xs-9 col-md-10">
';
        $buffer .= $indent . '							<div id="slider-eq">
';
        $buffer .= $indent . '								<span class="ui-slider-green ui-slider-small">77</span>
';
        $buffer .= $indent . '								<span class="ui-slider-red">55</span>
';
        $buffer .= $indent . '								<span class="ui-slider-purple" data-rel="tooltip" title="Disabled!">33</span>
';
        $buffer .= $indent . '								<span class="ui-slider-simple ui-slider-orange">40</span>
';
        $buffer .= $indent . '								<span class="ui-slider-simple ui-slider-dark">88</span>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<!-- /section:plugins/jquery.slider -->
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="col-sm-4">
';
        $buffer .= $indent . '			<div class="widget-box">
';
        $buffer .= $indent . '				<div class="widget-header">
';
        $buffer .= $indent . '					<h4 class="widget-title">Spinners</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="widget-body">
';
        $buffer .= $indent . '				 <div class="widget-main">
';
        $buffer .= $indent . '					<!-- #section:plugins/fuelux.spinner -->
';
        $buffer .= $indent . '					<input type="text" class="input-mini" id="spinner1" />
';
        $buffer .= $indent . '					 <div class="space-6"></div>
';
        $buffer .= $indent . '					<input type="text" class="input-mini" id="spinner2" />
';
        $buffer .= $indent . '					 <div class="space-6"></div>
';
        $buffer .= $indent . '					<input type="text" class="input-mini" id="spinner3" />
';
        $buffer .= $indent . '					<!-- /section:plugins/fuelux.spinner -->
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="row">
';
        $buffer .= $indent . '		<div class="col-sm-4">
';
        $buffer .= $indent . '			<div class="widget-box">
';
        $buffer .= $indent . '				<div class="widget-header">
';
        $buffer .= $indent . '					<h4 class="widget-title">Date Picker</h4>
';
        $buffer .= $indent . '					<span class="widget-toolbar">
';
        $buffer .= $indent . '						<a href="#" data-action="settings"><i class="ace-icon fa fa-cog"></i></a>
';
        $buffer .= $indent . '						<a href="#" data-action="reload"><i class="ace-icon fa fa-refresh"></i></a>
';
        $buffer .= $indent . '						<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
';
        $buffer .= $indent . '						<a href="#" data-action="close"><i class="ace-icon fa fa-times"></i></a>
';
        $buffer .= $indent . '					</span>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="widget-body">
';
        $buffer .= $indent . '				 <div class="widget-main">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<label for="id-date-picker-1">Date Picker</label>
';
        $buffer .= $indent . '						<div class="row">
';
        $buffer .= $indent . '							<div class="col-xs-8 col-sm-11">
';
        $buffer .= $indent . '								<!-- #section:plugins/date-time.datepicker -->
';
        $buffer .= $indent . '								<div class="input-group">
';
        $buffer .= $indent . '									<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
';
        $buffer .= $indent . '									<span class="input-group-addon">
';
        $buffer .= $indent . '										<i class="fa fa-calendar bigger-110"></i>
';
        $buffer .= $indent . '									</span>
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space space-8"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<label>Range Picker</label>
';
        $buffer .= $indent . '						<div class="row">
';
        $buffer .= $indent . '							<div class="col-xs-8 col-sm-11">
';
        $buffer .= $indent . '								<div class="input-daterange input-group">
';
        $buffer .= $indent . '									<input type="text" class="input-sm form-control" name="start" />
';
        $buffer .= $indent . '									<span class="input-group-addon">
';
        $buffer .= $indent . '										<i class="fa fa-exchange"></i>
';
        $buffer .= $indent . '									</span>
';
        $buffer .= $indent . '									<input type="text" class="input-sm form-control" name="end" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '								<!-- /section:plugins/date-time.datepicker -->
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<hr />
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<label for="id-date-range-picker-1">Date Range Picker</label>
';
        $buffer .= $indent . '						<div class="row">
';
        $buffer .= $indent . '							<div class="col-xs-8 col-sm-11">
';
        $buffer .= $indent . '								<!-- #section:plugins/date-time.daterangepicker -->
';
        $buffer .= $indent . '								<div class="input-group">
';
        $buffer .= $indent . '									<span class="input-group-addon">
';
        $buffer .= $indent . '										<i class="fa fa-calendar bigger-110"></i>
';
        $buffer .= $indent . '									</span>
';
        $buffer .= $indent . '									<input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '								<!-- /section:plugins/date-time.daterangepicker -->
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<hr />
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<label for="timepicker1">Time Picker</label>
';
        $buffer .= $indent . '						<!-- #section:plugins/date-time.timepicker -->
';
        $buffer .= $indent . '						<div class="input-group bootstrap-timepicker">
';
        $buffer .= $indent . '							<input id="timepicker1" type="text" class="form-control" />
';
        $buffer .= $indent . '							<span class="input-group-addon">
';
        $buffer .= $indent . '								<i class="fa fa-clock-o bigger-110"></i>
';
        $buffer .= $indent . '							</span>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						<!-- /section:plugins/date-time.timepicker -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<hr />
';
        $buffer .= $indent . '						<label for="date-timepicker1">Date/Time Picker</label>
';
        $buffer .= $indent . '						<!-- #section:plugins/date-time.datetimepicker -->
';
        $buffer .= $indent . '						<div class="input-group">
';
        $buffer .= $indent . '							<input id="date-timepicker1" type="text" class="form-control" />
';
        $buffer .= $indent . '							<span class="input-group-addon">
';
        $buffer .= $indent . '								<i class="fa fa-clock-o bigger-110"></i>
';
        $buffer .= $indent . '							</span>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						<!-- /section:plugins/date-time.datetimepicker -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="col-sm-4">
';
        $buffer .= $indent . '			<div class="widget-box">
';
        $buffer .= $indent . '				<div class="widget-header">
';
        $buffer .= $indent . '					<h4 class="widget-title"><i class="ace-icon fa fa-tint"></i> Color Picker</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="widget-body">
';
        $buffer .= $indent . '				 <div class="widget-main">
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '					<div class="clearfix">
';
        $buffer .= $indent . '						<label for="colorpicker1">Color Picker</label>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					<div class="control-group">
';
        $buffer .= $indent . '						<div class="bootstrap-colorpicker">
';
        $buffer .= $indent . '							<!-- #section:plugins/misc.colorpicker -->
';
        $buffer .= $indent . '							<input id="colorpicker1" type="text" class="input-small" />			
';
        $buffer .= $indent . '							<!-- /section:plugins/misc.colorpicker -->
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<hr />
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '					<!-- #section:custom/colorpicker -->
';
        $buffer .= $indent . '					<div>
';
        $buffer .= $indent . '						<label for="simple-colorpicker-1">Custom Color Picker</label>
';
        $buffer .= $indent . '						<select id="simple-colorpicker-1" class="hide">
';
        $buffer .= $indent . '							  <option value="#ac725e">#ac725e</option>
';
        $buffer .= $indent . '							  <option value="#d06b64">#d06b64</option>
';
        $buffer .= $indent . '							  <option value="#f83a22">#f83a22</option>
';
        $buffer .= $indent . '							  <option value="#fa573c">#fa573c</option>
';
        $buffer .= $indent . '							  <option value="#ff7537">#ff7537</option>
';
        $buffer .= $indent . '							  <option value="#ffad46" selected>#ffad46</option>
';
        $buffer .= $indent . '							  <option value="#42d692">#42d692</option>
';
        $buffer .= $indent . '							  <option value="#16a765">#16a765</option>
';
        $buffer .= $indent . '							  <option value="#7bd148">#7bd148</option>
';
        $buffer .= $indent . '							  <option value="#b3dc6c">#b3dc6c</option>
';
        $buffer .= $indent . '							  <option value="#fbe983">#fbe983</option>
';
        $buffer .= $indent . '							  <option value="#fad165">#fad165</option>
';
        $buffer .= $indent . '							  <option value="#92e1c0">#92e1c0</option>
';
        $buffer .= $indent . '							  <option value="#9fe1e7">#9fe1e7</option>
';
        $buffer .= $indent . '							  <option value="#9fc6e7">#9fc6e7</option>
';
        $buffer .= $indent . '							  <option value="#4986e7">#4986e7</option>
';
        $buffer .= $indent . '							  <option value="#9a9cff">#9a9cff</option>
';
        $buffer .= $indent . '							  <option value="#b99aff">#b99aff</option>
';
        $buffer .= $indent . '							  <option value="#c2c2c2">#c2c2c2</option>
';
        $buffer .= $indent . '							  <option value="#cabdbf">#cabdbf</option>
';
        $buffer .= $indent . '							  <option value="#cca6ac">#cca6ac</option>
';
        $buffer .= $indent . '							  <option value="#f691b2">#f691b2</option>
';
        $buffer .= $indent . '							  <option value="#cd74e6">#cd74e6</option>
';
        $buffer .= $indent . '							  <option value="#a47ae2">#a47ae2</option>
';
        $buffer .= $indent . '							  <option value="#555">#555</option>
';
        $buffer .= $indent . '						</select>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					<!-- /section:custom/colorpicker -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="col-sm-4">
';
        $buffer .= $indent . '			<div class="widget-box">
';
        $buffer .= $indent . '				<div class="widget-header">
';
        $buffer .= $indent . '					<h4 class="widget-title"><i class="ace-icon fa fa-tachometer"></i> Knob Input</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="widget-body">
';
        $buffer .= $indent . '				 <div class="widget-main">
';
        $buffer .= $indent . '						<div class="control-group">
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						  <div class="row">
';
        $buffer .= $indent . '							<div class="col-xs-6 center">
';
        $buffer .= $indent . '								<!-- #section:plugins/charts.knob -->
';
        $buffer .= $indent . '								<div class="knob-container inline">
';
        $buffer .= $indent . '									<input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<div class="col-xs-6  center">
';
        $buffer .= $indent . '								<div class="knob-container inline">
';
        $buffer .= $indent . '									<input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgColor="#87B87F" data-displayPrevious="true" data-angleArc="250" data-angleOffset="-125" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '								<!-- /section:plugins/charts.knob -->
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						  </div>
';
        $buffer .= $indent . '						  <div class="row">
';
        $buffer .= $indent . '							<div class="col-xs-12 center">
';
        $buffer .= $indent . '								<div class="knob-container inline">
';
        $buffer .= $indent . '									<input type="text" class="input-small knob" value="1" data-min="0" data-max="10"  data-width="150" data-height="150" data-thickness=".2" data-fgColor="#B8877F" data-angleOffset=90 data-cursor="true" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						  </div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '				 </div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hr hr-18 dotted hr-double"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h4 class="pink">
';
        $buffer .= $indent . '	<i class="ace-icon fa fa-hand-o-right green"></i>
';
        $buffer .= $indent . '	<a href="#modal-form" role="button" class="blue" data-toggle="modal">
';
        $buffer .= $indent . '		Form Inside a Modal Box
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hr hr-18 dotted hr-double"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h4 class="header green">Form Layouts</h4>
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '	<div class="col-sm-5">
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '		  <div class="widget-header">
';
        $buffer .= $indent . '			<h4 class="widget-title">Default</h4>
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		  <div class="widget-body">
';
        $buffer .= $indent . '		   <div class="widget-main no-padding">
';
        $buffer .= $indent . '			<form>
';
        $buffer .= $indent . '			  <!-- <legend>Form</legend> -->
';
        $buffer .= $indent . '			  <fieldset>
';
        $buffer .= $indent . '				<label>Label name</label>
';
        $buffer .= $indent . '				<input type="text" placeholder="Type something&hellip;">
';
        $buffer .= $indent . '				<span class="help-block">Example block-level help text here.</span>
';
        $buffer .= $indent . '				<label class="pull-right">
';
        $buffer .= $indent . '				  <input type="checkbox" class="ace" /><span class="lbl"> check me out</span>
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			  </fieldset>
';
        $buffer .= $indent . '			  <div class="form-actions center">
';
        $buffer .= $indent . '				<button type="button" class="btn btn-sm btn-success">Submit <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i></button>
';
        $buffer .= $indent . '			  </div>
';
        $buffer .= $indent . '			</form>
';
        $buffer .= $indent . '		   </div>
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="col-sm-7">
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '		  <div class="widget-header">
';
        $buffer .= $indent . '			<h4 class="widget-title">Inline Forms</h4>
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		  <div class="widget-body">
';
        $buffer .= $indent . '		   <div class="widget-main">
';
        $buffer .= $indent . '			<form class="form-inline">
';
        $buffer .= $indent . '			<input type="text" class="input-small" placeholder="Username" />
';
        $buffer .= $indent . '			<input type="password" class="input-small" placeholder="Password" />
';
        $buffer .= $indent . '			<label class="inline">
';
        $buffer .= $indent . '				<input type="checkbox" class="ace" /><span class="lbl"> remember me</span>
';
        $buffer .= $indent . '			</label>
';
        $buffer .= $indent . '			<button type="button" class="btn btn-info btn-sm"><i class="ace-icon fa fa-key bigger-110"></i>Login</button>
';
        $buffer .= $indent . '			</form>
';
        $buffer .= $indent . '		   </div>
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  
';
        $buffer .= $indent . '	  <div class="space-6"></div>
';
        $buffer .= $indent . '	  
';
        $buffer .= $indent . '		<div class="widget-box">
';
        $buffer .= $indent . '		  <div class="widget-header widget-header-small">
';
        $buffer .= $indent . '			<h5 class="widget-title lighter">Search Form</h5>
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		  <div class="widget-body">
';
        $buffer .= $indent . '		   <div class="widget-main">
';
        $buffer .= $indent . '			<form class="form-search">
';
        $buffer .= $indent . '			  <div class="row">
';
        $buffer .= $indent . '			   <div class="col-xs-12 col-sm-8">
';
        $buffer .= $indent . '				<div class="input-group">
';
        $buffer .= $indent . '					<input type="text" class="form-control search-query" placeholder="Type your query" />
';
        $buffer .= $indent . '					<span class="input-group-btn">
';
        $buffer .= $indent . '						<button type="button" class="btn btn-purple btn-sm">Search <i class="ace-icon fa fa-search icon-on-right bigger-110"></i></button>
';
        $buffer .= $indent . '					</span>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			   </div>
';
        $buffer .= $indent . '			  </div>
';
        $buffer .= $indent . '			</form>
';
        $buffer .= $indent . '		   </div>
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="modal-form" class="modal" tabindex="-1">
';
        $buffer .= $indent . ' <div class="modal-dialog">
';
        $buffer .= $indent . '  <div class="modal-content">
';
        $buffer .= $indent . '	<div class="modal-header">
';
        $buffer .= $indent . '		<button type="button" class="close" data-dismiss="modal">&times;</button>
';
        $buffer .= $indent . '		<h4 class="blue bigger">Please fill the following form fields</h4>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="modal-body">';
        $buffer .= '
';
        $buffer .= $indent . '		<div class="row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="col-xs-12 col-sm-5">
';
        $buffer .= $indent . '				<div class="space"></div>
';
        $buffer .= $indent . '				<input type="file" />
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="col-xs-12 col-sm-7">
';
        $buffer .= $indent . '								
';
        $buffer .= $indent . '				<div class="form-group">
';
        $buffer .= $indent . '					<label for="form-field-select-3">Location</label>
';
        $buffer .= $indent . '					<div>
';
        $buffer .= $indent . '						<select class="chosen-select" data-placeholder="Choose a Country...">
';
        $buffer .= $indent . '							<option value="">&nbsp;</option>
';
        // 'page.states' section
        $value = $context->findDot('page.states');
        $buffer .= $this->section7af7225845d19630bf91ad898a32a3a2($context, $indent, $value);
        $buffer .= $indent . '						</select>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="space-4"></div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="form-group">
';
        $buffer .= $indent . '					<label for="form-field-username">Username</label>
';
        $buffer .= $indent . '					<div>
';
        $buffer .= $indent . '						<input class="input-large" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="space-4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<div class="form-group">
';
        $buffer .= $indent . '					<label for="form-field-first">Name</label>
';
        $buffer .= $indent . '					<div>
';
        $buffer .= $indent . '						<input class="input-medium" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
';
        $buffer .= $indent . '						<input class="input-medium" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="modal-footer">
';
        $buffer .= $indent . '		<button class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>
';
        $buffer .= $indent . '		<button class="btn btn-sm btn-primary"><i class="ace-icon fa fa-check"></i> Save</button>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . ' </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionBad5c6996822ab0a7ef5abef84a13847(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<option value=\'{{abbr}}\'>{{name}}</option>
						  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '							<option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaed8b0a2479f413c3876988777b909f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						  <option value=\'{{abbr}}\'>{{name}}</option>
						';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '						  <option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF877aa7a1eedbac8a9093ea1e7bd2c70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						  <option value=\'{{abbr}}\'>{{name}}</option>
						 ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '						  <option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9571f13fc6ecd3113cf2e73ca385717(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						  <option value=\'{{abbr}}\'>{{name}}</option>
						  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '						  <option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7af7225845d19630bf91ad898a32a3a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<option value=\'{{abbr}}\'>{{name}}</option>
							';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '							<option value=\'';
                $value = $this->resolveValue($context->find('abbr'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
