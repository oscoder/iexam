<?php

class __Mustache_437ee0c42c6614c70950050a092fee6d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div id="user-profile-3" class="user-profile row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <div class="col-sm-offset-1 col-sm-10">
';
        $buffer .= $indent . '  <div class="well well-sm">
';
        $buffer .= $indent . '	<button type="button" class="close" data-dismiss="alert">&times;</button>
';
        $buffer .= $indent . '	&nbsp;
';
        $buffer .= $indent . '	<div class="inline middle blue bigger-110">
';
        $buffer .= $indent . '		Your profile is 70% complete
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	&nbsp; &nbsp; &nbsp;
';
        $buffer .= $indent . '	<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active">
';
        $buffer .= $indent . '		<div class="progress-bar progress-bar-success" style="width:70%"></div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '  </div><!-- /.well -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="space"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <form class="form-horizontal">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="tabbable">
';
        $buffer .= $indent . '		<ul class="nav nav-tabs padding-16">
';
        $buffer .= $indent . '		  <li class="active"><a data-toggle="tab" href="#edit-basic"><i class="green ace-icon fa fa-pencil-square-o bigger-125"></i> Basic Info</a></li>
';
        $buffer .= $indent . '		  <li><a data-toggle="tab" href="#edit-settings"><i class="purple ace-icon fa fa-cog bigger-125"></i> Settings</a></li>
';
        $buffer .= $indent . '		  <li><a data-toggle="tab" href="#edit-password"><i class="blue ace-icon fa fa-key bigger-125"></i> Password</a></li>
';
        $buffer .= $indent . '		</ul>
';
        $buffer .= $indent . '		<div class="tab-content profile-edit-tab-content">
';
        $buffer .= $indent . '			<div id="edit-basic" class="tab-pane in active">
';
        $buffer .= $indent . '				<h4 class="header blue bolder smaller">General</h4>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="row">
';
        $buffer .= $indent . '					<div class="col-xs-12 col-sm-4">
';
        $buffer .= $indent . '						<input type="file" />
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<div class="vspace-12-sm"></div>
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<div class="col-xs-12 col-sm-8">
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>
';
        $buffer .= $indent . '							<div class="col-sm-8">
';
        $buffer .= $indent . '								<input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="space-4"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<div class="form-group">
';
        $buffer .= $indent . '							<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>
';
        $buffer .= $indent . '							<div class="col-sm-8">
';
        $buffer .= $indent . '								<input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
';
        $buffer .= $indent . '								<input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<hr />
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="form-group">
';
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<div class="input-medium">
';
        $buffer .= $indent . '							<div class="input-group">
';
        $buffer .= $indent . '								<input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
';
        $buffer .= $indent . '								<span class="input-group-addon">
';
        $buffer .= $indent . '									<i class="ace-icon fa fa-calendar"></i>
';
        $buffer .= $indent . '								</span>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						</div>
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
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right">Gender</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<label class="inline">
';
        $buffer .= $indent . '							<input name="form-field-radio" type="radio" class="ace" /><span class="lbl middle"> Male</span>
';
        $buffer .= $indent . '						</label>
';
        $buffer .= $indent . '						&nbsp; &nbsp; &nbsp;
';
        $buffer .= $indent . '						<label class="inline">
';
        $buffer .= $indent . '							<input name="form-field-radio" type="radio" class="ace" /><span class="lbl middle"> Female</span>
';
        $buffer .= $indent . '						</label>
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
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<textarea id="form-field-comment"></textarea>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="space"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<h4 class="header blue bolder smaller">Contact</h4>
';
        $buffer .= $indent . '				<div class="form-group">
';
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<span class="input-icon input-icon-right">
';
        $buffer .= $indent . '							<input type="email" id="form-field-email" value="alexdoe@gmail.com" />
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-envelope"></i>
';
        $buffer .= $indent . '						</span>
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
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<span class="input-icon input-icon-right">
';
        $buffer .= $indent . '							<input type="url" id="form-field-website" value="http://www.alexdoe.com/" />
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-globe"></i>
';
        $buffer .= $indent . '						</span>
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
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<span class="input-icon input-icon-right">
';
        $buffer .= $indent . '							<input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
';
        $buffer .= $indent . '						</span>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="space"></div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<h4 class="header blue bolder smaller">Social</h4>
';
        $buffer .= $indent . '				<div class="form-group">
';
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<span class="input-icon">
';
        $buffer .= $indent . '							<input type="text" value="facebook_alexdoe" id="form-field-facebook" />
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-facebook blue"></i>
';
        $buffer .= $indent . '						</span>
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
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<span class="input-icon">
';
        $buffer .= $indent . '							<input type="text" value="twitter_alexdoe" id="form-field-twitter" />
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-twitter light-blue"></i>
';
        $buffer .= $indent . '						</span>
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
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<span class="input-icon">
';
        $buffer .= $indent . '							<input type="text" value="google_alexdoe" id="form-field-gplus" />
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-google-plus red"></i>
';
        $buffer .= $indent . '						</span>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			 
';
        $buffer .= $indent . '			 
';
        $buffer .= $indent . '			 <div id="edit-settings" class="tab-pane">
';
        $buffer .= $indent . '				<div class="space-10"></div>
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label class="inline">
';
        $buffer .= $indent . '						<input type="checkbox" name="form-field-checkbox" class="ace" />
';
        $buffer .= $indent . '						<span class="lbl"> Make my profile public</span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<div class="space-8"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label class="inline">
';
        $buffer .= $indent . '						<input type="checkbox" name="form-field-checkbox" class="ace" />
';
        $buffer .= $indent . '						<span class="lbl"> Email me new updates</span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<div class="space-8"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<div>
';
        $buffer .= $indent . '					<label class="inline">
';
        $buffer .= $indent . '						<input type="checkbox" name="form-field-checkbox" class="ace" />
';
        $buffer .= $indent . '						<span class="lbl"> Keep a history of my conversations</span>
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '					<label class="inline">
';
        $buffer .= $indent . '						<span class="space-2 block"></span>
';
        $buffer .= $indent . '						for <input type="text" class="input-mini" maxlength="3" /> days
';
        $buffer .= $indent . '					</label>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			 
';
        $buffer .= $indent . '			 <div id="edit-password" class="tab-pane">
';
        $buffer .= $indent . '				<div class="space-10"></div>
';
        $buffer .= $indent . '				<div class="form-group">
';
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<input type="password" id="form-field-pass1" />
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
        $buffer .= $indent . '					<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>
';
        $buffer .= $indent . '					<div class="col-sm-9">
';
        $buffer .= $indent . '						<input type="password" id="form-field-pass2" />
';
        $buffer .= $indent . '					</div>
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
        $buffer .= $indent . '	<div class="clearfix form-actions">
';
        $buffer .= $indent . '		<div class="col-md-offset-3 col-md-9">
';
        $buffer .= $indent . '			<button class="btn btn-info" type="button"><i class="ace-icon fa fa-check bigger-110"></i> Save</button>
';
        $buffer .= $indent . '			&nbsp; &nbsp;
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
        $buffer .= $indent . '  </form>
';
        $buffer .= $indent . ' </div><!-- /.span -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div><!-- /.user-profile -->';

        return $buffer;
    }
}
