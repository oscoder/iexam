<?php

class __Mustache_c000e5329e23ea4312e89900a1d4b63f extends Mustache_Template
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
        $buffer .= $indent . '                    <th class=\'hidden-480\'>地区</th>
';
        $buffer .= $indent . '                    <th>标题</th>
';
        $buffer .= $indent . '                    <th class=\'hidden-480\'>引用页</th>
';
        $buffer .= $indent . '                    <th></th>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <tbody>
';
        $buffer .= $indent . '
';
        // 'page.domains2' section
        $value = $context->findDot('page.domains2');
        $buffer .= $this->section48bbd08698dbcbf2e98d220c45985ccc($context, $indent, $value);
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

    private function section48bbd08698dbcbf2e98d220c45985ccc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr>
                        <td class=\'center\'>
                            <label class="position-relative"><input type=\'checkbox\' class="ace" /><span class="lbl"></span></label>
                        </td>
                        <td>{{id}}</td>
                        <td class=\'hidden-480\'>{{area}}</td>
                        <td >{{title}}</td>
                        <td class=\'hidden-480\'>{{reference}}</td>
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
                                        <li><a href="#" class="tooltip-info" data-rel="tooltip" title="查看"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>
                                        <li><a href="#" class="tooltip-success" data-rel="tooltip" title="编辑"><span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a></li>
                                        <li><a href="#" class="tooltip-error" data-rel="tooltip" title="删除"><span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span> </a></li>
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
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td class=\'hidden-480\'>';
                $value = $this->resolveValue($context->find('area'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td >';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td class=\'hidden-480\'>';
                $value = $this->resolveValue($context->find('reference'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
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
                $buffer .= $indent . '                                        <li><a href="#" class="tooltip-info" data-rel="tooltip" title="查看"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>
';
                $buffer .= $indent . '                                        <li><a href="#" class="tooltip-success" data-rel="tooltip" title="编辑"><span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a></li>
';
                $buffer .= $indent . '                                        <li><a href="#" class="tooltip-error" data-rel="tooltip" title="删除"><span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span> </a></li>
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
