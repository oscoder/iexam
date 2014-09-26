<?php

class __Mustache_cc125d0c1e9f6cc2ae5d8b7774f6ea2b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="space-6"></div>
';
        $buffer .= $indent . '
';
        // 'page.invoice' section
        $value = $context->findDot('page.invoice');
        $buffer .= $this->sectionEfc187dbb978e015d719cae75ec69f9a($context, $indent, $value);

        return $buffer;
    }

    private function section33cb1bfd5df124fec0979f797a620b24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<li><i class="ace-icon fa fa-caret-right green"></i>{{.}}</li>
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
                
                $buffer .= $indent . '							<li><i class="ace-icon fa fa-caret-right green"></i>';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8351c67bf4c935affd5862364a3ff8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<ul class="list-unstyled  spaced">
							{{#address}}
							<li><i class="ace-icon fa fa-caret-right green"></i>{{.}}</li>
							{{/address}}
							<li class="divider"></li>
							<li><i class="ace-icon fa fa-caret-right green"></i>
								{{contact}}
							</li>
						</ul>
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
                
                $buffer .= $indent . '						<ul class="list-unstyled  spaced">
';
                // 'address' section
                $value = $context->find('address');
                $buffer .= $this->section33cb1bfd5df124fec0979f797a620b24($context, $indent, $value);
                $buffer .= $indent . '							<li class="divider"></li>
';
                $buffer .= $indent . '							<li><i class="ace-icon fa fa-caret-right green"></i>
';
                $buffer .= $indent . '								';
                $value = $this->resolveValue($context->find('contact'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '							</li>
';
                $buffer .= $indent . '						</ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfe77a6e617fa0ed95652e92d4e81a26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{discount}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('discount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1098154c977c5e3ed0b580fc682d4fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<tr>
							<td class="center">{{id}}</td>
							<td>{{{name}}}</td>
							<td class="hidden-xs">
								{{description}}
							</td>
							<td class="hidden-480">
							{{#discount}} {{discount}} {{/discount}}
							{{^discount}} --- {{/discount}}
							</td>
							<td>{{total}}</td>
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
                
                $buffer .= $indent . '						<tr>
';
                $buffer .= $indent . '							<td class="center">';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '							<td>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '							<td class="hidden-xs">
';
                $buffer .= $indent . '								';
                $value = $this->resolveValue($context->find('description'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '							</td>
';
                $buffer .= $indent . '							<td class="hidden-480">
';
                $buffer .= $indent . '							';
                // 'discount' section
                $value = $context->find('discount');
                $buffer .= $this->sectionFfe77a6e617fa0ed95652e92d4e81a26($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '							';
                // 'discount' inverted section
                $value = $context->find('discount');
                if (empty($value)) {
                    
                    $buffer .= ' --- ';
                }
                $buffer .= '
';
                $buffer .= $indent . '							</td>
';
                $buffer .= $indent . '							<td>';
                $value = $this->resolveValue($context->find('total'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '						</tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfc187dbb978e015d719cae75ec69f9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
	 <!-- #section:pages/invoice -->
	 <div class="widget-box transparent">
	  <div class="widget-header widget-header-large">
		<h3 class="widget-title grey lighter">
			<i class="ace-icon fa fa-leaf green"></i>
			{{title}}
		</h3>
		
		<!-- #section:pages/invoice.info -->
		<div class="widget-toolbar no-border invoice-info">
			<span class="invoice-info-label">Invoice:</span> <span class="red">#{{number}}</span>
			<br />
			<span class="invoice-info-label">Date:</span> <span class="blue">{{date}}</span>
		</div>
		
		<div class="widget-toolbar hidden-480">
			<a href="#"><i class="ace-icon fa fa-print"></i></a>
		</div>
		<!-- /section:pages/invoice.info -->
	  </div>


	  <div class="widget-body"><div class="widget-main padding-24">
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right"><b>Company Info</b></div>
					</div>
					<div class="row">
						<ul class="list-unstyled spaced">
							<li><i class="ace-icon fa fa-caret-right blue"></i>Street, City</li>
							<li><i class="ace-icon fa fa-caret-right blue"></i>Zip Code</li>
							<li><i class="ace-icon fa fa-caret-right blue"></i>State, Country</li>
							<li><i class="ace-icon fa fa-caret-right blue"></i>Phone: <b class="red">111-111-111</b></li>
							<li class="divider"></li>
							<li><i class="ace-icon fa fa-caret-right blue"></i>
								Paymant Info
							</li>
						</ul>
					</div>
				</div><!-- /.col -->
				
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right"><b>Customer Info</b></div>
					</div>
					<div>
						{{#customer}}
						<ul class="list-unstyled  spaced">
							{{#address}}
							<li><i class="ace-icon fa fa-caret-right green"></i>{{.}}</li>
							{{/address}}
							<li class="divider"></li>
							<li><i class="ace-icon fa fa-caret-right green"></i>
								{{contact}}
							</li>
						</ul>
						{{/customer}}
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
				
			<div class="space"></div>
			
			<div>

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="center">#</th>
							<th>Product</th>
							<th class="hidden-xs">Description</th>
							<th class="hidden-480">Discount</th>
							<th>Total</th>
						</tr>
					</thead>
					
					<tbody>
					{{#products}}
						<tr>
							<td class="center">{{id}}</td>
							<td>{{{name}}}</td>
							<td class="hidden-xs">
								{{description}}
							</td>
							<td class="hidden-480">
							{{#discount}} {{discount}} {{/discount}}
							{{^discount}} --- {{/discount}}
							</td>
							<td>{{total}}</td>
						</tr>
					{{/products}}
					</tbody>
				</table>
				
			</div>
				
			<div class="hr hr8 hr-double hr-dotted"></div>
			
			<div class="row">
				<div class="col-sm-5 pull-right">
					<h4 class="pull-right">
					Total amount : <span class="red">{{total}}</span>
					</h4>
				</div>
				
				<div class="col-sm-7 pull-left">
					Extra Information
				</div>
			</div>
			
			<div class="space-6"></div>
			
			<div class="well">
				Thank you for choosing Ace Company products.
				We believe you will be satisfied by our services.
			</div>
			

		</div></div>
	 </div>
	 <!-- /section:pages/invoice -->
	</div>
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
                
                $buffer .= $indent . '<div class="row">
';
                $buffer .= $indent . '	<div class="col-sm-10 col-sm-offset-1">
';
                $buffer .= $indent . '	 <!-- #section:pages/invoice -->
';
                $buffer .= $indent . '	 <div class="widget-box transparent">
';
                $buffer .= $indent . '	  <div class="widget-header widget-header-large">
';
                $buffer .= $indent . '		<h3 class="widget-title grey lighter">
';
                $buffer .= $indent . '			<i class="ace-icon fa fa-leaf green"></i>
';
                $buffer .= $indent . '			';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '		</h3>
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		<!-- #section:pages/invoice.info -->
';
                $buffer .= $indent . '		<div class="widget-toolbar no-border invoice-info">
';
                $buffer .= $indent . '			<span class="invoice-info-label">Invoice:</span> <span class="red">#';
                $value = $this->resolveValue($context->find('number'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '			<br />
';
                $buffer .= $indent . '			<span class="invoice-info-label">Date:</span> <span class="blue">';
                $value = $this->resolveValue($context->find('date'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		<div class="widget-toolbar hidden-480">
';
                $buffer .= $indent . '			<a href="#"><i class="ace-icon fa fa-print"></i></a>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<!-- /section:pages/invoice.info -->
';
                $buffer .= $indent . '	  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	  <div class="widget-body"><div class="widget-main padding-24">
';
                $buffer .= $indent . '			<div class="row">
';
                $buffer .= $indent . '				<div class="col-sm-6">
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right"><b>Company Info</b></div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<ul class="list-unstyled spaced">
';
                $buffer .= $indent . '							<li><i class="ace-icon fa fa-caret-right blue"></i>Street, City</li>
';
                $buffer .= $indent . '							<li><i class="ace-icon fa fa-caret-right blue"></i>Zip Code</li>
';
                $buffer .= $indent . '							<li><i class="ace-icon fa fa-caret-right blue"></i>State, Country</li>
';
                $buffer .= $indent . '							<li><i class="ace-icon fa fa-caret-right blue"></i>Phone: <b class="red">111-111-111</b></li>
';
                $buffer .= $indent . '							<li class="divider"></li>
';
                $buffer .= $indent . '							<li><i class="ace-icon fa fa-caret-right blue"></i>
';
                $buffer .= $indent . '								Paymant Info
';
                $buffer .= $indent . '							</li>
';
                $buffer .= $indent . '						</ul>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</div><!-- /.col -->
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '				<div class="col-sm-6">
';
                $buffer .= $indent . '					<div class="row">
';
                $buffer .= $indent . '						<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right"><b>Customer Info</b></div>
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '					<div>
';
                // 'customer' section
                $value = $context->find('customer');
                $buffer .= $this->sectionE8351c67bf4c935affd5862364a3ff8a($context, $indent, $value);
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</div><!-- /.col -->
';
                $buffer .= $indent . '			</div><!-- /.row -->
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '			<div class="space"></div>
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '			<div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '				<table class="table table-striped table-bordered">
';
                $buffer .= $indent . '					<thead>
';
                $buffer .= $indent . '						<tr>
';
                $buffer .= $indent . '							<th class="center">#</th>
';
                $buffer .= $indent . '							<th>Product</th>
';
                $buffer .= $indent . '							<th class="hidden-xs">Description</th>
';
                $buffer .= $indent . '							<th class="hidden-480">Discount</th>
';
                $buffer .= $indent . '							<th>Total</th>
';
                $buffer .= $indent . '						</tr>
';
                $buffer .= $indent . '					</thead>
';
                $buffer .= $indent . '					
';
                $buffer .= $indent . '					<tbody>
';
                // 'products' section
                $value = $context->find('products');
                $buffer .= $this->sectionB1098154c977c5e3ed0b580fc682d4fb($context, $indent, $value);
                $buffer .= $indent . '					</tbody>
';
                $buffer .= $indent . '				</table>
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '			<div class="hr hr8 hr-double hr-dotted"></div>
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '			<div class="row">
';
                $buffer .= $indent . '				<div class="col-sm-5 pull-right">
';
                $buffer .= $indent . '					<h4 class="pull-right">
';
                $buffer .= $indent . '					Total amount : <span class="red">';
                $value = $this->resolveValue($context->find('total'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '					</h4>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '				<div class="col-sm-7 pull-left">
';
                $buffer .= $indent . '					Extra Information
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '			<div class="space-6"></div>
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '			<div class="well">
';
                $buffer .= $indent . '				Thank you for choosing Ace Company products.
';
                $buffer .= $indent . '				We believe you will be satisfied by our services.
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '		</div></div>
';
                $buffer .= $indent . '	 </div>
';
                $buffer .= $indent . '	 <!-- /section:pages/invoice -->
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
