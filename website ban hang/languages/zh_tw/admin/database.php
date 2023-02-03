<?php

$_LANG['db_manage'] = 'Quản lý cơ sở dữ liệu';
$_LANG['start_backup'] = 'Bắt đầu sao lưu';
$_LANG['backup_name'] = 'Tên';
$_LANG['backup_time'] = 'Thời gian';
$_LANG['backup_size'] = 'Cỡ';
$_LANG['restore'] = 'Khôi phục';
$_LANG['restore_ok'] = 'Khôi phục hoàn thành';
$_LANG['download'] = 'Download';
$_LANG['restored'] = 'Phục hồi';
$_LANG['upload_sql'] = 'Tải lên tập tin sao lưu dự phòng';

$_LANG['table'] = 'Table';
$_LANG['type'] = 'Loại dữ liệu';
$_LANG['rec_num'] = 'Số lưu lại';
$_LANG['rec_size'] = 'Cỡ lưu';
$_LANG['rec_chip'] = 'Mảnh vỡ';
$_LANG['start_optimize'] = 'Bắt đầu bảng dữ liệu tối ưu hóa';
$_LANG['chip_count'] = 'Tổng số fragments';
$_LANG['charset'] = 'Kí tự';
$_LANG['status'] = 'Tình trạng';

$_LANG['backup_type'] ='Sao lưu Loại';
$_LANG['full_backup'] ='Tất cả các back-up';
$_LANG['full_backup_note'] ='Sao lưu cơ sở dữ liệu cho tất cả các bảng';
$_LANG['stand_backup'] ='Tiêu chuẩn dự phòng (khuyến khích)';
$_LANG['stand_backup_note'] ='Sao lưu các dữ liệu được sử dụng bảng';
$_LANG['min_backup'] ='Sao lưu nhỏ';
$_LANG['min_backup_note'] ='Chỉ bao gồm các bảng hàng hóa, trật tự bảng, người sử dụng bảng';
$_LANG['custom_backup'] ='Tuỳ chỉnh dự phòng';
$_LANG['custom_backup_note'] ='Phù hợp với sự lựa chọn của sao lưu dữ liệu bảng';

$_LANG['option'] = 'Các tùy chọn khác';
$_LANG['ext_insert'] = 'Chèn để gia hạn sử dụng (Extended Chèn) chế độ';
$_LANG['is_pack'] = 'Có hoặc không sao lưu dữ liệu gói';
$_LANG['notice_is_pack'] = 'Phần mềm để giảm kích thước của bản sao lưu dự phòng, nhưng khi cần khôi phục lại sao lưu dự phòng trích để tải lên';
$_LANG['vol_size'] = 'Cỡ sao lưu(kb)';
$_LANG['sql_name'] = 'Sao lưu tên tập tin';
$_LANG['backup_failure'] = 'Sao lưu lỗi';

$_LANG['sqlfile'] = 'Tập tin SQL con';
$_LANG['update_table_pre'] = 'Thay đổi bảng tiền tố';
$_LANG['old_table_pre'] = 'Bảng tiền tố ban đầu';
$_LANG['new_table_pre'] = 'Bảng tiền tố mới';
$_LANG['use_new_pre'] = 'Sử dụng tiền tố mới';
$_LANG['notice_use_new_pre'] = 'Chỉ trong phục hồi các sao lưu toàn bộ chỉ có thể chọn "Có", nếu không không có sao lưu dự phòng của bảng sẽ không có sẵn. <br /> Bạn cũng có thể tự sửa đổi các dữ liệu / config.php trong biến $ tiền tố để quyết định có bảng để sử dụng tiền tố';$_LANG['upload_and_exe'] = 'Tải lên và thực hiện các tập tin sql';
$_LANG['upload_and_exe'] = 'Upload the sql file and execute.';

/* Thông báo */
$_LANG['fail_get_tables'] = 'Truy cập vào bảng sao lưu dữ liệu không thành công';
$_LANG['fail_open_file'] = 'Mở tập tin thất bại';
$_LANG['fail_remove'] = 'Loại bỏ tập tin không thành công';
$_LANG['fail_get_content'] = 'Truy cập vào các nội dung của bảng dữ liệu không thành công';
$_LANG['fail_upload'] = 'Tập tin tải lên thất bại';
$_LANG['fail_upload_move'] = 'Move không thành công';
$_LANG['unrecognize_version'] = 'Không thể xác định phiên bản sao lưu';
$_LANG['unrecognize_mysql_version'] = 'Không thể xác định các phiên bản MYSQL';
$_LANG['mysql_version_error'] = 'Mysql phiên bản hiện tại %s với bản sao lưu dự phòng dữ liệu mysql %s phiên bản khác nhau, bạn xác nhận rằng bạn muốn nhập khẩu các tập tin sao lưu dự phòng?';
$_LANG['confirm_ver'] = 'Có, để xác nhận nhập';
$_LANG['unconfirm_ver'] = 'Không, Hủy quyết định nhập';
$_LANG['version_error'] = 'Với phiên bản hiện tại của %s phiên bản sao lưu dữ liệu là khác nhau từ các sai lầm của các sao lưu và khôi phục';
$_LANG['not_sql_file'] = 'Không phải là như sql nếu bạn tải lên tập tin, nếu tập tin là sql tập tin, xin vui lòng thay đổi các tập tin mở rộng .Sql';
$_LANG['sqlfile_error'] = 'sql của bạn tải lên tập tin lỗi';
$_LANG['restore_success'] = 'Phục hồi thành công';
$_LANG['fail_optimize'] = 'Tối ưu hóa các bảng dữ liệu %s Không thành công';
$_LANG['optimize_ok'] = 'Dữ liệu tối ưu hóa thành công %d';
$_LANG['restore_confirm'] = 'Để khôi phục cơ sở dữ liệu sẽ loại bỏ tất cả các nội dung hiện hành, bạn chắc rằng bạn muốn khôi phục lại nó?';
$_LANG['fail_import'] = 'Dữ liệu không nhập được';
$_LANG['no_file'] = 'Không có FILE';
$_LANG['not_support_zip_format'] = 'Máy chủ không hỗ trợ các định dạng zip, unzip và sau đó tải lên tệp tin của bạn';

/* js */
$_LANG['js_languages']['remove_confirm'] = 'Bạn xác nhận rằng bạn muốn xóa bản sao lưu dự phòng không?';
$_LANG['js_languages']['lang_remove'] = 'Hủy bỏ';
$_LANG['js_languages']['lang_restore'] = 'Khôi phục bản sao lưu dự phòng';
$_LANG['js_languages']['lang_download'] = 'Tải về';
$_LANG['js_languages']['sql_name_not_null'] = 'Tên tập tin không thể để trống';
$_LANG['js_languages']['vol_size_not_null'] = 'Xin vui lòng điền vào kích thước bản sao lưu dự phòng';

/* Sao lưu dữ liệu */
$_LANG['backup_title'] = 'Tập tin %s  dữ liệu được tạo thành công, chương trình sẽ tự động tiếp tục.';
$_LANG['backup_notice'] = 'Nếu trình duyệt của bạn không hỗ trợ khung, xin vui lòng bấm vào đây';
$_LANG['backup_success'] = 'sao lưu thành công ';

$_LANG['name'] = 'Tên tập tin';
$_LANG['ver'] = 'Phiên bản';
$_LANG['add_time'] = 'Thời gian';
$_LANG['file_size'] = 'Kích thước';
$_LANG['empty_upload'] = 'Không có File nào được tải lên';
$_LANG['fail_write_file'] = 'Tập tin sao lưu %s Không ghi';
$_LANG['vol'] = 'Khối lượng';
$_LANG['import'] = 'Nhập';
$_LANG['server_sql'] = 'Máy chủ trên các tập tin sao lưu dự phòng';
$_LANG['submit_remove'] = 'Xóa';
$_LANG['remove_success'] = 'Xóa thành công';
$_LANG['confirm_import'] = 'Nhập vào không đầy đủ dữ liệu cho dù đầy đủ kích thước và cỡ FILE';
$_LANG['also_continue'] = 'Có,tôi muốn vào dữ liệu phụ';

$_LANG['dir_priv'] = 'Thư mục %s cho phép có những câu hỏi sau đây:';
$_LANG['dir_not_exist'] = 'Thư mục %s không tồn tại, xin vui lòng tự tạo ra';
$_LANG['cannot_read'] = 'Không thể đọc';
$_LANG['cannot_write'] = 'Không thể ghi';
$_LANG['cannot_add'] = 'Không thể thêm';
$_LANG['cannot_modify'] = 'Không thể MODIFY';

$_LANG['confirm_remove'] = 'Bạn chắc chắn muốn xoá các dữ liệu được lựa chọn?';

?>