<?php
function anti_injeksi($data){
$filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
return $filter;
}