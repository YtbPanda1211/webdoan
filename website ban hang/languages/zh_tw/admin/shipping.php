<?php


$_LANG['shipping_name'] = 'Tên phương pháp phân phối';
$_LANG['shipping_version'] = 'Phiên bản';
$_LANG['shipping_desc'] = 'Mô tả';
$_LANG['shipping_author'] = 'Tác giả';
$_LANG['insure'] = 'Giá chi phí';
$_LANG['support_cod'] = 'Tiền mặt phân phối';
$_LANG['shipping_area'] = 'Thiết lập khu vực';
$_LANG['shipping_print_edit'] = 'Chỉnh sửa bản in mẫu';
$_LANG['shipping_print_template'] = 'Express mẫu đơn';
$_LANG['shipping_template_info'] = 'Mẫu đơn đặt hàng mà các biến:<br/>{$shop_name}Tên cửa hàng<br/>{$province}Địa điểm cửa hàng<br/>{$city}Thành phố<br/>{$shop_address}Địa chỉ<br/>{$service_phone}Số điện thoại<br/>{$order.order_amount}Số lượng đơn đặt hàng<br/>{$order.region}Vùng người nhận<br/>{$order.tel}ĐTg ng nhận<br/>{$order.mobile}Di động ng nhận<br/>{$order.zipcode}Mã vùng(ZIP CODE)<br/>{$order.address}Địa chỉ ng nhận<br/>{$order.consignee}Tên của người nhận<br/>{$order.order_sn}Số thứ tự';

/*  Hình thức một phần của */
$_LANG['shipping_install'] = 'Cài đặt phân phối';
$_LANG['install_succeess'] = 'Cài đặt phương pháp phân phối %s Thành công！';
$_LANG['del_lable'] = 'Delete Label';
$_LANG['upload_shipping_bg'] = 'Upload to print a single image';
$_LANG['del_shipping_bg'] = 'Remove print a single picture';
$_LANG['save_setting'] = 'Save Settings';
$_LANG['recovery_default'] = 'Restore Default';

/* Express single-part */
$_LANG['lable_select_notice'] = '--Select Insert tab--';
$_LANG['lable_box']['shop_country'] = 'Shop - National';
$_LANG['lable_box']['shop_province'] = 'Shop - Provinces';
$_LANG['lable_box']['shop_city'] = 'Shop - City';
$_LANG['lable_box']['shop_name'] = 'Shop - Name';
$_LANG['lable_box']['shop_district'] = 'Shop - District / County';
$_LANG['lable_box']['shop_tel'] = 'Shop - Telephone';
$_LANG['lable_box']['shop_address'] = 'Shop - Address';
$_LANG['lable_box']['customer_country'] = 'Recipient - National';
$_LANG['lable_box']['customer_province'] = 'Recipient - Provinces';
$_LANG['lable_box']['customer_city'] = 'Recipient - City';
$_LANG['lable_box']['customer_district'] = 'recipient - District / County';
$_LANG['lable_box']['customer_tel'] = 'Recipient - Telephone';
$_LANG['lable_box']['customer_mobel'] = 'Recipient - Mobile';
$_LANG['lable_box']['customer_post'] = 'Recipient - Zip Code';
$_LANG['lable_box']['customer_address'] = 'Recipient - full address';
$_LANG['lable_box']['customer_name'] = 'Recipient - Name';
$_LANG['lable_box']['year'] = 'Years - Date of the day';
$_LANG['lable_box']['months'] = 'Month - Day of the date';
$_LANG['lable_box']['day'] = 'Day - Date of the day';
$_LANG['lable_box']['order_no'] = 'Order number - Order';
$_LANG['lable_box']['order_postscript'] = 'Remarks - Order';
$_LANG['lable_box']['order_best_time'] = 'Delivery time - Orders';
$_LANG['lable_box']['pigeon'] = '√-Pigeon';
//$_LANG['lable_box']['custom_content'] = 'Custom content';

/* Thông báo */
$_LANG['no_shipping_name'] = 'Xin lỗi, tên của các phương pháp phân phối không thể để trống.';
$_LANG['no_shipping_desc'] = 'Phần mô tả không có nội dung.';
$_LANG['repeat_shipping_name'] = 'Xin lỗi, đã có một cách phân phối của cùng một tên.';
$_LANG['uninstall_success'] = 'Phương pháp phân phối %s Đã gỡ thành công.';
$_LANG['add_shipping_area'] = 'Thêm khu vực phân phối mới';
$_LANG['no_shipping_insure'] = 'Chi phí không để trống,nếu bạn muốn thiết lập thì hãy để (0) chi dạng không có chi phí.';
$_LANG['not_support_insure'] = 'Các hình thức phân phối không hỗ trợ giá,các thiết lập  chi phí không thành công';
$_LANG['invalid_insure'] = 'Chi phí không hợp lệ.';
$_LANG['no_shipping_install'] = 'Chi phí chưa được cài đặt,tạm thời bạn sử dụng bản mẫu.';
$_LANG['edit_template_success'] = 'Đã sửa mẫu thành công.';

/* phần ngôn ngữ */
$_LANG['js_languages']['lang_removeconfirm'] = 'Bạn có chắc là bạn muốn bỏ cài đặt cách phân phối này?';
$_LANG['js_languages']['shipping_area'] = 'Thiết lập khu vực';
$_LANG['js_languages']['upload_falid'] = 'Error: file type is not correct. Please upload "%s" type of file!';
$_LANG['js_languages']['upload_del_falid'] = 'Error: Delete failed!';
$_LANG['js_languages']['upload_del_confirm'] = "Tip: Do you confirm the deletion to print a single image?";
$_LANG['js_languages']['no_select_upload'] = "Error: You do not choose to print a single image. Please use the 'Browse ...' button to select!";
$_LANG['js_languages']['no_select_lable'] = "Operation terminated! You did not choose any label.";
$_LANG['js_languages']['no_add_repeat_lable'] = "Operation failed! Not allowed to add a duplicate label.";
$_LANG['js_languages']['no_select_lable_del'] = "Delete Failed! You do not select any label.";
$_LANG['js_languages']['recovery_default_suer'] = "To restore the default do you confirm? Restore Default will display the contents of the installation.";
?>