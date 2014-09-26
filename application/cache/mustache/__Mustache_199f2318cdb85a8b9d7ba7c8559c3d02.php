<?php

class __Mustache_199f2318cdb85a8b9d7ba7c8559c3d02 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div id="user-profile-2" class="user-profile">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="tabbable">
';
        $buffer .= $indent . '            <ul class="nav nav-tabs padding-18">
';
        $buffer .= $indent . '              <li class="active"><a data-toggle="tab" href="#home"><i class="green ace-icon fa fa-user bigger-120"></i> Profile</a></li>
';
        $buffer .= $indent . '              <li><a data-toggle="tab" href="#feed"><i class="orange ace-icon fa fa-rss bigger-120"></i> Activity Feed</a></li>
';
        $buffer .= $indent . '              <li><a data-toggle="tab" href="#friends"><i class="blue ace-icon fa fa-users bigger-120"></i> Friends</a></li>
';
        $buffer .= $indent . '			  <li><a data-toggle="tab" href="#pictures"><i class="pink ace-icon fa fa-picture-o bigger-120"></i> Pictures</a></li>
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="tab-content no-border padding-24">
';
        $buffer .= $indent . '			  <div id="home" class="tab-pane in active">
';
        $buffer .= $indent . '				<div class="row">
';
        $buffer .= $indent . '					<div class="col-xs-12 col-sm-3 center">
';
        $buffer .= $indent . '						<span class="profile-picture">
';
        $buffer .= $indent . '							<img class="editable img-responsive" alt="Alex\'s Avatar" id="avatar2" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/avatars/profile-pic.jpg" />
';
        $buffer .= $indent . '						</span>
';
        $buffer .= $indent . '						<div class="space space-4"></div>
';
        $buffer .= $indent . '						<a href="#" class="btn btn-sm btn-block btn-success">
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-plus-circle bigger-120"></i>
';
        $buffer .= $indent . '							<span class="bigger-110">Add as a friend</span>
';
        $buffer .= $indent . '						</a>
';
        $buffer .= $indent . '						<a href="#" class="btn btn-sm btn-block btn-primary">
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-envelope-o bigger-110"></i>
';
        $buffer .= $indent . '							<span class="bigger-110">Send a message</span>
';
        $buffer .= $indent . '						</a>
';
        $buffer .= $indent . '					</div><!-- /.col -->
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<h4 class="blue">
';
        $buffer .= $indent . '							<span class="middle">Alex M. Doe</span> 
';
        $buffer .= $indent . '							<span class="label label-purple arrowed-in-right">
';
        $buffer .= $indent . '								<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
';
        $buffer .= $indent . '								online
';
        $buffer .= $indent . '							</span>
';
        $buffer .= $indent . '						</h4>
';
        $buffer .= $indent . '						<div class="profile-user-info">
';
        $buffer .= $indent . '							';
        // 'page.info1' section
        $value = $context->findDot('page.info1');
        $buffer .= $this->section7017aa89bf6bdd642309d12696d9dcf9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<div class="hr hr-8 dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						<div class="profile-user-info">
';
        // 'page.info2' section
        $value = $context->findDot('page.info2');
        $buffer .= $this->section3e96a42b6279561262090a45a1bd95d8($context, $indent, $value);
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '					</div><!-- /.col -->
';
        $buffer .= $indent . '				</div><!-- /.row -->
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="space-20"></div>
';
        $buffer .= $indent . '				
';
        $buffer .= $indent . '				<div class="row">
';
        $buffer .= $indent . '					<div class="col-xs-12 col-sm-6">
';
        $buffer .= $indent . '					 <div class="widget-box transparent">
';
        $buffer .= $indent . '						<div class="widget-header widget-header-small">
';
        $buffer .= $indent . '							<h4 class="widget-title smaller"><i class="ace-icon fa fa-check-square-o bigger-110"></i> Little About Me</h4>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '						<div class="widget-body"><div class="widget-main">
';
        $buffer .= $indent . '							<p>
';
        $buffer .= $indent . '							My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
';
        $buffer .= $indent . '							</p>
';
        $buffer .= $indent . '							<p>
';
        $buffer .= $indent . '							Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
';
        $buffer .= $indent . '							</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '							<p>
';
        $buffer .= $indent . '							The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
';
        $buffer .= $indent . '							</p>
';
        $buffer .= $indent . '							
';
        $buffer .= $indent . '							<p>
';
        $buffer .= $indent . '							Thanks for visiting my profile.
';
        $buffer .= $indent . '							</p>
';
        $buffer .= $indent . '						</div></div>
';
        $buffer .= $indent . '					 </div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '					<div class="col-xs-12 col-sm-6">
';
        $buffer .= $indent . '					 <div class="widget-box transparent">
';
        $buffer .= $indent . '						<div class="widget-header widget-header-small header-color-blue2">
';
        $buffer .= $indent . '							<h4 class="widget-title smaller"><i class="ace-icon fa fa-lightbulb-o bigger-120"></i> My Skills</h4>
';
        $buffer .= $indent . '						</div>
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						<div class="widget-body"><div class="widget-main padding-16">
';
        $buffer .= $indent . '						 <div class="clearfix">
';
        $buffer .= $indent . '							<div class="grid3 center">
';
        $buffer .= $indent . '							  <!-- #section:plugins/charts.easypiechart -->
';
        $buffer .= $indent . '							  <div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
';
        $buffer .= $indent . '								<span class="percent">45</span>%
';
        $buffer .= $indent . '							  </div>
';
        $buffer .= $indent . '							  <!-- /section:plugins/charts.easypiechart -->
';
        $buffer .= $indent . '							  <div class="space-2"></div>
';
        $buffer .= $indent . '							  Graphic Design
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							
';
        $buffer .= $indent . '							
';
        $buffer .= $indent . '							<div class="grid3 center">
';
        $buffer .= $indent . '							  <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
';
        $buffer .= $indent . '								<span class="percent">90</span>%
';
        $buffer .= $indent . '							  </div>
';
        $buffer .= $indent . '							  <div class="space-2"></div>
';
        $buffer .= $indent . '							  HTML5 & CSS3
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							
';
        $buffer .= $indent . '							
';
        $buffer .= $indent . '							<div class="grid3 center">
';
        $buffer .= $indent . '							  <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
';
        $buffer .= $indent . '								<span class="percent">80</span>%
';
        $buffer .= $indent . '							  </div>
';
        $buffer .= $indent . '							  <div class="space-2"></div>
';
        $buffer .= $indent . '							  Javascript/jQuery
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '						  </div>
';
        $buffer .= $indent . '													
';
        $buffer .= $indent . '							<div class="hr hr-16"></div>
';
        $buffer .= $indent . '							
';
        $buffer .= $indent . '							<!-- #section:pages/profile.skill-progress -->
';
        $buffer .= $indent . '							<div class="profile-skills">
';
        $buffer .= $indent . '								<div class="progress"><div class="progress-bar" style="width:80%"><span class="pull-left">HTML5 & CSS3</span> <span class="pull-right">80%</span></div></div>
';
        $buffer .= $indent . '								<div class="progress"><div class="progress-bar progress-bar-success" style="width:72%"><span class="pull-left">Javascript & jQuery</span><span class="pull-right">72%</span></div></div>
';
        $buffer .= $indent . '								<div class="progress"><div class="progress-bar progress-bar-purple" style="width:70%"><span class="pull-left">PHP & MySQL</span><span class="pull-right">70%</span></div></div>
';
        $buffer .= $indent . '								<div class="progress"><div class="progress-bar progress-bar-warning" style="width:50%"><span class="pull-left">Wordpress</span><span class="pull-right">50%</span></div></div>
';
        $buffer .= $indent . '								<div class="progress"><div class="progress-bar progress-bar-danger" style="width:38%"><span class="pull-left">Photoshop</span><span class="pull-right">38%</span></div></div>
';
        $buffer .= $indent . '							</div>
';
        $buffer .= $indent . '							<!-- /section:pages/profile.skill-progress -->
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '						</div></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '						
';
        $buffer .= $indent . '					 </div>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '			   </div>
';
        $buffer .= $indent . '			  </div><!-- /#home -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			  <div id="feed" class="tab-pane">
';
        $buffer .= $indent . '					<div class="profile-feed row">
';
        $buffer .= $indent . '					  <div class="col-sm-6">
';
        // 'page.activities.first_five' section
        $value = $context->findDot('page.activities.first_five');
        $buffer .= $this->sectionEbb8d80b582dfe958a9a4f442a9c28ee($context, $indent, $value);
        $buffer .= $indent . '					  </div><!-- /.col -->
';
        $buffer .= $indent . '					  
';
        $buffer .= $indent . '					  <div class="col-sm-6">
';
        // 'page.activities.second_five' section
        $value = $context->findDot('page.activities.second_five');
        $buffer .= $this->sectionEbb8d80b582dfe958a9a4f442a9c28ee($context, $indent, $value);
        $buffer .= $indent . '					  </div><!-- /.col -->
';
        $buffer .= $indent . '					</div><!-- /.row -->
';
        $buffer .= $indent . '					
';
        $buffer .= $indent . '					<div class="space-12"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '					<div class="center">
';
        $buffer .= $indent . '						<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
';
        $buffer .= $indent . '							<span class="bigger-110">View more activities</span>
';
        $buffer .= $indent . '							<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
';
        $buffer .= $indent . '						</button>
';
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '			  </div><!-- /#feed -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			  <div id="friends" class="tab-pane">
';
        $buffer .= $indent . '					<!-- #section:pages/profile.friends -->
';
        $buffer .= $indent . '					<div class="profile-users clearfix">
';
        if ($partial = $this->mustache->loadPartial('page.friends')) {
            $buffer .= $partial->renderInternal($context, $indent . '						');
        }
        $buffer .= $indent . '					</div>
';
        $buffer .= $indent . '					<!-- /section:pages/profile.friends -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '					<div class="hr hr10 hr-double"></div>
';
        $buffer .= $indent . '					<ul class="pager pull-right">
';
        $buffer .= $indent . '					  <li class="previous disabled"><a href="#">&larr; Prev</a></li>
';
        $buffer .= $indent . '					  <li class="next"><a href="#">Next &rarr;</a></li>
';
        $buffer .= $indent . '					</ul>
';
        $buffer .= $indent . '			  </div><!-- /#friends -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '			  <div id="pictures" class="tab-pane">
';
        if ($partial = $this->mustache->loadPartial('page.photos')) {
            $buffer .= $partial->renderInternal($context, $indent . '					');
        }
        $buffer .= $indent . '			  </div><!-- /#pictures -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '           </div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionEaab065c8eafe49aff9763d7aa262b61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
										<i class="{{icon}} light-orange bigger-110"></i>
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
                
                $buffer .= $indent . '										<i class="';
                $value = $this->resolveValue($context->find('icon'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' light-orange bigger-110"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD05090778b1355c46853c59c00286b73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<span>{{value}}</span>
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
                
                $buffer .= $indent . '									<span>';
                $value = $this->resolveValue($context->find('value'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7017aa89bf6bdd642309d12696d9dcf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^last}}{{! Don\'t print the last item here (the About me field) }}
							<div class="profile-info-row">
								<div class="profile-info-name">
									{{{title}}}
								</div>
								
								<div class="profile-info-value">
									{{#icon}}
										<i class="{{icon}} light-orange bigger-110"></i>
									{{/icon}}
									{{#content}}
									<span>{{value}}</span>
									{{/content}}
								</div>
							</div>
							{{/last}}';
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
                
                // 'last' inverted section
                $value = $context->find('last');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    $buffer .= $indent . '							<div class="profile-info-row">
';
                    $buffer .= $indent . '								<div class="profile-info-name">
';
                    $buffer .= $indent . '									';
                    $value = $this->resolveValue($context->find('title'), $context, $indent);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '								</div>
';
                    $buffer .= $indent . '								
';
                    $buffer .= $indent . '								<div class="profile-info-value">
';
                    // 'icon' section
                    $value = $context->find('icon');
                    $buffer .= $this->sectionEaab065c8eafe49aff9763d7aa262b61($context, $indent, $value);
                    // 'content' section
                    $value = $context->find('content');
                    $buffer .= $this->sectionD05090778b1355c46853c59c00286b73($context, $indent, $value);
                    $buffer .= $indent . '								</div>
';
                    $buffer .= $indent . '							</div>
';
                    $buffer .= $indent . '							';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE560460be3b97c03ac888b5bbcf6779e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
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
                
                $buffer .= $indent . '									<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb5b2001af11e5706c7c5a9038899eb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
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
                
                $buffer .= $indent . '									<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2e89aca34dd4466c6d71f4f2be0259(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<a href="#">Find me on Facebook</a>
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
                
                $buffer .= $indent . '									<a href="#">Find me on Facebook</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section905bcdc30afd9188461603b3a02d3167(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<a href="#">Follow me on Twitter</a>
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
                
                $buffer .= $indent . '									<a href="#">Follow me on Twitter</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd98babda94a1167bd4a8b65b742ece8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<a href="#" target="_blank">{{url}}</a>
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
                
                $buffer .= $indent . '									<a href="#" target="_blank">';
                $value = $this->resolveValue($context->find('url'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e96a42b6279561262090a45a1bd95d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<div class="profile-info-row">
								<div class="profile-info-name">
									{{#facebook}}
									<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
									{{/facebook}}
									{{#twitter}}
									<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
									{{/twitter}}
									{{title}}
								</div>

								<div class="profile-info-value">
									{{#facebook}}
									<a href="#">Find me on Facebook</a>
									{{/facebook}}
									{{#twitter}}
									<a href="#">Follow me on Twitter</a>
									{{/twitter}}
									{{#url}}
									<a href="#" target="_blank">{{url}}</a>
									{{/url}}
								</div>
							</div>
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
                
                $buffer .= $indent . '							<div class="profile-info-row">
';
                $buffer .= $indent . '								<div class="profile-info-name">
';
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->sectionE560460be3b97c03ac888b5bbcf6779e($context, $indent, $value);
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->sectionBb5b2001af11e5706c7c5a9038899eb6($context, $indent, $value);
                $buffer .= $indent . '									';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '								</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '								<div class="profile-info-value">
';
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->section9e2e89aca34dd4466c6d71f4f2be0259($context, $indent, $value);
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->section905bcdc30afd9188461603b3a02d3167($context, $indent, $value);
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionEd98babda94a1167bd4a8b65b742ece8($context, $indent, $value);
                $buffer .= $indent . '								</div>
';
                $buffer .= $indent . '							</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbb8d80b582dfe958a9a4f442a9c28ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							{{> page.activity}}
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
                
                if ($partial = $this->mustache->loadPartial('page.activity')) {
                    $buffer .= $partial->renderInternal($context, $indent . '							');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
