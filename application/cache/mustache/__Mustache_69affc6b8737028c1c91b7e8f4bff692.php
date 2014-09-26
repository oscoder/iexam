<?php

class __Mustache_69affc6b8737028c1c91b7e8f4bff692 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- #section:pages/inbox.message-list -->
';
        $buffer .= $indent . '<div class="message-list" id="message-list">
';
        // 'page.messages' section
        $value = $context->findDot('page.messages');
        $buffer .= $this->section3daed4838f21a6e92ac8bdb0b2c3dc9a($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /section:pages/inbox.message-list -->';

        return $buffer;
    }

    private function sectionF3169c2c247b74594c0ae77288d28709(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' message-unread';
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
                
                $buffer .= ' message-unread';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14d60df46f88c5a5c7e424f8b825a6a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'ace-icon fa fa-star orange2';
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
                
                $buffer .= 'ace-icon fa fa-star orange2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4505d97d3dc077a8f7201060f8820a12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="light-grey">({{count}})</span>';
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
                
                $buffer .= '<span class="light-grey">(';
                $value = $this->resolveValue($context->find('count'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ')</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD15595e4409016c083aa74c08c748c25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<span class="attachment">
			<i class="ace-icon fa fa-paperclip"></i>
		</span>
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
                
                $buffer .= $indent . '		<span class="attachment">
';
                $buffer .= $indent . '			<i class="ace-icon fa fa-paperclip"></i>
';
                $buffer .= $indent . '		</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93acf0e16d38af6fa4ae4ca1b835ee35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<i class="ace-icon fa fa-reply light-grey"></i>
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
                
                $buffer .= $indent . '				<i class="ace-icon fa fa-reply light-grey"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDede63b9ae95c3b6489230bd23a2aad9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<i class="ace-icon fa fa-mail-forward light-grey"></i>
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
                
                $buffer .= $indent . '				<i class="ace-icon fa fa-mail-forward light-grey"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section179bb490a03e7989c9392e903ec63284(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<i class="ace-icon fa fa-flag fa-flip-horizontal light-grey"></i>
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
                
                $buffer .= $indent . '				<i class="ace-icon fa fa-flag fa-flip-horizontal light-grey"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section012a28a3caeec8f8841d0e74abfb3f89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<span class="message-flags">
				{{#replied}}
				<i class="ace-icon fa fa-reply light-grey"></i>
				{{/replied}}
				{{#forwarded}}
				<i class="ace-icon fa fa-mail-forward light-grey"></i>
				{{/forwarded}}
				{{#flag}}
				<i class="ace-icon fa fa-flag fa-flip-horizontal light-grey"></i>
				{{/flag}}
			</span>
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
                
                $buffer .= $indent . '			<span class="message-flags">
';
                // 'replied' section
                $value = $context->find('replied');
                $buffer .= $this->section93acf0e16d38af6fa4ae4ca1b835ee35($context, $indent, $value);
                // 'forwarded' section
                $value = $context->find('forwarded');
                $buffer .= $this->sectionDede63b9ae95c3b6489230bd23a2aad9($context, $indent, $value);
                // 'flag' section
                $value = $context->find('flag');
                $buffer .= $this->section179bb490a03e7989c9392e903ec63284($context, $indent, $value);
                $buffer .= $indent . '			</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF799e61b595aac64dc7a807f52441c2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<span class="badge badge-{{tag}} mail-tag"></span>
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
                
                $buffer .= $indent . '			<span class="badge badge-';
                $value = $this->resolveValue($context->find('tag'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' mail-tag"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3daed4838f21a6e92ac8bdb0b2c3dc9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<!-- #section:pages/inbox.message-list.item -->
	<div class="message-item{{#unread}} message-unread{{/unread}}">
		<label class="inline">
			<input type="checkbox" class="ace" />
			<span class="lbl"></span>
		</label>

		<i class="message-star {{#starred}}ace-icon fa fa-star orange2{{/starred}}{{^starred}}ace-icon fa fa-star-o light-grey{{/starred}}"></i>
		<span class="sender" title="{{sender}}">{{sender}} {{#count}}<span class="light-grey">({{count}})</span>{{/count}}</span>
		<span class="time">{{time}}</span>
		{{#attachment}}
		<span class="attachment">
			<i class="ace-icon fa fa-paperclip"></i>
		</span>
		{{/attachment}}

		<span class="summary">
			{{#flags}}
			<span class="message-flags">
				{{#replied}}
				<i class="ace-icon fa fa-reply light-grey"></i>
				{{/replied}}
				{{#forwarded}}
				<i class="ace-icon fa fa-mail-forward light-grey"></i>
				{{/forwarded}}
				{{#flag}}
				<i class="ace-icon fa fa-flag fa-flip-horizontal light-grey"></i>
				{{/flag}}
			</span>
			{{/flags}}
			{{#tag}}
			<span class="badge badge-{{tag}} mail-tag"></span>
			{{/tag}}
			<span class="text">
			{{subject}}
			</span>
		</span>
	</div>
	<!-- /section:pages/inbox.message-list.item -->
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
                
                $buffer .= $indent . '	<!-- #section:pages/inbox.message-list.item -->
';
                $buffer .= $indent . '	<div class="message-item';
                // 'unread' section
                $value = $context->find('unread');
                $buffer .= $this->sectionF3169c2c247b74594c0ae77288d28709($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '		<label class="inline">
';
                $buffer .= $indent . '			<input type="checkbox" class="ace" />
';
                $buffer .= $indent . '			<span class="lbl"></span>
';
                $buffer .= $indent . '		</label>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '		<i class="message-star ';
                // 'starred' section
                $value = $context->find('starred');
                $buffer .= $this->section14d60df46f88c5a5c7e424f8b825a6a5($context, $indent, $value);
                // 'starred' inverted section
                $value = $context->find('starred');
                if (empty($value)) {
                    
                    $buffer .= 'ace-icon fa fa-star-o light-grey';
                }
                $buffer .= '"></i>
';
                $buffer .= $indent . '		<span class="sender" title="';
                $value = $this->resolveValue($context->find('sender'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('sender'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'count' section
                $value = $context->find('count');
                $buffer .= $this->section4505d97d3dc077a8f7201060f8820a12($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '		<span class="time">';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'attachment' section
                $value = $context->find('attachment');
                $buffer .= $this->sectionD15595e4409016c083aa74c08c748c25($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '		<span class="summary">
';
                // 'flags' section
                $value = $context->find('flags');
                $buffer .= $this->section012a28a3caeec8f8841d0e74abfb3f89($context, $indent, $value);
                // 'tag' section
                $value = $context->find('tag');
                $buffer .= $this->sectionF799e61b595aac64dc7a807f52441c2a($context, $indent, $value);
                $buffer .= $indent . '			<span class="text">
';
                $buffer .= $indent . '			';
                $value = $this->resolveValue($context->find('subject'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '			</span>
';
                $buffer .= $indent . '		</span>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	<!-- /section:pages/inbox.message-list.item -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
