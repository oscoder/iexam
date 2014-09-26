<?php

class __Mustache_d3860957ab853617446c1c9fe7da4f60 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html lang="en">
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
';
        $buffer .= $indent . '    <meta charset="utf-8" />
';
        $buffer .= $indent . '    <title>Login Page - Ace Admin</title>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <meta name="description" content="User login page" />
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <base href="';
        $value = $this->resolveValue($context->find('base'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" />
';
        // 'styles' section
        $value = $context->find('styles');
        $buffer .= $this->section00fdfcec4ee2959214e182065c4de54f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'scripts' section
        $value = $context->find('scripts');
        $buffer .= $this->section40ce25f94189164f3956ce87f3c57567($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!--[if lte IE 9]>
';
        $buffer .= $indent . '    <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('base'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/assets/css/ace-part2.min.css" />
';
        $buffer .= $indent . '    <![endif]-->
';
        $buffer .= $indent . '    <!--[if lte IE 9]>
';
        $buffer .= $indent . '    <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->find('base'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/assets/css/ace-ie.min.css" />
';
        $buffer .= $indent . '    <![endif]-->
';
        $buffer .= $indent . '    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!--[if lt IE 9]>
';
        $buffer .= $indent . '    <script src="';
        $value = $this->resolveValue($context->find('base'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/assets/js/html5shiv.js"></script>
';
        $buffer .= $indent . '    <script src="';
        $value = $this->resolveValue($context->find('base'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/assets/js/respond.min.js"></script>
';
        $buffer .= $indent . '    <![endif]-->
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body class="login-layout">
';
        $buffer .= $indent . '<div class="main-container">
';
        $buffer .= $indent . '    <div class="main-content">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-sm-10 col-sm-offset-1">
';
        $buffer .= $indent . '                <div class="login-container">
';
        $buffer .= $indent . '                    <div class="center">
';
        $buffer .= $indent . '                        <h1>
';
        $buffer .= $indent . '                            <i class="ace-icon fa fa-leaf green"></i>
';
        $buffer .= $indent . '                            <span class="red">iExam</span>
';
        $buffer .= $indent . '                            <span class="white" id="id-text2">Backend</span>
';
        $buffer .= $indent . '                        </h1>
';
        $buffer .= $indent . '                        <h4 class="blue" id="id-company-text">&copy; Linstrong Info-tech</h4>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="space-6"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="position-relative">
';
        $buffer .= $indent . '                        <div id="login-box" class="login-box visible widget-box no-border">
';
        $buffer .= $indent . '                            <div class="widget-body">
';
        $buffer .= $indent . '                                <div class="widget-main">
';
        $buffer .= $indent . '                                    <h4 class="header blue lighter bigger">
';
        $buffer .= $indent . '                                        <i class="ace-icon fa fa-coffee green"></i>
';
        $buffer .= $indent . '                                        Please Enter Your Information
';
        $buffer .= $indent . '                                    </h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    <div class="space-6"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    <form action=\'';
        $value = $this->resolveValue($context->findDot('links.login'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\' method="post" id="form">
';
        $buffer .= $indent . '                                        <fieldset>
';
        $buffer .= $indent . '                                            <label class="block clearfix">
';
        $buffer .= $indent . '														<span class="block input-icon input-icon-right">
';
        $buffer .= $indent . '															<input type="text" class="form-control" placeholder="Username" id="username" name="username"/>
';
        $buffer .= $indent . '															<i class="ace-icon fa fa-user"></i>
';
        $buffer .= $indent . '														</span>
';
        $buffer .= $indent . '                                            </label>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <label class="block clearfix">
';
        $buffer .= $indent . '														<span class="block input-icon input-icon-right">
';
        $buffer .= $indent . '															<input type="password" class="form-control" placeholder="Password" id="password" name="password"/>
';
        $buffer .= $indent . '															<i class="ace-icon fa fa-lock"></i>
';
        $buffer .= $indent . '														</span>
';
        $buffer .= $indent . '                                            </label>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <div class="space"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <div class="clearfix">
';
        $buffer .= $indent . '                                                <label class="inline">
';
        $buffer .= $indent . '                                                    <input type="checkbox" class="ace" />
';
        $buffer .= $indent . '                                                    <span class="lbl"> Remember Me</span>
';
        $buffer .= $indent . '                                                </label>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                <button class="width-35 pull-right btn btn-sm btn-primary " id="submit" type="submit">
';
        $buffer .= $indent . '                                                    <i class="ace-icon fa fa-key"></i>
';
        $buffer .= $indent . '                                                    <span class="bigger-110">Login</span>
';
        $buffer .= $indent . '                                                </button>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <div class="space-4"></div>
';
        $buffer .= $indent . '                                            ';
        // 'message' section
        $value = $context->find('message');
        $buffer .= $this->section16fd734f3e10baa122d888d426a07fc8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                        </fieldset>
';
        $buffer .= $indent . '                                    </form>
';
        $buffer .= $indent . '                                </div><!-- /.widget-main -->
';
        $buffer .= $indent . '                            </div><!-- /.widget-body -->
';
        $buffer .= $indent . '                        </div><!-- /.login-box -->
';
        $buffer .= $indent . '                    </div><!-- /.position-relative -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="navbar-fixed-top align-right">
';
        $buffer .= $indent . '                        <br />
';
        $buffer .= $indent . '                        &nbsp;
';
        $buffer .= $indent . '                        <a id="btn-login-dark" href="#">Dark</a>
';
        $buffer .= $indent . '                        &nbsp;
';
        $buffer .= $indent . '                        <span class="blue">/</span>
';
        $buffer .= $indent . '                        &nbsp;
';
        $buffer .= $indent . '                        <a id="btn-login-blur" href="#">Blur</a>
';
        $buffer .= $indent . '                        &nbsp;
';
        $buffer .= $indent . '                        <span class="blue">/</span>
';
        $buffer .= $indent . '                        &nbsp;
';
        $buffer .= $indent . '                        <a id="btn-login-light" href="#">Light</a>
';
        $buffer .= $indent . '                        &nbsp; &nbsp; &nbsp;
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div><!-- /.col -->
';
        $buffer .= $indent . '        </div><!-- /.row -->
';
        $buffer .= $indent . '    </div><!-- /.main-content -->
';
        $buffer .= $indent . '</div><!-- /.main-container -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- basic scripts -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!--[if !IE]> -->
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '    window.jQuery || document.write("<script src=\'assets/js/jquery.min.js\'>"+"<"+"/script>");
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- <![endif]-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!--[if IE]>
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '    window.jQuery || document.write("<script src=\'assets/js/jquery1x.min.js\'>"+"<"+"/script>");
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '<![endif]-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '    if(\'ontouchstart\' in document.documentElement) document.write("<script src=\'assets/js/jquery.mobile.custom.min.js\'>"+"<"+"/script>");
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function section00fdfcec4ee2959214e182065c4de54f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <link href="{{base}}/{{.}}" rel="stylesheet" type="text/css">
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
                
                $buffer .= $indent . '        <link href="';
                $value = $this->resolveValue($context->find('base'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" rel="stylesheet" type="text/css">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40ce25f94189164f3956ce87f3c57567(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <script type="text/javascript" src="{{base}}/{{.}}"></script>
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
                
                $buffer .= $indent . '        <script type="text/javascript" src="';
                $value = $this->resolveValue($context->find('base'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16fd734f3e10baa122d888d426a07fc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<div id="tip">{{message}}</div>';
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
                
                $buffer .= '<div id="tip">';
                $value = $this->resolveValue($context->find('message'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
