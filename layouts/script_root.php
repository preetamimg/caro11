<?php
$get_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$arr = explode("?", $get_url, 2);
$actual_link = $arr[0];
if ($_SERVER["HTTP_HOST"] == "localhost") {
   define('f_path', 'http://localhost/caro11/');
} else if ($_SERVER['HTTP_HOST'] == '192.168.1.50') {
   define('f_path', 'http://192.168.1.50/jitendra/caro11/');
} else {
   define('f_path', 'http://143.110.244.110/jitendra/caro11/');
}
