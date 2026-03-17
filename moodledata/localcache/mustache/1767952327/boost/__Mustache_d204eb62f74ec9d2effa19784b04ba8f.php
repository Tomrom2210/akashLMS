<?php

class __Mustache_d204eb62f74ec9d2effa19784b04ba8f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '<img src="https://media.istockphoto.com/id/1495430612/vector/coming-soon-with-colorful-cut-out-foil-ribbon-confetti-background.jpg?s=612x612&w=0&k=20&c=0HjZUHqlNnUedZmJCbMpooiY92f4tgGCh_jZK51zSmU=" style="margin-left: 50%; transform: translateX(-50%);">
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '<div style="display: none;">
';
        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '   ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
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

        return $buffer;
    }
}
