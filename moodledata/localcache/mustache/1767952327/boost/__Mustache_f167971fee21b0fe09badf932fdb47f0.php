<?php

class __Mustache_f167971fee21b0fe09badf932fdb47f0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '    @media only screen and (max-width: 600px) {
';
        $buffer .= $indent . ' .category-browse .coursebox {
';
        $buffer .= $indent . '    width: 93%;
';
        $buffer .= $indent . ' }
';
        $buffer .= $indent . ' .footer-content-popover{
';
        $buffer .= $indent . '     display: none;
';
        $buffer .= $indent . ' }
';
        $buffer .= $indent . '     .SearchSection input {
';
        $buffer .= $indent . '        min-width: 55% !important;
';
        $buffer .= $indent . '        max-width: 55% !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .SearchSection button {
';
        $buffer .= $indent . '        width: 40%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>';

        return $buffer;
    }
}
