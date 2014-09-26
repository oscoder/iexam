<?php

class __Mustache_59d7298ae8593b66ef7ca7f6c0c2200d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '    <div class="col-xs-12">
';
        $buffer .= $indent . '        <h3 class="header smaller lighter blue">已发布的信息</h3>
';
        $buffer .= $indent . '        <!-- <div class="table-responsive"> -->
';
        $buffer .= $indent . '        <!-- <div class="dataTables_borderWrap"> -->
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
';
        $buffer .= $indent . '                <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th class="center">
';
        $buffer .= $indent . '                        <label class="position-relative"><input type="checkbox" class="ace" /><span class="lbl"></span></label>
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>编号</th>
';
        $buffer .= $indent . '                    <th>地区</th>
';
        $buffer .= $indent . '                    <th>标题</th>
';
        $buffer .= $indent . '                    <th>引用页</th>
';
        $buffer .= $indent . '                    <th class="hidden-480">Status</th>
';
        $buffer .= $indent . '                    <th></th>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <tbody>
';
        $buffer .= $indent . '
';
        // 'page.domains2' section
        $value = $context->findDot('page.domains2');
        $buffer .= $this->section5c6d622c02c1520beeb63f7a43df7631($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </tbody>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionA52362edd056ecf8c1f565c0b0162049(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class=\'label label-sm label-warning\'>Expiring</span>
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
                
                $buffer .= $indent . '                                <span class=\'label label-sm label-warning\'>Expiring</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDce76dfec05545658aa8f513f5311cb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class=\'label label-sm label-success\'>Registered</span>
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
                
                $buffer .= $indent . '                                <span class=\'label label-sm label-success\'>Registered</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54e4fddf44cff3d8dd6ab87f5d00491f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class=\'label label-sm label-inverse arrowed-in\'>Flagged</span>
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
                
                $buffer .= $indent . '                                <span class=\'label label-sm label-inverse arrowed-in\'>Flagged</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCed95f2171edd0835d2ccddb5d64dbb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class=\'label label-sm label-info arrowed arrowed-righ\'>Sold</span>
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
                
                $buffer .= $indent . '                                <span class=\'label label-sm label-info arrowed arrowed-righ\'>Sold</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c6d622c02c1520beeb63f7a43df7631(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr>
                        <td class=\'center\'>
                            <label class="position-relative"><input type=\'checkbox\' class="ace" /><span class="lbl"></span></label>
                        </td>
                        <td><a href=\'#\'>{{name}}</a></td>
                        <td>{{price}}</td>
                        <td class=\'hidden-480\'>{{clicks}}</td>
                        <td>{{update}}</td>
                        <td class=\'hidden-480\'>
                            {{#expiring}}
                                <span class=\'label label-sm label-warning\'>Expiring</span>
                            {{/expiring}}
                            {{#registered}}
                                <span class=\'label label-sm label-success\'>Registered</span>
                            {{/registered}}
                            {{#flagged}}
                                <span class=\'label label-sm label-inverse arrowed-in\'>Flagged</span>
                            {{/flagged}}
                            {{#sold}}
                                <span class=\'label label-sm label-info arrowed arrowed-righ\'>Sold</span>
                            {{/sold}}
                        </td>
                        <td>
                            <div class=\'hidden-sm hidden-xs action-buttons\'>
                                <a class="blue" href="#"><i class="ace-icon fa fa-search-plus bigger-130"></i></a>
                                <a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
                                <a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
                            </div>


                            <div class=\'hidden-md hidden-lg\'>
                                <div class="inline position-relative">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto"><i class="ace-icon fa fa-caret-down icon-only bigger-120"></i></button>
                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>
                                        <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a></li>
                                        <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
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
                
                $buffer .= $indent . '                    <tr>
';
                $buffer .= $indent . '                        <td class=\'center\'>
';
                $buffer .= $indent . '                            <label class="position-relative"><input type=\'checkbox\' class="ace" /><span class="lbl"></span></label>
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td><a href=\'#\'>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>
';
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('price'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td class=\'hidden-480\'>';
                $value = $this->resolveValue($context->find('clicks'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('update'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td class=\'hidden-480\'>
';
                // 'expiring' section
                $value = $context->find('expiring');
                $buffer .= $this->sectionA52362edd056ecf8c1f565c0b0162049($context, $indent, $value);
                // 'registered' section
                $value = $context->find('registered');
                $buffer .= $this->sectionDce76dfec05545658aa8f513f5311cb9($context, $indent, $value);
                // 'flagged' section
                $value = $context->find('flagged');
                $buffer .= $this->section54e4fddf44cff3d8dd6ab87f5d00491f($context, $indent, $value);
                // 'sold' section
                $value = $context->find('sold');
                $buffer .= $this->sectionCed95f2171edd0835d2ccddb5d64dbb9($context, $indent, $value);
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td>
';
                $buffer .= $indent . '                            <div class=\'hidden-sm hidden-xs action-buttons\'>
';
                $buffer .= $indent . '                                <a class="blue" href="#"><i class="ace-icon fa fa-search-plus bigger-130"></i></a>
';
                $buffer .= $indent . '                                <a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
';
                $buffer .= $indent . '                                <a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            <div class=\'hidden-md hidden-lg\'>
';
                $buffer .= $indent . '                                <div class="inline position-relative">
';
                $buffer .= $indent . '                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto"><i class="ace-icon fa fa-caret-down icon-only bigger-120"></i></button>
';
                $buffer .= $indent . '                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
';
                $buffer .= $indent . '                                        <li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>
';
                $buffer .= $indent . '                                        <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a></li>
';
                $buffer .= $indent . '                                        <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span> </a></li>
';
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
