<?php


$_LANG['integrate_name'] = 'Tên';
$_LANG['integrate_version'] = 'Phiên bản';
$_LANG['integrate_author'] = 'Tác giả';

/* Plug-in danh sách */
$_LANG['update_success'] = 'Cập nhật thành công.';
$_LANG['install_confirm'] = 'Bạn có chắc chắn rằng bạn muốn cài đặt dữ liệu, tích hợp plug-thành viên không?';
$_LANG['need_not_setup'] = 'Thành viên sử dụng VOC không cần thiết phải tích hợp';
$_LANG['different_domain'] = 'Bạn đã tích hợp thành công các hệ thống trên cùng tên miền.<br /> Nhưng bạn không thể cùng lúc đăng nhập được các hệ thống đó.';
$_LANG['points_set'] = 'Chuyển đổi cài đặt';
$_LANG['view_user_list'] = 'List sử dụng';
$_LANG['view_install_log'] = 'Xem tiến trình cài đặt - đăng nhập';

$_LANG['integrate_setup'] = 'Thiết lập tích hợp plug-in';
$_LANG['continue_sync'] = 'Đồng bộ hóa dữ liệu';
$_LANG['go_userslist'] = 'Quay lại danh sách';
$_LANG['user_help'] = '<pre>
Cách sử dụng:
          1: Nếu người dùng cần phải tích hợp các hệ thống khác, bạn có thể cài đặt thích hợp plug-in tích hợp phiên bản của nó. 
          2: Nếu bạn cần phải thay thế tích hợp hệ thống của người sử dụng, plug-in có thể được cài đặt trực tiếp các mục,nhập cùng một lúc sẽ tự động bỏ cài đặt plug-in trước đó. 
          3: Nếu bạn không cần bất kỳ của người sử dụng tích hợp hệ thống, chọn VOC(MISA Hi-tech) cài đặt plug-in, bạn có thể gỡ bỏ tất cả những tích hợp của plug-in. 
                           </pre>';

/* Xem tiến trình cài đặt đăng nhập */
$_LANG['lost_install_log'] = 'Không thấy tiến trình đăng nhập cài đặt';
$_LANG['empty_install_log'] = 'Bạn chưa cài đặt';

/* Hình thức của các ngôn ngữ có liên quan */
$_LANG['db_notice'] = 'Bấm vào“<font color="#000000">Tiếp theo</font>”sẽ hướng dẫn bạn đến đồng bộ người sử dụng. Nếu bạn không cần đồng bộ dữ liệu Click vào<font color="#000000">Lưu thông tin cấu hình trực tiếp</font>”';

$_LANG['lable_db_host'] = 'Database host:';
$_LANG['lable_db_name'] = 'Database name';
$_LANG['lable_db_chartset'] = 'Database kí tự';
$_LANG['lable_is_latin1'] = 'Database latin1';
$_LANG['lable_db_user'] = 'Database user';
$_LANG['lable_db_pass'] = 'Database password';
$_LANG['lable_prefix'] = 'Database tiền tố(prefix)';
$_LANG['lable_url'] = 'URL:';
/* Hình thức của các ngôn ngữ có liên quan (discus5x) */
$_LANG['cookie_prefix']          = 'Cookie prefix:';
$_LANG['cookie_salt']          = 'Cookie được mã hóa chuỗi ký tự:';
$_LANG['button_next'] = 'Tiếp theo';
$_LANG['button_force_save_config'] = 'Lưu thông tin cấu hình trực tiếp';
$_LANG['save_confirm'] = 'Bạn có chắc chắn lưu giữ các thông tin cấu hình trực tiếp?';
$_LANG['button_save_config'] = 'Lưu thông tin cấu hình';

$_LANG['error_db_msg'] = 'Địa chỉ cơ sở dữ liệu, người dùng hoặc mật khẩu không đúng';
$_LANG['error_db_exist'] = 'Cơ sở dữ liệu không tồn tại';
$_LANG['error_table_exist'] = 'Các bảng dữ liệu quan trọng tích hợp không tồn tại, bạn điền vào những thông tin không đúng.';

$_LANG['notice_latin1'] = 'Tùy chọn này sẽ điền vào báo lỗi có thể dẫn đến những người sử dụng Tiếng Vn không thể sử dụng.';
$_LANG['error_not_latin1'] = 'latin1 tích hợp cơ sở dữ liệu mã hóa không tìm thấy! Xin vui lòng chọn lại.';
$_LANG['error_is_latin1'] = 'Tích hợp cơ sở dữ liệu tìm thấy lantin1 mã hóa! Xin vui lòng chọn lại';
$_LANG['invalid_db_charset'] = 'Tích hợp cơ sở dữ liệu tìm thấy ký tự cài đặt là %s hơn %s ký tự';
$_LANG['error_latin1'] = 'Bạn điền vào các thông tin tích hợp sẽ dẫn đến lỗi nghiêm trọng, không thể hoàn tất việc tích hợp.';

/* Kiểm tra tên giống như người sử dụng */
$_LANG['conflict_username_check'] = 'Kiểm tra xem người sử dụng và tích hợp';
$_LANG['check_notice'] = 'Trang này sẽ phát hiện người sử dụng và các hệ thống đã được tích hợp cho dù có lặp lại tên người dùng, hãy nhấp vào KIỂM TRA trước khi bắt đầu';
$_LANG['default_method'] = 'Nếu có tên trùng lặp phát hiện người sử dụng, xin vui lòng cho người sử dụng mặc định để lựa chọn một phương pháp tiếp cận';
$_LANG['shop_user_total'] = 'Tổng số của %s sẽ được kiểm tra xem';
$_LANG['lable_size'] = 'Số lượng kiểm tra';
$_LANG['start_check'] = 'Bắt đầu KTRA';
$_LANG['next'] = 'Tiếp tục';
$_LANG['checking'] = 'Đang kiểm tra...(Xin vui lòng không đóng trình duyệt của bạn)';
$_LANG['notice'] = 'Đã kiểm tra %s / %s ';
$_LANG['check_complete'] = 'Kiểm tra để hoàn tất';

/* Những người sử dụng để đối phó với cùng một tên */
$_LANG['conflict_username_modify'] = 'Sửa tên';
$_LANG['modify_notice'] = 'Đây là danh sách tất cả những thứ cần tích hợp,nếu bạn đã sẵn sàng để tích hợp thì có thể nhấn vào BẮT ĐẦU；Và để thay đổi người sử dụng,bạn cần bấm vào nút LƯU để có hiệu lực';
$_LANG['page_default_method'] = 'Mặc định phương pháp';
$_LANG['lable_rename'] = 'Đổi tên';
$_LANG['lable_delete'] = 'Xóa liên quan dữ liệu người dùng';
$_LANG['lable_ignore'] = 'Bỏ qua';
$_LANG['short_rename'] = 'Đổi tên';
$_LANG['short_delete'] = 'Xóa';
$_LANG['short_ignore'] = 'Bỏ qua';
$_LANG['user_name'] = 'Tên người dùng';
$_LANG['email'] = 'Email';
$_LANG['reg_date'] = 'Ngày đăng kí';
$_LANG['all_user'] = 'Tất cả người dùng';
$_LANG['error_user'] = 'Cần phải lựa chọn lại tên người dùng';
$_LANG['rename_user'] = 'Sửa đổi tên';
$_LANG['delete_user'] = 'Xóa tên';
$_LANG['ignore_user'] = 'Bỏ qua';

$_LANG['submit_modify'] = 'Lưu các thay đổi trên trang này';
$_LANG['button_confirm_next'] = 'Bắt đầu';


/* Chặn người này đồng bộ hóa */
$_LANG['user_sync'] = 'Hoàn tất việc tích hợp sử dụng';
$_LANG['button_pre'] = 'Quay lại';
$_LANG['task_name'] = 'Tên';
$_LANG['task_status'] = 'Tình trạng';
$_LANG['task_del'] = '%s số lượng đã bị xóa';
$_LANG['task_rename'] = '%s số lượng đã đổi tên';
$_LANG['task_sync'] = '%s số lượng đã đồng bộ';
$_LANG['task_save'] = 'Lưu thông tin cấu hình, và hoàn thành việc tích hợp';
$_LANG['task_uncomplete'] = 'Không hoàn tất';
$_LANG['task_run'] = 'Chạy (%s / %s)';
$_LANG['task_complete'] = 'Đã hoàn thành';
$_LANG['start_task'] = 'Bắt đầu nhiệm vụ';
$_LANG['sync_status'] = 'Đã được đồng bộ hoá %s / %s';
$_LANG['sync_size'] = 'Kích thước đồng bộ';
$_LANG['sync_ok'] = 'Xin chúc mừng bạn. Đồng bộ thành công';


$_LANG['save_ok'] = 'Lưu thành công';

/* Thiết lập điểm */
$_LANG['no_points'] = 'Không tìm thấy điểm trao đổi';
$_LANG['bbs'] = 'Diễn Đàn';
$_LANG['shop_pay_points'] = 'Điểm tiêu thụ';
$_LANG['shop_rank_points'] = 'Điểm đánh giá';
$_LANG['add_rule'] = 'Quy định mới';
$_LANG['modify'] = 'Thay đổi';
$_LANG['rule_name'] = 'Tỷ lệ';
$_LANG['rule_rate'] = 'Tỉ lệ chuyển đổi';

/* phần ngôn ngữ bản ghi */
$_LANG['js_languages']['no_host'] = 'DB host không thể trống!';
$_LANG['js_languages']['no_user'] = 'DB USER không thể trống!';
$_LANG['js_languages']['no_name'] = 'DB NAME không thể trống';
$_LANG['js_languages']['no_integrate_url'] = 'Vui lòng nhập đầy đủ mục tiêu tích hợp của URL';
$_LANG['js_languages']['install_confirm'] = 'Xin vui lòng không chạy trong hệ thống để thay thế các đối tượng ngẫu nhiên. \r\n Bạn có chắc chắn rằng bạn muốn cài đặt dữ liệu, tích hợp plug-thành viên không?';
$_LANG['js_languages']['num_invalid'] = 'Đồng bộ dữ liệu ghi lại số không phải là một số nguyên';
$_LANG['js_languages']['start_invalid'] = 'Bắt đầu không phải là số nguyên.';
$_LANG['js_languages']['sync_confirm'] = 'Việc đồng bộ sẽ tái dữ liệu bảng,bạn phải backup dữ liệu trước khi đồng bộ. \r\n Bạn có chắc chắn muốn để bắt đầu đồng bộ hóa dữ liệu các thành viên?';

$_LANG['cookie_prefix_notice'] = 'UTF8 phiên bản của các tập tin cookie tiền tố mặc định là xnW_, GB2312/GBK phiên bản của các tập tin cookie tiền tố mặc định là KD9_.';

$_LANG['js_languages']['no_method'] = 'Xin vui lòng lựa chọn một phương pháp';

$_LANG['js_languages']['rate_not_null'] = 'Tỉ lệ không thể để trống';
$_LANG['js_languages']['rate_not_int'] = 'Tỉ lệ chỉ có thể điền vào một số nguyên';
$_LANG['js_languages']['rate_invailed'] = 'Tỉ lệ không đúng';
$_LANG['js_languages']['user_importing'] = 'Importing...';

/* UCenter Thiết lập ngôn ngữ bản ghi */
$_LANG['ucenter_tab_base'] = 'Cài đặt Cơ bản';
$_LANG['ucenter_tab_show'] = 'Hiển thị Cài đặt';
$_LANG['ucenter_lab_id'] = 'UCenter ID:';
$_LANG['ucenter_lab_key'] = 'UCenter KEY:';
$_LANG['ucenter_lab_url'] = 'UCenter URL:';
$_LANG['ucenter_lab_ip'] = 'UCenter IP :';
$_LANG['ucenter_lab_connect'] = 'UCenter kết nối:';
$_LANG['ucenter_lab_db_host'] = 'UCenter HOST:';
$_LANG['ucenter_lab_db_user'] = 'UCenter USER:';
$_LANG['ucenter_lab_db_pass'] = 'UCenter PASS:';
$_LANG['ucenter_lab_db_name'] = 'UCenter NAME:';
$_LANG['ucenter_lab_db_pre'] = 'UCenter bảng tiền tố:';
$_LANG['ucenter_lab_tag_number'] = 'TAG nhãn hiển thị:';
$_LANG['ucenter_lab_credit_0'] = 'Tên lớp điểm:';
$_LANG['ucenter_lab_credit_1'] = 'Điểm tiêu thụ:';
$_LANG['ucenter_opt_database'] = 'Tiếp cận cơ sở dữ liệu';
$_LANG['ucenter_opt_interface'] = 'Giao diện';

$_LANG['ucenter_notice_id'] = 'Giá trị cho các ứng dụng hiện tại cửa hàng UCenter ID, xin vui lòng không thay đổi tình hình chung';
$_LANG['ucenter_notice_key'] = 'Giao khóa cho UCenter và chuyển giao các thông tin giữa các mật mã, có thể chứa bất kỳ chữ cái và chữ số, xin vui lòng điền chính xác với cùng một bộ thông tin liên lạc trọng điểm để đảm bảo rằng cả hai hệ thống có thể giao tiếp bình thường';
$_LANG['ucenter_notice_url'] = 'Giá trị trong UCenter sau khi bạn đã cài đặt sẽ được initialized trong địa chỉ của bạn hoặc thư mục UCenter thay đổi hoàn cảnh, để thay đổi này, xin vui lòng không thay đổi tình hình chung chung như: http://www.sitename.com/uc_server (Không được thêm vào cuối cùng "/")';
$_LANG['ucenter_notice_ip'] = 'Nếu máy chủ của bạn không thể truy cập các tên miền UCenter, có thể nhập địa chỉ IP của máy chủ UCenter';
$_LANG['ucenter_notice_connect'] = 'Tích hợp lựa chọn kết nối theo server mạng.';
$_LANG['ucenter_notice_db_host'] = 'Có thể là một cơ sở dữ liệu của địa phương(Localhost) cũng có thể là một máy chủ từ xa, nếu thay vì mặc định cổng MySQL 3306, xin vui lòng điền vào mẫu dưới đây: 127.0.0.1:6033';
$_LANG['uc_notice_ip'] = 'Một số nỗ lực để kết nối các vấn đề, xin vui lòng điền vào địa chỉ IP của máy chủ, nếu bạn có UCenter gắn kết và trên cùng một máy chủ, chúng tôi khuyên bạn nên điền vào 127.0.0.1';

$_LANG['uc_lab_url'] = 'UCenter URL:';
$_LANG['uc_lab_pass'] = 'Mật khẩu UCenter:';
$_LANG['uc_lab_ip'] = 'UCenter IP:';

$_LANG['uc_msg_verify_failur'] = 'Xác nhận không thành công';
$_LANG['uc_msg_password_wrong'] = 'Mật khẩu tạo ra bị lỗi';
$_LANG['uc_msg_data_error'] = 'Báo lỗi cài đặt dữ liệu';

$_LANG['ucenter_import_username'] = 'Dữ liệu vào các UCenter';
$_LANG['uc_import_notice'] = 'Chú ý: Nhập các dữ liệu khác nhau)';
$_LANG['uc_members_merge'] = 'Kết hợp';
$_LANG['user_startid_intro'] = '<p>Bắt đầu cho các %s。Nếu ban đầu cho 888 ID sẽ trở thành một thành viên của các giá trị của %s+888 .</p>';
$_LANG['uc_members_merge_way1'] = 'UC sẽ làm việc với cùng một tên người dùng và mật khẩu của người sử dụng cho cùng một người sử dụng bắt buộc';
$_LANG['uc_members_merge_way2'] = 'UC sẽ làm việc với cùng một tên người dùng và mật khẩu của bạn vào người sử dụng.';
$_LANG['start_import'] = 'Bắt đầu nhập';
$_LANG['import_user_success'] = 'Nhập thành công vào UCenter';
$_LANG['uc_points'] = 'UCenter số điểm trao đổi cần quản lí';
$_LANG['uc_set_credits'] = 'Thiết lập chương trình điểm';
$_LANG['uc_client_not_exists'] = 'thiết lập số điểm chương trình giao lưu '; 
$_LANG['Uc_client_not_exists'] = 'uc_client thư mục không tồn tại, xin vui lòng tải nó lên uc_client thư mục dưới thư mục gốc.';
$_LANG['uc_client_not_write'] = 'uc_client/datathư mục dữ liệu không ghi, xin vui lòng vào uc_client/data thie777';
$_LANG['uc_lang']['credits'][0][0] = 'Đánh giá';
$_LANG['uc_lang']['credits'][0][1] = '';
$_LANG['uc_lang']['credits'][1][0] = 'Tiêu điểm';
$_LANG['uc_lang']['credits'][1][1] = '';
$_LANG['uc_lang']['exchange'] = 'UCenter số điểm trao đổi';

?>