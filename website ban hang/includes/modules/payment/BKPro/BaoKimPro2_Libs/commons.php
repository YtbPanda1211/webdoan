<?php
/**
 * MOCUA.COM - ECSHOP - PAYNEMT BAOKIM.VN
 * ============================================================================
 * ©MoCua™
 * ©MoCua™: http://www.mocua.com；
 * ----------------------------------------------------------------------------
 * Vui lòng đọc kĩ các hướng dẫn trước khi sử dụng
 * Nếu bạn có các vấn đề vướng mắc, vui lòng vào: http://www.mocua.com/shop-ecshop.html  để được giải đáp
 * ============================================================================
 * Hình thức thanh toán qua Bảo Kim
 **/

include_once '../data.php';

function get_current_url(){
	$pageURL = 'http';
	if (isset($_SERVER["HTTPS"])) {
		$pageURL .= "s";
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}	
}
