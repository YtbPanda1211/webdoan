<?php


/*------------------------------------------------------ */
//-- Thẻ thông tin 
/*------------------------------------------------------ */
$_LANG['virtual_card_list'] = 'Danh sách thẻ ảo';
$_LANG['lab_goods_name'] = 'Tên hàng';
$_LANG['replenish'] = 'Cung cấp thêm';
$_LANG['lab_card_id'] = 'ID';
$_LANG['lab_card_sn'] = 'Số thẻ';
$_LANG['lab_card_password'] = 'Mật khẩu thẻ';
$_LANG['lab_end_date'] = 'Ngày kết thúc';
$_LANG['lab_is_saled'] = 'Bán';
$_LANG['lab_order_sn'] = 'Số đặt hàng';
$_LANG['action_success'] = 'Kích hoạt thành công';
$_LANG['action_fail'] = 'Kích hoạt không thành công';
$_LANG['card'] = 'Thẻ';

$_LANG['batch_card_add'] = 'Thêm thẻ';

$_LANG['separator'] = 'Phân cách';
$_LANG['uploadfile'] = 'UPLOAD FILE';
$_LANG['sql_error'] = 'Bài viết %s thông báo lỗi:<br />';
/* Thông báo */
$_LANG['replenish_no_goods_id'] = 'Thiếu ID sản phẩm,không cung cấp hoạt động';
$_LANG['replenish_no_get_goods_name'] = 'ID sản phẩm tham số không đúng, và không thể có được các tên thương mại';
$_LANG['drop_card_success'] = 'Các hồ sơ đã được xóa thành công';
$_LANG['batch_drop'] = 'Xóa hàng loạt';
$_LANG['drop_card_confirm'] = 'Bạn có chắc chắn muốn xóa hồ sơ?';
$_LANG['card_sn_exist'] = 'Thẻ số %s đã tồn tại, xin vui lòng nhập lại';
$_LANG['go_list'] = 'Trở lại danh sách';
$_LANG['continue_add'] = 'Tiếp tục thêm';
$_LANG['uploadfile_fail'] = 'Lỗi UPLOAD';
$_LANG['batch_card_add_ok'] = 'Đã bổ sung thành công %s Thông tin';

$_LANG['js_languages']['no_card_sn'] = 'Thẻ và thẻ số sê-ri có thể trống rỗng, không có mật khẩu.';
$_LANG['js_languages']['separator_not_null'] = 'Separator(Khoảng cách) không thể để trống.';
$_LANG['js_languages']['uploadfile_not_null'] = 'Xin vui lòng lựa chọn tập tin để tải lên.';

$_LANG['use_help'] = 'Cách sử dụng:' .
        '<ol>' .
          '<li>Phải tải được tập tin CSV<br />' .
              'Tập tin CSV thẻ đầu tiên là một số sê-ri; thứ hai thẻ như là một mật khẩu; thứ ba là việc sử dụng đến ngày.<br />'.
              '(Sử dụng EXCEL csv để tạo ra phương pháp: trong của số EXCEL, thẻ mã số, tính từ ngày theo thứ tự để điền vào dữ liệu, trực tiếp sau khi hoàn thành một tài liệu có thể được lưu giữ như là một csv)'.
          '<li>Mật khẩu, và " Ngày kết thúc"  có thể được để trống, như tại các định dạng cho ngày 2009/11/6 hoặc 2009/11/6'.
          '<li>Số thẻ,mã số phải là các kí tự LATIN,không sử dựng các loại ngôn ngũ khác như là : THÁI,CAMPHUCHIA,LÀO ANH EM,TRUNG QUỐC,HÀN QUỐC,...Còn tiếng VN thì OK,được dùng thoải mái bạn à!</li>' .
        '</ol>';
/*------------------------------------------------------ */
//-- thay đổi mật mã chuỗi 
/*------------------------------------------------------ */

$_LANG['virtual_card_change'] = 'Thay đổi chuỗi mật khẩu';
$_LANG['user_guide'] = 'Cách sử dụng:' .
        '<ol>' .
          '<li>chuỗi ký tự được mã hóa bằng mật mã thẻ ảo trong các loại hàng hoá khi các số thẻ và mật khẩu được sử dụng</li>' .
          '<li>Chuỗi mã hóa được lưu giữ trong các tập tin bao gồm /lib_code.dll, tương ứng luôn là AUTH_KEY</li>' .
          '<li>Mã hóa chuỗi Nếu bạn muốn thay đổi, đó là lần đầu tiên cần thiết để sửa đổi các tập tin lib_code.dll, các OLD_AUTH_KEY strings đặt để thay đổi trước khi sử dụng khả năng mật mã, mật mã AUTH_KEY được sửa đổi cho loạt mới, và sau đó trong hộp văn bản bên dưới gốc loạt và mật mã mới chuỗi mã hóa, điểm \'để xác định\' nút </li>' .
        '</ol>';
$_LANG['label_old_string'] = 'Kí tự mã hóa ban đầu';
$_LANG['label_new_string'] = 'Mã hóa mới';

$_LANG['invalid_old_string'] = 'Kí tự mã hóa ban đầu không đúng';
$_LANG['invalid_new_string'] = 'Mã hóa mới không đúng';
$_LANG['change_key_ok'] = 'Thay đổi chuỗi mật mã thành công';
$_LANG['same_string'] = 'Mã hóa mới và mã hóa ban đầu cùng chuỗi mã hóa';

$_LANG['update_log'] = 'Cập nhật các bản ghi';
$_LANG['old_stat'] = 'Bao gồm %s tổng số hồ sơ của các bản ghi. String đã được mã hóa bằng cách sử dụng mới %s ghi lại, việc sử dụng các chuỗi mã hóa ban đầu (để có thể cập nhật) có %s hồ sơ, việc sử dụng một chuỗi mật mã không xác định được hồ sơ %s bản ghi.';
$_LANG['new_stat'] = '<strong>Cập nhật đã hoàn thành</strong>，bây giờ bằng cách sử dụng mật mã mới %s cho hồ sơ，việc sử dụng một chuỗi mật mã không xác định được hồ sơ %s Bản ghi.';
$_LANG['update_error'] = 'Quá trình cập nhật thông báo lỗi: %s';
$_LANG['js_languages']['updating_info'] = '<strong>Đang được cập nhật</strong>(cho mỗi hồ sơ 100)';
$_LANG['js_languages']['updated_info'] = '<strong>Hồ sơ</strong> <span id=\"updated\">0</span> đã được cập nhật.';
?>