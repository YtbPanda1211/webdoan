<?php


if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/baokim.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'baokim_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '0';

    /* 作者 */
    $modules[$i]['author']  = 'Bảo Kim';

    /* 网址 */
    $modules[$i]['website'] = 'https://www.baokim.vn';

    /* 版本号 */
    $modules[$i]['version'] = '';

    /* 配置信息 */
    $modules[$i]['config']  = array();

    return;
}

/**
 * 类
 */
class baokim
{
	//private $baokim_url = 'http://sandbox.baokim.vn/payment/customize_payment/order';
	private $baokim_url = 'https://www.baokim.vn/payment/customize_payment/order';
	
	
/*KHÁCH HÀNG SẼ THAY ĐỔI CÁC THÔNG TIN SAU************************************/
	private $merchant_id = '2205';	// Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site
	
	private $secure_pass = '9daacbd535f7e6d5'; // Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site
	
	private $business = 'tuyentvbg@gmail.com';
/*****************************************************************************/
	
	
    function baokim()
    {
    }

    function __construct()
    {
        $this->baokim();
    }

		public function createRequestUrl($order_id, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail)
		{
			// Mảng các tham số chuyển tới baokim.vn
			$params = array(
				'merchant_id'		=>	strval($this->merchant_id),
				'order_id'			=>	strval($order_id),
				'business'			=>	strval($this->business),
				'total_amount'		=>	strval($total_amount),
				'shipping_fee'		=>  strval($shipping_fee),
				'tax_fee'			=>  strval($tax_fee),
				'order_description'	=>	strval($order_description),
				'url_success'		=>	strtolower($url_success),
				'url_cancel'		=>	strtolower($url_cancel),
				'url_detail'		=>	strtolower($url_detail)
			);
			ksort($params);
			
			$str_combined = $this->secure_pass.implode('', $params);
			$params['checksum'] = strtoupper(md5($str_combined));
			
			//Kiểm tra  biến $redirect_url xem có '?' không, nếu không có thì bổ sung vào
			$redirect_url = $this->baokim_url;
			if (strpos($redirect_url, '?') === false)
			{
				$redirect_url .= '?';
			}
			else if (substr($redirect_url, strlen($redirect_url)-1, 1) != '?' && strpos($redirect_url, '&') === false)
			{
				// Nếu biến $redirect_url có '?' nhưng không kết thúc bằng '?' và có chứa dấu '&' thì bổ sung vào cuối
				$redirect_url .= '&';			
			}
					
			// Tạo đoạn url chứa tham số
			$url_params = '';
			foreach ($params as $key=>$value)
			{
				if ($url_params == '')
					$url_params .= $key . '=' . urlencode($value);
				else
					$url_params .= '&' . $key . '=' . urlencode($value);
			}
			return $redirect_url.$url_params;
		}
		
		/**
		 * Hàm thực hiện xác minh tính chính xác thông tin trả về từ BaoKim.vn
		 * @param $_GET chứa tham số trả về trên url
		 * @return true nếu thông tin là chính xác, false nếu thông tin không chính xác
		 */
		public function verifyResponseUrl($_GET = array())
		{
			$checksum = $_GET['checksum'];
			unset($_GET['checksum']);
			
			ksort($_GET);
			$str_combined = $this->secure_pass.implode('', $_GET);
		
			  // Mã hóa các tham số
			$verify_checksum = strtoupper(md5($str_combined));
			
			// Xác thực mã của chủ web với mã trả về từ baokim.vn
			if ($verify_checksum === $checksum) 
				return true;
			
			return false;
		}
    /**
     * 生成支付代码
     * @param   array   $order  订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {
        $data_order_id      = 'Mã đơn hàng bạn: - '. $order['log_id'];
        $data_amount        = intval($order['order_amount']);
		  $shipping_fee		 = '';
		  $tax_fee				 = '';
		  $order_description	 = '';
        $url_success    = return_url(basename(__FILE__, '.php'));
        $url_detail    	= $GLOBALS['ecs']->url();
        $url_cancel     = $GLOBALS['ecs']->url();
		  
		  $url_baokim = self::createRequestUrl($data_order_id, $data_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail);
		  
		  $btn_baokim = 'Click để thanh toán ngay với Bảo Kim<a href="'.$url_baokim.'"><img src = "https://www.baokim.vn/application/uploads/buttons/btn_safety_payment_3.png" /></a>';

        return $btn_baokim;
    }

    function respond()
    {
        return true;
    }
}

?>