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

if (!class_exists("PaymentMethod")) {
/**
 * PaymentMethod
 */
class PaymentMethod {
	/**
	 * @access public
	 * @var string
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $logo_url;
	/**
	 * @access public
	 * @var string
	 */
	public $fix_fee;
	/**
	 * @access public
	 * @var string
	 */
	public $percent_fee;
	/**
	 * @access public
	 * @var string
	 */
	public $fee_currency_code;
	/**
	 * @access public
	 * @var string
	 */
	public $complete_time;
	/**
	 * @access public
	 * @var string
	 */
	public $payment_method_type;
	/**
	 * @access public
	 * @var string
	 */
	public $extra_fields;
}}

if (!class_exists("AccountInfo")) {
/**
 * AccountInfo
 */
class AccountInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $address;
	/**
	 * @access public
	 * @var string
	 */
	public $phone_no;
	/**
	 * @access public
	 * @var string
	 */
	public $allowed_payment_modes;
	/**
	 * @access public
	 * @var PaymentMethod[]
	 */
	public $payment_methods;
}}

if (!class_exists("AccountInfoRequest")) {
/**
 * AccountInfoRequest
 */
class AccountInfoRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $merchant_id;
	/**
	 * @access public
	 * @var string
	 */
	public $api_username;
	/**
	 * @access public
	 * @var string
	 */
	public $api_password;
}}

if (!class_exists("AccountInfoResponse")) {
/**
 * AccountInfoResponse
 */
class AccountInfoResponse {
	/**
	 * @access public
	 * @var string
	 */
	public $error_code;
	/**
	 * @access public
	 * @var string
	 */
	public $error_message;
	/**
	 * @access public
	 * @var AccountInfo
	 */
	public $account_info;
}}

if (!class_exists("PaymentInfoRequest")) {
/**
 * PaymentInfoRequest
 */
class PaymentInfoRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $api_username;
	/**
	 * @access public
	 * @var string
	 */
	public $api_password;
	/**
	 * @access public
	 * @var string
	 */
	public $merchant_id;
	/**
	 * @access public
	 * @var string
	 */
	public $bk_seller_email;
	/**
	 * @access public
	 * @var string
	 */
	public $order_id;
	/**
	 * @access public
	 * @var string
	 */
	public $total_amount;
	/**
	 * @access public
	 * @var string
	 */
	public $tax_fee;
	/**
	 * @access public
	 * @var string
	 */
	public $shipping_fee;
	/**
	 * @access public
	 * @var string
	 */
	public $order_description;
	/**
	 * @access public
	 * @var string
	 */
	public $currency_code;
	/**
	 * @access public
	 * @var string
	 */
	public $bank_payment_method_id;
	/**
	 * @access public
	 * @var string
	 */
	public $payment_mode;
	/**
	 * @access public
	 * @var string
	 */
	public $escrow_timeout;
	/**
	 * @access public
	 * @var string
	 */
	public $payer_name;
	/**
	 * @access public
	 * @var string
	 */
	public $payer_email;
	/**
	 * @access public
	 * @var string
	 */
	public $payer_phone_no;
	/**
	 * @access public
	 * @var string
	 */
	public $shipping_address;
	/**
	 * @access public
	 * @var string
	 */
	public $payer_message;
	/**
	 * @access public
	 * @var string
	 */
	public $extra_fields_value;
	/**
	 * @access public
	 * @var string
	 */
	public $url_return;
}}

if (!class_exists("PaymentInfoResponse")) {
/**
 * PaymentInfoResponse
 */
class PaymentInfoResponse {
	/**
	 * @access public
	 * @var string
	 */
	public $error_code;
	/**
	 * @access public
	 * @var string
	 */
	public $error_message;
	/**
	 * @access public
	 * @var string
	 */
	public $url_redirect;
}}



if (!class_exists("BKPaymentProService2")) {
/**
 * BKPaymentProService2
 * @author WSDLInterpreter
 */
class BKPaymentProService2 extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"PaymentMethod" => "PaymentMethod",
		"AccountInfo" => "AccountInfo",
		"AccountInfoRequest" => "AccountInfoRequest",
		"AccountInfoResponse" => "AccountInfoResponse",
		"PaymentInfoRequest" => "PaymentInfoRequest",
		"PaymentInfoResponse" => "PaymentInfoResponse",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl="https://www.baokim.vn/services/payment_pro_2/init?wsdl", $options=array('encoding'=>'UTF-8')) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: GetAccountInfo
	 * Parameter options:
	 * (AccountInfoRequest) account_info_request
	 * @param mixed,... See function description for parameter options
	 * @return AccountInfoResponse
	 * @throws Exception invalid function signature message
	 */
	public function GetAccountInfo($mixed = null) {
		$validParameters = array(
			"(AccountInfoRequest)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("GetAccountInfo", $args);
	}


	/**
	 * Service Call: DoPaymentPro
	 * Parameter options:
	 * (PaymentInfoRequest) payment_info_request
	 * @param mixed,... See function description for parameter options
	 * @return PaymentInfoResponse
	 * @throws Exception invalid function signature message
	 */
	public function DoPaymentPro($mixed = null) {
		$validParameters = array(
			"(PaymentInfoRequest)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DoPaymentPro", $args);
	}


}}
?>
<?php

     $paymentinforequest = new PaymentInfoRequest();
     $paymentinforequest->api_username = "hamayvsbaokim";
     $paymentinforequest->api_password = "hamayvsbaokim";
     $paymentinforequest->merchant_id = '160';
     $paymentinforequest->bk_seller_email= $_POST["bk_seller_email"];
     $paymentinforequest->bank_payment_method_id= $_POST["bank_payment_method_id"];
     $paymentinforequest->currency_code="USD";
     $paymentinforequest->escrow_timeout=$_POST["escrow_timeout"];
     $paymentinforequest->order_id=$_POST["order_id"];
     $paymentinforequest->order_description="";
     $paymentinforequest->payer_email=$_POST["payer_email"];
     $paymentinforequest->payer_name = $_POST["payer_name"];
     $paymentinforequest->payer_phone_no = $_POST["payer_phone_no"];
     $paymentinforequest->payer_message = $_POST["payer_message"];
     $paymentinforequest->payment_mode=$_POST["payment_mode"];
     $paymentinforequest->shipping_address=$_POST["shipping_address"];
     $paymentinforequest->shipping_fee ="0";
     $paymentinforequest->total_amount = $_POST["total_amount"];
     $paymentinforequest->tax_fee="0";
     $paymentinforequest->url_return="http://localhost/BaoKimPro2Demo/result.php";
     $paymentinforequest->extra_fields_value = $_POST["extra_fields_value"];
     $BKpayment = new BKPaymentProService2("http://sandbox.baokim.vn/services/payment_pro_2/init?wsdl");
     $paymentreponse = new PaymentInfoResponse();
     $paymentreponse = $BKpayment->DoPaymentPro($paymentinforequest);
     if($paymentreponse->error_code == "0")
     {
         $url_redirect = $paymentreponse->url_redirect;
         header("location:".$url_redirect);
     }
     else
     {
         echo $paymentreponse->error_message;
     }
 ?>