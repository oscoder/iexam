<?php

class __Mustache_05580b30a9f25d8570d3ca45f9350aa5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="align-right">
';
        $buffer .= $indent . '	<span class="green middle bolder">Choose timeline: &nbsp;</span>
';
        $buffer .= $indent . '	<div class="btn-toolbar inline middle no-margin">
';
        $buffer .= $indent . '		<div data-toggle="buttons" class="btn-group no-margin">
';
        $buffer .= $indent . '			<label class="btn btn-sm btn-yellow active">
';
        $buffer .= $indent . '				<span class="bigger-110">1</span>
';
        $buffer .= $indent . '				<input type="radio" value="1" />
';
        $buffer .= $indent . '			</label>
';
        $buffer .= $indent . '			<label class="btn btn-sm btn-yellow">
';
        $buffer .= $indent . '				<span class="bigger-110">2</span>
';
        $buffer .= $indent . '				<input type="radio" value="2" />
';
        $buffer .= $indent . '			</label>
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
        $buffer .= $indent . '<div id="timeline-1">
';
        if ($partial = $this->mustache->loadPartial('page.style_1')) {
            $buffer .= $partial->renderInternal($context, $indent . ' ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="timeline-2" class="hide">
';
        if ($partial = $this->mustache->loadPartial('page.style_2')) {
            $buffer .= $partial->renderInternal($context, $indent . ' ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
