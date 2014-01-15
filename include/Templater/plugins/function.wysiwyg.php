<?php
function smarty_function_wysiwyg($params, $smarty)
{
$name = '';
$value = '';
if (isset($params['name']))
$name = $params['name'];
if (isset($params['value']))
$value = $params['value'];









$ckeditor = new ckeditor('wysiwyg');

// Do not print the code directly to the browser, return it instead
$ckeditor->returnOutput = true;

$ckeditor->basePath = '/js/ckeditor/';
$code = $ckeditor->editor('textarea', $value);
return $code;
}
?>