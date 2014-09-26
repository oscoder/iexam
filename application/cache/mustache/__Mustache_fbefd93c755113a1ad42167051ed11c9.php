<?php

class __Mustache_fbefd93c755113a1ad42167051ed11c9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- basic scripts -->
';
        if ($partial = $this->mustache->loadPartial('layout._template.jquery')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- inline scripts related to this page -->
';
        // 'page.inline_scripts' section
        $value = $context->findDot('page.inline_scripts');
        $buffer .= $this->section458013a5eeea0061124ccd780977da71($context, $indent, $value);

        return $buffer;
    }

    private function section458013a5eeea0061124ccd780977da71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script type="text/javascript">
{{{page.inline_scripts}}}
</script>
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
                
                $buffer .= $indent . '<script type="text/javascript">
';
                $value = $this->resolveValue($context->findDot('page.inline_scripts'), $context, $indent);
                $buffer .= $indent . $value;
                $buffer .= '
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
