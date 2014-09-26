<?php

class __Mustache_c8ded8150456be98fd89a2a15be82042 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="clearfix">
';
        $buffer .= $indent . '	<div class="pull-left alert alert-success no-margin">
';
        $buffer .= $indent . '		<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-umbrella bigger-120 blue"></i> Click on the image below or on profile fields to edit them ...
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<div class="pull-right">
';
        $buffer .= $indent . '		<span class="green middle bolder">Choose profile: &nbsp;</span>
';
        $buffer .= $indent . '		<div class="btn-toolbar inline middle no-margin">
';
        $buffer .= $indent . '			<div data-toggle="buttons" class="btn-group no-margin">
';
        $buffer .= $indent . '				<label class="btn btn-sm btn-yellow active">
';
        $buffer .= $indent . '					<span class="bigger-110">1</span>
';
        $buffer .= $indent . '					<input type="radio" value="1" />
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '				<label class="btn btn-sm btn-yellow">
';
        $buffer .= $indent . '					<span class="bigger-110">2</span>
';
        $buffer .= $indent . '					<input type="radio" value="2" />
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '				<label class="btn btn-sm btn-yellow">
';
        $buffer .= $indent . '					<span class="bigger-110">3</span>
';
        $buffer .= $indent . '					<input type="radio" value="3" />
';
        $buffer .= $indent . '				</label>
';
        $buffer .= $indent . '			</div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hr dotted"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div>
';
        if ($partial = $this->mustache->loadPartial('page.style_1')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hide">
';
        if ($partial = $this->mustache->loadPartial('page.style_2')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hide">
';
        if ($partial = $this->mustache->loadPartial('page.style_3')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
