<?php

class __Mustache_5ef68b00dafa2cc9fe3d0a6643bf424e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<h4 class="lighter">
';
        $buffer .= $indent . '	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
';
        $buffer .= $indent . '	<a href="#modal-wizard" data-toggle="modal" class="pink">
';
        $buffer .= $indent . '		Wizard Inside a Modal Box
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hr hr-18 hr-double dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="widget-box">
';
        $buffer .= $indent . '	<div class="widget-header widget-header-blue widget-header-flat">
';
        $buffer .= $indent . '		<h4 class="widget-title lighter">New Item Wizard</h4>
';
        $buffer .= $indent . '		<div class="widget-toolbar">
';
        $buffer .= $indent . '			<label>
';
        $buffer .= $indent . '				<small class="green"><b>Validation</b></small>
';
        $buffer .= $indent . '				<input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
';
        $buffer .= $indent . '				<span class="lbl middle"></span>
';
        $buffer .= $indent . '			</label>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="widget-body">
';
        $buffer .= $indent . '	 <div class="widget-main">
';
        $buffer .= $indent . '			<!-- #section:plugins/fuelux.wizard -->
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div id="fuelux-wizard" data-target="#step-container">
';
        $buffer .= $indent . '			  <!-- #section:plugins/fuelux.wizard.steps -->
';
        $buffer .= $indent . '			  <ul class="wizard-steps">
';
        $buffer .= $indent . '				<li data-target="#step1" class="active"><span class="step">1</span> <span class="title">Validation states</span></li>
';
        $buffer .= $indent . '				<li data-target="#step2"><span class="step">2</span> <span class="title">Alerts</span></li>
';
        $buffer .= $indent . '				<li data-target="#step3"><span class="step">3</span> <span class="title">Payment Info</span></li>
';
        $buffer .= $indent . '				<li data-target="#step4"><span class="step">4</span> <span class="title">Other Info</span></li>
';
        $buffer .= $indent . '			  </ul>
';
        $buffer .= $indent . '			  <!-- /section:plugins/fuelux.wizard.steps -->
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<!-- #section:plugins/fuelux.wizard.container -->
';
        $buffer .= $indent . '			<div class="step-content pos-rel" id="step-container">
';
        $buffer .= $indent . '				<div class="step-pane active" id="step1">
';
        $buffer .= $indent . '					<h3 class="lighter block green">Enter the following information</h3>
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<form class="form-horizontal" id="sample-form">
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<!-- #section:elements.form.input-state -->
';
        $buffer .= $indent . '						<div class="form-group has-warning">
';
        $buffer .= $indent . '							<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with warning</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-5">
';
        $buffer .= $indent . '								<span class="block input-icon input-icon-right">
';
        $buffer .= $indent . '									<input type="text" id="inputWarning" class="width-100" />
';
        $buffer .= $indent . '									<i class="ace-icon fa fa-leaf"></i>
';
        $buffer .= $indent . '								</span>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<div class="help-block col-xs-12 col-sm-reset inline">
';
        $buffer .= $indent . '								Warning tip help!
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						<!-- /section:elements.form.input-state -->
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group has-error">
';
        $buffer .= $indent . '							<label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Input with error</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-5">
';
        $buffer .= $indent . '								<span class="block input-icon input-icon-right">
';
        $buffer .= $indent . '									<input type="text" id="inputError" class="width-100" />
';
        $buffer .= $indent . '									<i class="ace-icon fa fa-times-circle"></i>
';
        $buffer .= $indent . '								</span>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<div class="help-block col-xs-12 col-sm-reset inline">
';
        $buffer .= $indent . '								Error tip help!
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group has-success">
';
        $buffer .= $indent . '							<label for="inputSuccess" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with success</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-5">
';
        $buffer .= $indent . '								<span class="block input-icon input-icon-right">
';
        $buffer .= $indent . '									<input type="text" id="inputSuccess" class="width-100" />
';
        $buffer .= $indent . '									<i class="ace-icon fa fa-check-circle"></i>
';
        $buffer .= $indent . '								</span>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<div class="help-block col-xs-12 col-sm-reset inline">
';
        $buffer .= $indent . '								Success tip help!
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group has-info">
';
        $buffer .= $indent . '							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with info</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-5">
';
        $buffer .= $indent . '								<span class="block input-icon input-icon-right">
';
        $buffer .= $indent . '									<input type="text" id="inputInfo" class="width-100" />
';
        $buffer .= $indent . '									<i class="ace-icon fa fa-info-circle"></i>
';
        $buffer .= $indent . '								</span>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<div class="help-block col-xs-12 col-sm-reset inline">
';
        $buffer .= $indent . '								Info tip help!
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label for="inputError2" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with error</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-5">
';
        $buffer .= $indent . '								<span class="input-icon block">
';
        $buffer .= $indent . '									<input type="text" id="inputError2" class="width-100" />
';
        $buffer .= $indent . '									<i class="ace-icon fa fa-times-circle red"></i>
';
        $buffer .= $indent . '								</span>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<div class="help-block col-xs-12 col-sm-reset inline">
';
        $buffer .= $indent . '								Error tip help!
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '					</form>
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<form class="form-horizontal hide" id="validation-form" method="get">
';
        $buffer .= $indent . '					  
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="clearfix">
';
        $buffer .= $indent . '									<input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-2"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="clearfix">
';
        $buffer .= $indent . '									<input type="password" name="password" id="password" class="col-xs-12 col-sm-4" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-2"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="clearfix">
';
        $buffer .= $indent . '									<input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="hr hr-dotted"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name:</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="clearfix">
';
        $buffer .= $indent . '									<input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-2"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="input-group">
';
        $buffer .= $indent . '									<span class="input-group-addon"><i class="ace-icon fa fa-phone"></i></span>
';
        $buffer .= $indent . '									<input type="tel" id="phone" name="phone" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-2"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">Company URL:</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="clearfix">
';
        $buffer .= $indent . '									<input type="url" id="url" name="url" class="col-xs-12 col-sm-8" />
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '						<div class="hr hr-dotted"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe to</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div>
';
        $buffer .= $indent . '									<label>
';
        $buffer .= $indent . '										<input name="subscription" value="1" type="checkbox" class="ace" />
';
        $buffer .= $indent . '										<span class="lbl"> Latest news and announcements</span>
';
        $buffer .= $indent . '									</label>
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '								<div>
';
        $buffer .= $indent . '									<label>
';
        $buffer .= $indent . '										<input name="subscription" value="2" type="checkbox" class="ace" />
';
        $buffer .= $indent . '										<span class="lbl"> Product offers and discounts</span>
';
        $buffer .= $indent . '									</label>
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-2"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div>
';
        $buffer .= $indent . '									<label class="line-height-1 blue">
';
        $buffer .= $indent . '										<input name="gender" value="1" type="radio" class="ace" />
';
        $buffer .= $indent . '										<span class="lbl"> Male</span>
';
        $buffer .= $indent . '									</label>
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '								<div>
';
        $buffer .= $indent . '									<label class="line-height-1 blue">
';
        $buffer .= $indent . '										<input name="gender" value="2" type="radio" class="ace" />
';
        $buffer .= $indent . '										<span class="lbl"> Female</span>
';
        $buffer .= $indent . '									</label>
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<div class="hr hr-dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">State</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<select id="state" name="state" class="select2" data-placeholder="Click to Choose...">
';
        $buffer .= $indent . '									  <option value="">&nbsp;</option>
';
        // 'page.states' section
        $value = $context->findDot('page.states');
        $buffer .= $this->sectionA2e44e9c3def8c63668c188be3c1a62e($context, $indent, $value);
        $buffer .= $indent . '								</select>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-2"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="clearfix">
';
        $buffer .= $indent . '									<select class="input-medium" id="platform" name="platform">
';
        $buffer .= $indent . '										<option value="">------------------</option>
';
        $buffer .= $indent . '										<option value="linux">Linux</option>
';
        $buffer .= $indent . '										<option value="windows">Windows</option>
';
        $buffer .= $indent . '										<option value="mac">Mac OS</option>
';
        $buffer .= $indent . '										<option value="ios">iOS</option>
';
        $buffer .= $indent . '										<option value="android">Android</option>
';
        $buffer .= $indent . '									</select>
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-2"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '								<div class="clearfix">
';
        $buffer .= $indent . '									<textarea class="input-xlarge" name="comment" id="comment"></textarea>
';
        $buffer .= $indent . '								</div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<div class="space-8"></div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<div class="col-xs-12 col-sm-4 col-sm-offset-3">
';
        $buffer .= $indent . '								<label>
';
        $buffer .= $indent . '									<input name="agree" id="agree" type="checkbox" class="ace" />
';
        $buffer .= $indent . '									<span class="lbl"> I accept the policy</span>
';
        $buffer .= $indent . '								</label>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '					  </form>
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="step-pane" id="step2">
';
        $buffer .= $indent . '					<div>
';
        $buffer .= $indent . '						<div class="alert alert-success">
';
        $buffer .= $indent . '							<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
';
        $buffer .= $indent . '							<strong><i class="ace-icon fa fa-check"></i> Well done!</strong>
';
        $buffer .= $indent . '							You successfully read this important alert message. <br />
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						<div class="alert alert-danger">
';
        $buffer .= $indent . '							<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
';
        $buffer .= $indent . '							<strong><i class="ace-icon fa fa-times"></i> Oh snap!</strong>
';
        $buffer .= $indent . '							Change a few things up and try submitting again. <br />
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						<div class="alert alert-warning">
';
        $buffer .= $indent . '							<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
';
        $buffer .= $indent . '							<strong>Warning!</strong>
';
        $buffer .= $indent . '							Best check yo self, you\'re not looking too good. <br />
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						<div class="alert alert-info">
';
        $buffer .= $indent . '							<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
';
        $buffer .= $indent . '							<strong>Heads up!</strong>
';
        $buffer .= $indent . '							This alert needs your attention, but it\'s not super important. <br />
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="step-pane" id="step3">
';
        $buffer .= $indent . '					<div class="center">
';
        $buffer .= $indent . '						<h3 class="blue lighter">This is step 3</h3>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<div class="step-pane" id="step4">
';
        $buffer .= $indent . '					<div class="center">
';
        $buffer .= $indent . '						<h3 class="green">Congrats!</h3>
';
        $buffer .= $indent . '						Your product is ready to ship! Click finish to continue!
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<!-- /section:plugins/fuelux.wizard.container -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<hr />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<div class="wizard-actions">
';
        $buffer .= $indent . '				<!-- #section:plugins/fuelux.wizard.buttons -->
';
        $buffer .= $indent . '				<button class="btn btn-prev"><i class="ace-icon fa fa-arrow-left"></i> Prev</button>
';
        $buffer .= $indent . '				<button class="btn btn-success btn-next" data-last="Finish ">Next <i class="ace-icon fa fa-arrow-right icon-on-right"></i></button>
';
        $buffer .= $indent . '				<!-- /section:plugins/fuelux.wizard.buttons -->
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			<!-- /section:plugins/fuelux.wizard -->
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '	 </div><!-- /.widget-main -->
';
        $buffer .= $indent . '	</div><!-- /.widget-body -->
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="modal-wizard" class="modal">
';
        $buffer .= $indent . ' <div class="modal-dialog">
';
        $buffer .= $indent . '  <div class="modal-content">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="modal-header" data-target="#modal-step-contents">
';
        $buffer .= $indent . '		<ul class="wizard-steps">
';
        $buffer .= $indent . '			<li data-target="#modal-step1" class="active">
';
        $buffer .= $indent . '				<span class="step">1</span>
';
        $buffer .= $indent . '				<span class="title">Validation states</span>
';
        $buffer .= $indent . '			</li>
';
        $buffer .= $indent . '			<li data-target="#modal-step2">
';
        $buffer .= $indent . '				<span class="step">2</span>
';
        $buffer .= $indent . '				<span class="title">Alerts</span>
';
        $buffer .= $indent . '			</li>
';
        $buffer .= $indent . '			<li data-target="#modal-step3">
';
        $buffer .= $indent . '				<span class="step">3</span>
';
        $buffer .= $indent . '				<span class="title">Payment Info</span>
';
        $buffer .= $indent . '			</li>
';
        $buffer .= $indent . '			<li data-target="#modal-step4">
';
        $buffer .= $indent . '				<span class="step">4</span>
';
        $buffer .= $indent . '				<span class="title">Other Info</span>
';
        $buffer .= $indent . '			</li>
';
        $buffer .= $indent . '		</ul>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="modal-body step-content" id="modal-step-contents">
';
        $buffer .= $indent . '			<div class="step-pane active" id="modal-step1">
';
        $buffer .= $indent . '				<div class="center">
';
        $buffer .= $indent . '					<h4 class="blue">Step 1</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="step-pane" id="modal-step2">
';
        $buffer .= $indent . '				<div class="center">
';
        $buffer .= $indent . '					<h4 class="blue">Step 2</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="step-pane" id="modal-step3">
';
        $buffer .= $indent . '				<div class="center">
';
        $buffer .= $indent . '					<h4 class="blue">Step 3</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			<div class="step-pane" id="modal-step4">
';
        $buffer .= $indent . '				<div class="center">
';
        $buffer .= $indent . '					<h4 class="blue">Step 4</h4>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="modal-footer wizard-actions">
';
        $buffer .= $indent . '		<button class="btn btn-sm btn-prev">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-arrow-left"></i>
';
        $buffer .= $indent . '			Prev
';
        $buffer .= $indent . '		</button>
';
        $buffer .= $indent . '		<button class="btn btn-success btn-sm btn-next" data-last="Finish ">
';
        $buffer .= $indent . '			Next
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
';
        $buffer .= $indent . '		</button>
';
        $buffer .= $indent . '		<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . ' </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionA2e44e9c3def8c63668c188be3c1a62e(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '										<option value=\'';
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
