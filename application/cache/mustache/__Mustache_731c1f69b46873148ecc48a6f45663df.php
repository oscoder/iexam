<?php

class __Mustache_731c1f69b46873148ecc48a6f45663df extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="footer"><div class="footer-inner">
';
        $buffer .= $indent . '	<!-- #section:basics/footer -->
';
        $buffer .= $indent . '	<div class="footer-content">
';
        $buffer .= $indent . '		<span class="bigger-120"><span class="blue bolder">iExam Backends</span> &copy; 2014-2020</span>
';
        $buffer .= $indent . '		&nbsp; &nbsp;
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:basics/footer -->
';
        $buffer .= $indent . '</div></div>';

        return $buffer;
    }
}
