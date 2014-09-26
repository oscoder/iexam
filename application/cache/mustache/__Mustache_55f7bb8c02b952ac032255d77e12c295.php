<?php

class __Mustache_55f7bb8c02b952ac032255d77e12c295 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div id="user-profile-1" class="user-profile row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="col-xs-12 col-sm-3 center">
';
        $buffer .= $indent . '		<div>
';
        $buffer .= $indent . '			<!-- #section:pages/profile.picture -->
';
        $buffer .= $indent . '			<span class="profile-picture">
';
        $buffer .= $indent . '				<img id="avatar" class="editable img-responsive" alt="Alex\'s Avatar" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/avatars/profile-pic.jpg" />
';
        $buffer .= $indent . '			</span>
';
        $buffer .= $indent . '			<!-- /section:pages/profile.picture -->
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="space-4"></div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
';
        $buffer .= $indent . '			  <div class="inline position-relative">
';
        $buffer .= $indent . '				<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-circle light-green"></i>
';
        $buffer .= $indent . '					&nbsp;<span class="white">Alex M. Doe</span>
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '				<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
';
        $buffer .= $indent . '					<li class="dropdown-header">
';
        $buffer .= $indent . '						Change Status
';
        $buffer .= $indent . '					</li>
';
        $buffer .= $indent . '					<li>
';
        $buffer .= $indent . '						<a href="#">
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-circle green"></i>&nbsp;
';
        $buffer .= $indent . '							<span class="green">Available</span>
';
        $buffer .= $indent . '						</a>
';
        $buffer .= $indent . '					</li>
';
        $buffer .= $indent . '					<li>
';
        $buffer .= $indent . '						<a href="#">
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-circle red"></i>&nbsp;
';
        $buffer .= $indent . '							<span class="red">Busy</span>
';
        $buffer .= $indent . '						</a>
';
        $buffer .= $indent . '					</li>
';
        $buffer .= $indent . '					<li>
';
        $buffer .= $indent . '						<a href="#">
';
        $buffer .= $indent . '							<i class="ace-icon fa fa-circle grey"></i>&nbsp;
';
        $buffer .= $indent . '							<span class="grey">Invisible</span>
';
        $buffer .= $indent . '						</a>
';
        $buffer .= $indent . '					</li>
';
        $buffer .= $indent . '				</ul>
';
        $buffer .= $indent . '			  </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="space-6"></div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<!-- #section:pages/profile.contact -->
';
        $buffer .= $indent . '		<div class="profile-contact-info">
';
        $buffer .= $indent . '			<div class="profile-contact-links align-left">
';
        $buffer .= $indent . '				<a href="#" class="btn btn-link">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
';
        $buffer .= $indent . '					Add as a friend
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<a href="#" class="btn btn-link">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
';
        $buffer .= $indent . '					Send a message
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '				<a href="#" class="btn btn-link">
';
        $buffer .= $indent . '					<i class="ace-icon fa fa-globe bigger-125 blue"></i>
';
        $buffer .= $indent . '					www.alexdoe.com
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="space-6"></div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="profile-social-links align-center">
';
        $buffer .= $indent . '				<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
';
        $buffer .= $indent . '					<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '				<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
';
        $buffer .= $indent . '					<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '				<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
';
        $buffer .= $indent . '					<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
';
        $buffer .= $indent . '				</a>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<!-- /section:pages/profile.contact -->
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="hr hr12 dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<!-- #section:custom/extra.grid -->
';
        $buffer .= $indent . '		<div class="clearfix">
';
        $buffer .= $indent . '			<div class="grid2">
';
        $buffer .= $indent . '				<span class="bigger-175 blue">25</span>
';
        $buffer .= $indent . '				<br />
';
        $buffer .= $indent . '				Followers
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="grid2">
';
        $buffer .= $indent . '				<span class="bigger-175 blue">12</span>
';
        $buffer .= $indent . '				<br />
';
        $buffer .= $indent . '				Following
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<!-- /section:custom/extra.grid -->
';
        $buffer .= $indent . '		<div class="hr hr16 dotted"></div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div class="col-xs-12 col-sm-9">
';
        $buffer .= $indent . '		<div class="center">
';
        if ($partial = $this->mustache->loadPartial('page.stats')) {
            $buffer .= $partial->renderInternal($context, $indent . '			');
        }
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="space-12"></div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<!-- #section:pages/profile.info -->
';
        $buffer .= $indent . '		<div class="profile-user-info profile-user-info-striped">
';
        // 'page.info1' section
        $value = $context->findDot('page.info1');
        $buffer .= $this->sectionBeedfe855bf10c2fd26c4f6736199ebe($context, $indent, $value);
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<!-- /section:pages/profile.info -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="space-20"></div>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<div class="widget-box transparent">
';
        $buffer .= $indent . '			<div class="widget-header widget-header-small">
';
        $buffer .= $indent . '				<h4 class="widget-title blue smaller"><i class="ace-icon fa fa-rss orange"></i> Recent Activities</h4>
';
        $buffer .= $indent . '				<div class="widget-toolbar action-buttons">
';
        $buffer .= $indent . '					<a href="#" data-action="reload"><i class="ace-icon fa fa-refresh blue"></i></a>&nbsp;
';
        $buffer .= $indent . '					<a href="#" class="pink"><i class="ace-icon fa fa-trash-o"></i></a>
';
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<div class="widget-body">
';
        $buffer .= $indent . '			 <div class="widget-main padding-8">
';
        $buffer .= $indent . '				<!-- #section:pages/profile.feed -->
';
        $buffer .= $indent . '				<div id="profile-feed-1" class="profile-feed">
';
        // 'page.activities.first_five' section
        $value = $context->findDot('page.activities.first_five');
        $buffer .= $this->section29d2aaf0e96634bd9216c5a7001ab1ff($context, $indent, $value);
        // 'page.activities.second_five' section
        $value = $context->findDot('page.activities.second_five');
        $buffer .= $this->section29d2aaf0e96634bd9216c5a7001ab1ff($context, $indent, $value);
        $buffer .= $indent . '				</div>
';
        $buffer .= $indent . '				<!-- /section:pages/profile.feed -->
';
        $buffer .= $indent . '			 </div>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="hr hr2 hr-double"></div>
';
        $buffer .= $indent . '		<div class="space-6"></div>
';
        $buffer .= $indent . '		<div class="center">
';
        $buffer .= $indent . '			<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
';
        $buffer .= $indent . '				<span class="bigger-110">View more activities</span>
';
        $buffer .= $indent . '				<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
';
        $buffer .= $indent . '			</button>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section0efc7480d93b580ab78d4402b3f9d53d(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '						<i class="';
                $value = $this->resolveValue($context->find('icon'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' light-orange bigger-110"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3423dbbb6907dabb45ec84c735b1918(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<span class="editable" id="{{id}}">{{value}}</span>
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
                
                $buffer .= $indent . '					<span class="editable" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('value'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBeedfe855bf10c2fd26c4f6736199ebe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="profile-info-row">
				<div class="profile-info-name">
					{{{title}}}
				</div>
				
				<div class="profile-info-value">
					{{#icon}}
						<i class="{{icon}} light-orange bigger-110"></i>
					{{/icon}}
					{{#content}}
					<span class="editable" id="{{id}}">{{value}}</span>
					{{/content}}
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
                
                $buffer .= $indent . '			<div class="profile-info-row">
';
                $buffer .= $indent . '				<div class="profile-info-name">
';
                $buffer .= $indent . '					';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '				<div class="profile-info-value">
';
                // 'icon' section
                $value = $context->find('icon');
                $buffer .= $this->section0efc7480d93b580ab78d4402b3f9d53d($context, $indent, $value);
                // 'content' section
                $value = $context->find('content');
                $buffer .= $this->sectionF3423dbbb6907dabb45ec84c735b1918($context, $indent, $value);
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29d2aaf0e96634bd9216c5a7001ab1ff(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '						');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
