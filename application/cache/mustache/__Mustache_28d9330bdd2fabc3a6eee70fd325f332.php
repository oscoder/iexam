<?php

class __Mustache_28d9330bdd2fabc3a6eee70fd325f332 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'site.remote_bootstrap_js' section
        $value = $context->findDot('site.remote_bootstrap_js');
        $buffer .= $this->section42521d14f46cf67eccbc410d5dd8cf3d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'site.remote_bootstrap_js' inverted section
        $value = $context->findDot('site.remote_bootstrap_js');
        if (empty($value)) {
            
            $buffer .= $indent . '<script src="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
            $buffer .= $value;
            $buffer .= '/js/bootstrap.min.js"></script>
';
        }

        return $buffer;
    }

    private function section42521d14f46cf67eccbc410d5dd8cf3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script src="{{{site.protocol}}}//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
                
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
