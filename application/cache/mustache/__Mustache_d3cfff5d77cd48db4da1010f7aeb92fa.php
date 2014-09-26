<?php

class __Mustache_d3cfff5d77cd48db4da1010f7aeb92fa extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="tabbable">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <ul id="myTab" class="nav nav-tabs">
';
        $buffer .= $indent . '        <li class="active">
';
        $buffer .= $indent . '            <a href="#home" data-toggle="tab">Home</a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a href="#profile" data-toggle="tab">Messages</a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="tab-content">
';
        $buffer .= $indent . '        <div class="tab-pane in active" id="home">
';
        $buffer .= $indent . '            home tab content
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="tab-pane" id="profile">
';
        $buffer .= $indent . '            profile tab content
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
