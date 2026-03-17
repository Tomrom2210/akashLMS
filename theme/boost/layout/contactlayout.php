<?php

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID),"escape"=> false]),
    'output'=> $OUTPUT,
    'bodyattributes'=> $bodyattributes,
    
];

echo $OUTPUT->render_from_template('theme_boost/contact',$templatecontext);
$bodyattributes = $OUTPUT->{"body_attributes"}([]);
echo $OUTPUT->main_content();