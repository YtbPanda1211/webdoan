<?php

/* Danh mục chính */
$_LANG['register_sms'] = 'Đăng ký mở tài khoản';

/*Đăng ký và mở các chức năng tin nhắn SMS  */
$_LANG['email'] = 'E-mail';
$_LANG['password'] = 'Mật khẩu';
$_LANG['domain'] = 'Tên miền';
$_LANG['error_tips'] = 'Set in the shop - "SMS settings, first register and properly configure the SMS messaging service!';
$_LANG['register_new'] = 'Đăng ký một tài khoản mới';
$_LANG['enable_old'] = 'Tài khoản đã được mở';

/* Tin nhắn SMS đặc biệt dịch vụ thông tin */
$_LANG['sms_user_name'] = 'Tên:';
$_LANG['sms_password'] = 'Mật khẩu:';
$_LANG['sms_domain'] = 'Tên miền:';
$_LANG['sms_num'] = 'Văn bản:';
$_LANG['sms_count'] = 'Gửi tin nhắn SMS Số:';
$_LANG['sms_total_money'] = 'Tổng số tiền:';
$_LANG['sms_balance'] = 'Số dư:';
$_LANG['sms_last_request'] = 'Yêu cầu thời gian qua:';
$_LANG['disable'] = 'write-off của dịch vụ tin nhắn ngắn';

/* Gửi tin nhắn */
$_LANG['phone'] = 'Số điện thoại';
$_LANG['phone_notice'] = 'Nhiều số điện thoại tách biệt nhau bởi một dấu phẩy';
$_LANG['msg'] = 'Bài viết';
$_LANG['msg_notice'] = 'Tối đa 250 ký tự';
$_LANG['send_date'] = 'Ngày gửi';
$_LANG['send_date_notice'] = 'Định dạng YYYY-MM-DD HH: II. Gửi trống.';
$_LANG['back_send_history'] = 'Lịch sử danh sách';
$_LANG['back_charge_history'] = 'Danh sách hàng đầu';

/* Ghi lại giao diện truy vấn */
$_LANG['start_date'] = 'Ngày bắt đầu';
$_LANG['date_notice'] = 'Định dạng YYYY-MM-DD. Có thể được để trống.';
$_LANG['end_date'] = 'Ngày kết thúc';
$_LANG['page_size'] = 'Số trang hiển thị';
$_LANG['page_size_notice'] = 'Không có sản phẩm nào, có 20 hồ sơ trên mỗi trang';
$_LANG['page'] = 'Trang';
$_LANG['page_notice'] = 'Có thể được để trống';
$_LANG['charge'] = 'Phí';

/* Hành động để xác nhận thông tin */
$_LANG['history_query_error'] = 'Xin lỗi, lỗi trong quá trình truy vấn.';
$_LANG['enable_ok'] = 'Xin chúc mừng, bạn đã thành công cho tin nhắn SMS!';
$_LANG['enable_error'] = 'Xin lỗi, bạn kích hoạt các dịch vụ tin nhắn SMS không thành công!';
$_LANG['disable_ok'] = 'Bạn đã hủy tin nhắn SMS.';
$_LANG['disable_error'] = 'Lỗi tắt tin nhắn.';
$_LANG['register_ok'] = 'Xin chúc mừng bạn,đã đăng kí thành công SMS!';
$_LANG['register_error'] = 'Lỗi đăng kí.';
$_LANG['send_ok'] = 'Xin chúc mừng, thông điệp của bạn đã được gửi thành công!';
$_LANG['send_error'] = 'Xin lỗi,lỗi quá trình gửi một thông báo.';
$_LANG['error_no'] = 'Lỗi ID';
$_LANG['error_msg'] = 'Lỗi mô tả';
$_LANG['empty_info'] = 'Thông tin trống.';

/* Đầu ghi */
$_LANG['order_id'] = 'ID đặt hàng';
$_LANG['money'] = 'Số tiền';
$_LANG['log_date'] = 'Ngày đầu lên';

/* Gửi hồ sơ */
$_LANG['sent_phones'] = 'Gửi số điện thoại';
$_LANG['content'] = 'Gửi nội dung';
$_LANG['charge_num'] = 'Số Hóa đơn';
$_LANG['sent_date'] = 'Ngày gửi';
$_LANG['send_status'] = 'Tình trạng';
$_LANG['status'][0] = 'Không thành công';
$_LANG['status'][1] = 'Thành công';
$_LANG['user_list'] = 'Tất cả người dùng';
$_LANG['please_select'] = 'Please choose the membership grade';

/* Nhắc */
$_LANG['test_now'] = '<span style="color:red;"></span>';
$_LANG['msg_price'] = '<span style="color:green;"> Mỗi tin nhắn SMS 500VND(RMB)</span>';

/* API lại thông báo lỗi */
//--Đăng ký
$_LANG['api_errors']['register'][1] = 'Tên miền không thể để trống.';
$_LANG['api_errors']['register'][2] = 'Thư chưa đúng!';
$_LANG['api_errors']['register'][3] = 'Tên người dùng đã tồn tại.';
$_LANG['api_errors']['register'][4] = 'Không biết lỗi xảy ra.';
$_LANG['api_errors']['register'][5] = 'Giao diện lỗi.';
//--Nhận số dư
$_LANG['api_errors']['get_balance'][1] = 'MK người dùng không đúng';
$_LANG['api_errors']['get_balance'][2] = 'Người sử dụng bị vô hiệu hóa.';
//--Gửi tin nhắn SMS 
$_LANG['api_errors']['send'][1] = 'Sai mật khẩu.';
$_LANG['api_errors']['send'][2] = 'Nội dung văn bản quá dài.';
$_LANG['api_errors']['send'][3] = 'Ngày gửi phải lớn hơn thời điểm hiện tại';
$_LANG['api_errors']['send'][4] = 'Số lỗi.';
$_LANG['api_errors']['send'][5] = 'Số dư tài khoản sắp hết.';
$_LANG['api_errors']['send'][6] = 'Tài khoản đã bị vô hiệu hoá.';
$_LANG['api_errors']['send'][7] = 'Giao diện lỗi.';
//--Lịch sử 
$_LANG['api_errors']['get_history'][1] = 'MK người dùng không chính xác!';
$_LANG['api_errors']['get_history'][2] = 'Tìm hồ sơ';
//-- Xác người này 
$_LANG['api_errors']['auth'][1] = 'Mật khẩu lỗi.';
$_LANG['api_errors']['auth'][2] = 'Người sử dụng không tồn tại.';

/* hặn người này phục vụ phát hiện một thông báo lỗi */
$_LANG['server_errors'][1] = 'Thông tin đăng ký không hợp lệ.';//ERROR_INVALID_REGISTER_INFO
$_LANG['server_errors'][2] = 'Lỗi mở thông tin';//ERROR_INVALID_ENABLE_INFO
$_LANG['server_errors'][3] = 'Gửi các thông tin không đúng.';//ERROR_INVALID_SEND_INFO
$_LANG['server_errors'][4] = 'Yêu cầu tìm kiếm điền vào thông tin không chính xác.';//ERROR_INVALID_HISTORY_QUERY
$_LANG['server_errors'][5] = 'Không hợp lệ';//ERROR_INVALID_PASSPORT
$_LANG['server_errors'][6] = 'URL sai.';//ERROR_INVALID_URL
$_LANG['server_errors'][7] = 'HTTP trống';//ERROR_EMPTY_RESPONSE
$_LANG['server_errors'][8] = 'XML không hợp lệ';//ERROR_INVALID_XML_FILE
$_LANG['server_errors'][9] = 'Tên không hợp lệ.';//ERROR_INVALID_NODE_NAME
$_LANG['server_errors'][10] = 'Không lưu trữ được';//ERROR_CANT_STORE

/* phần ngôn ngữ của khách hàng */
//--Đối với đăng ký hoặc mở cửa 
$_LANG['js_languages']['password_empty_error'] = 'Mật khẩu không thể để trống.';
$_LANG['js_languages']['username_empty_error'] = 'Tên người dùng không thể để trống.';
$_LANG['js_languages']['username_format_error'] = 'Tên người sử dụng sai định dạng.';
$_LANG['js_languages']['domain_empty_error'] = 'Tên miền không thể để trống.';
$_LANG['js_languages']['domain_format_error'] = 'Tên sai định dạng.';
$_LANG['js_languages']['send_empty_error'] = 'Send phone number and send at least fill out a rating！';

//--Gửi 
$_LANG['js_languages']['phone_empty_error'] = 'Xin vui lòng điền vào các số điện thoại di động.';
$_LANG['js_languages']['phone_format_error'] = 'Số điện thoại di động sai định dạng.';
$_LANG['js_languages']['msg_empty_error'] = 'Xin vui lòng điền vào nội dung của các bài viết.';
$_LANG['js_languages']['send_date_format_error'] = 'Sai định dạng thời gian gửi.';
//--历史记录
$_LANG['js_languages']['start_date_format_error'] = 'Ngày bắt đầu sai định dạng.';
$_LANG['js_languages']['end_date_format_error'] = 'Ngày kết thúc sai định dạng.';
//--充值
$_LANG['js_languages']['money_empty_error'] = 'Xin vui lòng nhập số tiền mà bạn muốn nạp tiền.';
$_LANG['js_languages']['money_format_error'] = 'Số tiền sai định dạng.';

?>