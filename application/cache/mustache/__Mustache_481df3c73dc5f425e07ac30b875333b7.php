<?php

class __Mustache_481df3c73dc5f425e07ac30b875333b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'site.demo' section
        $value = $context->findDot('site.demo');
        $buffer .= $this->section2f9e557b1a468261da69ba059367dad0($context, $indent, $value);
        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/dummy.html" class="dropzone" id="dropzone">
';
        $buffer .= $indent . '  <div class="fallback">
';
        $buffer .= $indent . '    <input name="file" type="file" multiple />
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section2f9e557b1a468261da69ba059367dad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <div class="alert alert-info">
   <i class="ace-icon fa fa-hand-o-right"></i> Please note that demo server is not configured to save uploaded files, therefore you may get an error message.
   <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
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
                
                $buffer .= $indent . ' <div class="alert alert-info">
';
                $buffer .= $indent . '   <i class="ace-icon fa fa-hand-o-right"></i> Please note that demo server is not configured to save uploaded files, therefore you may get an error message.
';
                $buffer .= $indent . '   <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
';
                $buffer .= $indent . ' </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
