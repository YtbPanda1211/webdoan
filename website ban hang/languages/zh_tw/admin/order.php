<?php

/* tìm kiếm Đặt hàng */
$_LANG['order_sn'] = 'Số đặt hàng';
$_LANG['consignee'] = 'Người nhận hàng';
$_LANG['all_status'] = 'Tình trạng';

$_LANG['cs'][OS_UNCONFIRMED] = 'Chưa kiểm tra';
$_LANG['cs'][CS_AWAIT_PAY] = 'Chờ thanh toán';
$_LANG['cs'][CS_AWAIT_SHIP] = 'Đang chờ giao hàng';
$_LANG['cs'][CS_FINISHED] = 'Đã Giao hàng(Kết thúc)';
$_LANG['cs'][PS_PAYING] = 'Đang thanh toán';
$_LANG['cs'][OS_CANCELED] = 'Đã hủy bỏ';
$_LANG['cs'][OS_INVALID] = 'Không hợp lệ';
$_LANG['cs'][OS_RETURNED] = 'Làm lại từ đầu';

/* Tình trạng đặt hàng */
$_LANG['os'][OS_UNCONFIRMED] = 'Chưa kiểm tra';
$_LANG['os'][OS_CONFIRMED] = 'Đã kiểm tra xong';
$_LANG['os'][OS_CANCELED] = '<font color="red">Đã hủy bỏ</font>';
$_LANG['os'][OS_INVALID] = '<font color="red">Không hợp lệ</font>';
$_LANG['os'][OS_RETURNED] = '<font color="red">Trở lại từ đầu</font>';
$_LANG['os'][OS_SPLITED] = 'Had been a single';
$_LANG['os'][OS_SPLITING_PART] = 'Part of the sub-single-';

$_LANG['ss'][SS_UNSHIPPED] = 'Chưa giao hàng';
$_LANG['ss'][SS_PREPARING] = 'Kết thúc chuẩn bị';
$_LANG['ss'][SS_SHIPPED] = 'Đã gửi hàng';
$_LANG['ss'][SS_RECEIVED] = 'Kết thúc đơn hàng';
$_LANG['ss'][SS_SHIPPED_PART] = 'Partially Shipped';
$_LANG['ss'][SS_SHIPPED_ING] = 'No shippings';// Shipped in

$_LANG['ps'][PS_UNPAYED] = 'Chưa thanh toán tiền đặt hàng';
$_LANG['ps'][PS_PAYING] = 'Đang thanh toán';
$_LANG['ps'][PS_PAYED] = 'Đã thanh toán';

$_LANG['ss_admin'][SS_SHIPPED_ING] = 'Shipped in（Future state：No shippings）';
/* hoạt động Đặt hàng */
$_LANG['label_operable_act'] = 'Các bước thực hiện：';
$_LANG['label_action_note'] = 'Nội dung ghi chú:';
$_LANG['label_invoice_note'] = 'Ghi chú hàng:';
$_LANG['label_invoice_no'] = 'Hóa đơn số：';
$_LANG['label_cancel_note'] = 'Lí do hủy bỏ:';
$_LANG['notice_cancel_note'] = '（Ghi chú hủy bỏ sẽ ghi lại trong các bài viết cho khách hàng）';
$_LANG['op_confirm'] = 'Kết thúc kiểm tra';
$_LANG['op_pay'] = 'Đã thanh toán';
$_LANG['op_prepare'] = 'Kết thúc chuẩn bị';
$_LANG['op_ship'] = 'Giao hàng &amp; lâp hóa đơn';
$_LANG['op_cancel'] = 'Hủy bỏ';
$_LANG['op_invalid'] = 'Không hợp lệ';
$_LANG['op_return'] = 'Trở lại từ đầu';
$_LANG['op_unpay'] = 'Trả lại tiền(Cho người dùng)';
$_LANG['op_unship'] = 'Không giao hàng';
$_LANG['op_cancel_ship'] = 'Hủy giao hàng';
$_LANG['op_receive'] = 'Xác nhận sau giao hàng(Khách hàng đã nhận được hàng)';
$_LANG['op_assign'] = 'Người nhận';
$_LANG['op_after_service'] = 'Ghi nhớ';
$_LANG['act_ok'] = 'Hoạt động thành công';
$_LANG['act_false'] = 'Operate failed';
$_LANG['act_ship_num'] = 'Shipped quantity is more then order quantity';
$_LANG['act_good_vacancy'] = 'Out of stock';
$_LANG['act_good_delivery'] = 'Shipped';
$_LANG['notice_gb_ship'] = 'Chú ý: để mua, trước khi các hoạt động thành công thì không thể giao hàng';
$_LANG['back_list'] = 'Trở về danh sách đơn đặt hàng';
$_LANG['op_remove'] = 'Xóa';
$_LANG['op_you_can'] = 'Bạn có thể thực hiện các hoạt động';
$_LANG['op_split'] = 'Am single';
$_LANG['op_to_delivery'] = 'To delivery';

/*  Sắp xếp danh sách */
$_LANG['order_amount'] = 'Số tiền đặt';
$_LANG['total_fee'] = 'Tổng phí';
$_LANG['shipping_name'] = 'Cách phân phối';
$_LANG['pay_name'] = 'Phương thức thanh toán';
$_LANG['address'] = 'Địa chỉ';
$_LANG['order_time'] = 'Thời gian';
$_LANG['detail'] = 'Chi tiết';
$_LANG['phone'] = 'Điện thoại';
$_LANG['group_buy'] = '（Mua）';
$_LANG['error_get_goods_info'] = 'Lỗi thông tin đặt hàng!';
$_LANG['exchange_goods'] = '（Điểm trao đổi）';

$_LANG['js_languages']['remove_confirm'] = 'Bạn có chắc chắn xóa thông tin đặt hàng?';

/* tìm kiếm  Đặt hàng */
$_LANG['label_order_sn'] = 'Đặt hàng Số:';
$_LANG['label_all_status'] = 'Tình trạng:';
$_LANG['label_user_name'] = 'Tên người mua:';
$_LANG['label_consignee'] = 'Tên người nhận:';
$_LANG['label_email'] = 'Email:';
$_LANG['label_address'] = 'Địa chỉ:&nbsp;';
$_LANG['label_zipcode'] = 'Mã bưu cục:';
$_LANG['label_tel'] = 'Điện thoại:';
$_LANG['label_mobile'] = 'Di động:';
$_LANG['label_shipping'] = 'Cách phân phối:';
$_LANG['label_payment'] = 'Cách thanh toán:';
$_LANG['label_order_status'] = 'Tình trạng Đặt hàng:';
$_LANG['label_pay_status'] = ' Tình trạng thanh toán';
$_LANG['label_shipping_status'] = ' Tình trạng phân phối:';
$_LANG['label_area'] = 'Địa điểm:';
$_LANG['label_time'] = 'Thời gian:';

/* Đặt hàng- Xem chi tiết */
$_LANG['prev'] = '≪Đơn đặt hàng trước';
$_LANG['next'] = 'Đơn đặt hàng tiếp theo≫';
$_LANG['print_order'] = 'In Đặt hàng';
$_LANG['print_shipping'] = 'In giao hàng';
$_LANG['print_order_sn'] = 'Số đặt hàng(Mã sản phẩm):';
$_LANG['print_buy_name'] = 'Tài Khoản Người Mua:';
$_LANG['label_consignee_address'] = 'Địa chỉ nhận:';
$_LANG['no_print_shipping'] = 'Chúng tôi xin lỗi, nhưng hiện tại bạn đã không được thiết lập để in một biểu mẫu.';
$_LANG['suppliers_no'] = 'At my disposal(without suppliers)';
$_LANG['restaurant'] = 'Restaurant';

$_LANG['order_info'] = 'Thông tin Đặt hàng';
$_LANG['base_info'] = 'Thông tin cơ bản';
$_LANG['other_info'] = 'Các thông tin khác';
$_LANG['consignee_info'] = 'Thông Tin Người Mua';
$_LANG['fee_info'] = 'Thông tin phí';
$_LANG['action_info'] = 'Ghi chú thông tin';
$_LANG['shipping_info'] = 'Shipping Info';

$_LANG['label_how_oos'] = 'Yêu cầu giao hàng:';
$_LANG['label_how_surplus'] = 'Số dư đạt được';
$_LANG['label_pack'] = 'Đóng gói:';
$_LANG['label_card'] = 'Chọn thiệp hàng hóa:';
$_LANG['label_card_message'] = 'Thông tin thiệp hàng:';
$_LANG['label_order_time'] = 'Thời gian đặt hàng:';
$_LANG['label_pay_time'] = 'Thời gian thanh toán:';
$_LANG['label_shipping_time'] = 'Thời gian giao hàng:';
$_LANG['label_sign_building'] = 'Cam kết:';
$_LANG['label_best_time'] = 'Thời gian thích hợp:</br>(Cho giao hàng)';
$_LANG['label_inv_type'] = 'Loại hóa đơn:';
$_LANG['label_inv_payee'] = 'Hóa đơn chi trả:';
$_LANG['label_inv_content'] = 'Nội dung hóa đơn:';
$_LANG['label_postscript'] = 'Thông tin bổ sung:</br>(từ khách hàng)';
$_LANG['label_region'] = 'Địa điểm:';

$_LANG['label_shop_url'] = 'URL:';
$_LANG['label_shop_address'] = 'Địa chỉ:&nbsp;';
$_LANG['label_service_phone'] = 'Điện thoại:';
$_LANG['label_print_time'] = 'Thời Gian In:&nbsp;';

$_LANG['label_suppliers'] ='Choose suppliers:';
$_LANG['label_agency'] = 'Agency:';
$_LANG['suppliers_name'] = 'Suppliers';

$_LANG['product_sn'] = 'Item No';
$_LANG['goods_info'] = 'Thông tin sản phẩm';
$_LANG['goods_name'] = 'Tên Sản phẩm';
$_LANG['goods_name_brand'] = 'Tên sản phẩm';
$_LANG['goods_sn'] = 'Số hiệu(Số Sê-ri)sản phẩm';
$_LANG['goods_price'] = 'Giá mỗi Sản Phẩm';
$_LANG['goods_number'] = 'Số lượng';
$_LANG['goods_attr'] = 'Thuộc tính';
$_LANG['goods_delivery'] = 'Shipped quantity';
$_LANG['goods_delivery_curr'] = 'Invoice quantity';
$_LANG['storage'] = 'Hàng trong kho';
$_LANG['subtotal'] = 'Tổng Số Tiền';
$_LANG['label_total'] = 'Tổng số:';
$_LANG['label_total_weight'] = 'Tổng số trọng lượng hàng hóa:';

$_LANG['label_goods_amount'] = 'Tổng giá trị hàng hoá:&nbsp;';
$_LANG['label_discount'] = 'Giảm giá:';
$_LANG['label_tax'] = 'Thuế:';
$_LANG['label_shipping_fee'] = 'Phí gửi hàng:';
$_LANG['label_insure_fee'] = 'Phí Bảo Đảm:';
$_LANG['label_insure_yn'] = 'Bảo đảm?(Y/N):';
$_LANG['label_pay_fee'] = 'Phí thanh toán:';
$_LANG['label_pack_fee'] = 'Phí đóng gói:';
$_LANG['label_card_fee'] = 'Phí Thiệp Hàng:';
$_LANG['label_money_paid'] = 'Khoản tiền đã trả:&nbsp;';
$_LANG['label_surplus'] = 'Sử dụng số dư tài khoản:';
$_LANG['label_integral'] = 'Sử dụng số điểm thưởng:</br>(Từ các chương trình khuyến mại,</br>khách hàng mua hàng nhiều được</br> tặng điểm thưởng)';
$_LANG['label_bonus'] = 'Sử dụng điểm thưởng của hệ thống:</br>(BONUS)';
$_LANG['label_order_amount'] = 'Tổng giá trị đặt hàng:&nbsp;';
$_LANG['label_money_dues'] = 'Số tiền phải thanh toán:&nbsp;';
$_LANG['label_money_refund'] = 'Số tiền hoàn lại:';
$_LANG['label_to_buyer'] = 'Nhắn tin đến khách hàng:';
$_LANG['save_order'] = 'Lưu đặt hàng';
$_LANG['notice_gb_order_amount'] = '（Lưu ý: mua các giấy tờ có giá để trả các khoản phí tương ứng）';

$_LANG['action_user'] = 'Tài khoản xác nhận:&nbsp;';
$_LANG['action_time'] = 'Thời gian';
$_LANG['order_status'] = 'Tình trạng kiểm tra';
$_LANG['pay_status'] = 'Tình trạng thanh toán';
$_LANG['shipping_status'] = 'Tình trạng gửi hàng';
$_LANG['action_note'] = 'Ghi chú';
$_LANG['pay_note'] = 'Ghi chú thanh toán:';

$_LANG['sms_time_format'] = 'm vào ngày j khi G';
$_LANG['order_shipped_sms'] = 'Đặt hàng %s của bạn %s đã có hàng [%s]';
$_LANG['order_splited_sms'] = 'Your order%s,%sIs%s [%s]';
$_LANG['order_removed'] = 'Xóa thành công đơn đặt hàng.';
$_LANG['return_list'] = 'Quay lại danh sách';

/*  Nhăc tự chế biến */
$_LANG['surplus_not_enough'] = 'Số dư %s Không đủ để trả';
$_LANG['integral_not_enough'] = 'Số điển %s Không đủ để trả';
$_LANG['bonus_not_available'] = 'Điểm thưởng không khả dụng';

/* Mua * Thông tin */
$_LANG['display_buyer'] = 'Hiển thị các thông tin mua hàng';
$_LANG['buyer_info'] = 'Người Mua Hàng';
$_LANG['pay_points'] = 'Điểm thanh toán';
$_LANG['rank_points'] = 'Điểm đánh giá';
$_LANG['user_money'] = 'Số dư tài khoản';
$_LANG['email'] = 'Email';
$_LANG['rank_name'] = 'Cấp Bậc thành viên';
$_LANG['bonus_count'] = 'Số điểm thưởng(BONUS)</br>(Điểm từ hệ thống)';
$_LANG['zipcode'] = 'Mã bưu cục';
$_LANG['tel'] = 'ĐT';
$_LANG['mobile'] = 'Di Động';

/* Kết hợp lệnh */
$_LANG['order_sn_not_null'] = 'Xin vui lòng điền vào các số thứ tự';
$_LANG['two_order_sn_same'] = 'Kết hợp đơn hàng không thành công';
$_LANG['order_not_exist'] = 'Đặt hàng %s không tồn tại';
$_LANG['os_not_unconfirmed_or_confirmed'] = '%s theo thứ tự của tình trạng "không được công nhận" hoặc "đã xác nhận:"';
$_LANG['ps_not_unpayed'] = 'Khoản thanh tóan %s Không được hoàn lại';
$_LANG['ss_not_unshipped'] = 'Khoản %s Không thể bỏ gửi hàng';
$_LANG['order_user_not_same'] = 'Hai đơn hàng kết hợp không cùng người sử dụng';
$_LANG['merge_invalid_order'] = 'Xin lỗi,không được phép nhật kết hợp mà bạn chọn.';

$_LANG['from_order_sn'] = 'Từ:';
$_LANG['to_order_sn'] = 'Tới:';
$_LANG['merge'] = 'Hợp nhất';
$_LANG['notice_order_sn'] = 'Khi hai đơn đặt hàng là không nhất quán, kết hợp các thông tin đặt hàng (chẳng hạn như: phương thức thanh toán,các phương pháp phân phối, đóng gói,thẻ, vv) để chỉnh xuất hiện.';
$_LANG['js_languages']['confirm_merge'] = 'Bạn có chắc chắn rằng bạn muốn hợp nhất hai lệnh?';

/*Batch chế biến */
$_LANG['pls_select_order'] = 'Xin vui lòng lựa chọn các hoạt động mà bạn muốn đặt hàng';
$_LANG['no_fulfilled_order'] = 'Đã không đáp ứng các điều kiện hoạt động của các đơn đặt hàng.';
$_LANG['updated_order'] = 'Cập nhật theo thứ tự:';
$_LANG['order'] = 'Đặt hàng:';
$_LANG['confirm_order'] = 'Dưới đây là những tình trạng đơn đặt hàng có thể không được thiết lập để xác nhận.';
$_LANG['invalid_order'] = 'Dưới đây là những đơn đặt hàng có thể không được đặt để vô hiệu';
$_LANG['cancel_order'] = 'Dưới đây là những đơn đặt hàng có thể không bị hủy';
$_LANG['remove_order'] = 'Dưới đây là những đơn đặt hàng không thể bị xoá';

/* Đặt hàng để in các bản mẫu soạn thảo */
$_LANG['edit_order_templates'] = 'Chỉnh sửa bản mẫu đặt hàng';
$_LANG['template_resetore'] = 'Khôi phục mẫu';
$_LANG['edit_template_success'] = 'Chỉnh sửa bản mẫu để in ấn thành công!';
$_LANG['remark_fittings'] = '(Phần)';
$_LANG['remark_gift'] = '(Quà tặng)';
$_LANG['remark_favourable'] = '（Ưa thích）';
$_LANG['remark_package'] = '（Gói）';

/* Nguồn số liệu thống kê của đơn đặt hàng */
$_LANG['from_order'] = 'Tháng:';
$_LANG['from_ad_js'] = 'Quảng cáo:';
$_LANG['from_goods_js'] = 'Hàng hóa';
$_LANG['from_self_site'] = 'Từ web';
$_LANG['from'] = 'Từ:';

/* Thêm, sửa đổi, đơn đặt hàng */
$_LANG['add_order'] = 'Thêm lệnh';
$_LANG['edit_order'] = 'Sửa đổi thứ tự';
$_LANG['step']['user'] = 'Xin vui lòng lựa chọn thành viên mà bạn muốn đặt mua hàng';
$_LANG['step']['goods'] = 'Lựa chọn hàng hoá';
$_LANG['step']['consignee'] = 'Thiết lập các thông tin gửi hàng';
$_LANG['step']['shipping'] = 'Chọn phương pháp phân phối';
$_LANG['step']['payment'] = 'Chọn phương thức thanh toán';
$_LANG['step']['other'] = 'Đặt các thông tin bổ sung';
$_LANG['step']['money'] = 'Thiết lập các chi phí';
$_LANG['anonymous'] = 'Chưa xác định người gởi';
$_LANG['by_useridname'] = 'ID thành viên';
$_LANG['button_prev'] = 'Quay lại';
$_LANG['button_next'] = 'Tiếp theo';
$_LANG['button_finish'] = 'Hoàn tất';
$_LANG['button_cancel'] = 'Hủy bỏ';
$_LANG['name'] = 'Tên';
$_LANG['desc'] = 'Mô tả';
$_LANG['shipping_fee'] = 'Phí gửi hàng';
$_LANG['free_money'] = 'Giới Hạn phí';
$_LANG['insure'] = 'Bảo đảm';
$_LANG['pay_fee'] = 'Phí thanh toán';
$_LANG['pack_fee'] = 'Phí gói';
$_LANG['card_fee'] = 'Phí thẻ';
$_LANG['no_pack'] = 'Không đóng gói';
$_LANG['no_card'] = 'Không sử dụng bưu thiếp';
$_LANG['add_to_order'] = 'Thêm đặt hàng';
$_LANG['calc_order_amount'] = 'Tính toán số lượng đơn đặt hàng';
$_LANG['available_surplus'] = '(Trong số tiền hiện Có)</br>Đã nạp tiền vào tài khỏan:&nbsp;';
$_LANG['available_integral'] = 'Trong số điểm tích lũy:&nbsp;';
$_LANG['available_bonus'] = 'Thưởng:';
$_LANG['admin'] = 'Thêm các quản trị viên';
$_LANG['search_goods'] = 'Tìm kiếm hàng hóa(Tên Sản Phẩm)';
$_LANG['category'] = 'Chuyên mục';
$_LANG['brand'] = 'Thương hiệu';
$_LANG['user_money_not_enough'] = 'Số tiền không đủ';
$_LANG['pay_points_not_enough'] = 'Số điểm không đủ';
$_LANG['money_paid_enough'] = 'Số tiền trả lại lớn hơn tổng chi tiết các loại.';
$_LANG['price_note'] = 'Lưu ý: tăng giá hàng hóa hoặc thêm bớt hàng hóa</br>sẽ bao gồm toàn bộ chi phí thanh toán.';
$_LANG['select_pack'] = 'Chọn đóng gói';
$_LANG['select_card'] = 'Chọn bưu thiếp';
$_LANG['select_shipping'] = 'Xin vui lòng lựa chọn chế độ phân phối';
$_LANG['want_insure'] = 'Tôi muốn bảo vệ các giá';
$_LANG['update_goods'] = 'Cập nhật';
$_LANG['notice_user'] = '<strong>Lưu ý:</strong>hiển thị kết quả tìm kiếm chỉ có 20 trang hồ sơ' .
        'Thành viên, xin vui lòng tìm chính xác.' .
        'Không tìm thấy thành viên đăng nhập';
$_LANG['amount_increase'] = 'Số tiền giảm tăng';
$_LANG['amount_decrease'] = 'Số tiền giảm';
$_LANG['continue_shipping'] = 'Bởi vì bạn đã sửa đổi vị trí của consignee, dẫn đến những cách để phân phối ban đầu không còn tồn tại, xin vui lòng lại chọn phương pháp phân phối';
$_LANG['continue_payment'] = 'Do trong cách phân phối, sửa đổi, dẫn đến các phương thức thanh toán ban đầu là không còn nữa, xin vui lòng lại chọn phương pháp phân phối';
$_LANG['refund'] = 'Hoàn lại tiền';
$_LANG['cannot_edit_order_shipped'] = 'Bạn không thể chỉnh sửa theo thứ tự đã được giao hàng';
$_LANG['address_list'] = 'Chọn địa chỉ phân phối:';
$_LANG['order_amount_change'] = 'Tổng số lượng đơn đặt hàng từ %s đến %s';
$_LANG['shipping_note'] = 'Mô tả:đây là thứ tự đã được giao hàng,thay đổi việc này không làm thay đổi giá cả và chi phí.';
$_LANG['change_use_surplus'] = 'Chỉnh sửa %s ，đặt hàng,thêm vào việc sử dụng các khoản thanh toán tiền';
$_LANG['change_use_integral'] = 'Chỉnh sửa %s ，đặt hàng,thay đổi việc sử dụng các khoản thanh toán tiền';
$_LANG['return_order_surplus'] = 'Hoạt động trả lại không hợp lệ %s ,quay lại để bổ sung trả lại tiền';
$_LANG['return_order_integral'] = 'Hoạt động trả lại không hợp lệ %s ,quay lại để sử dụng trả lại điểm';
$_LANG['order_gift_integral'] = 'Số điểm cho quà tặng đặt hàng %s điểm';
$_LANG['return_order_gift_integral'] = 'Trả lại đơn đặt hàng cho %s điểm';
$_LANG['invoice_no_mall'] = '&nbsp;&nbsp;&nbsp;&nbsp;Divided a plurality of invoice No. by ","';

$_LANG['js_languages']['input_price'] = 'Tuỳ chỉnh giá';
$_LANG['js_languages']['pls_search_user'] = 'Xin vui lòng tìm kiếm và lựa chọn các thành viên';
$_LANG['js_languages']['confirm_drop'] = 'Bạn muốn xoá bỏ những hàng hóa?';
$_LANG['js_languages']['invalid_goods_number'] = 'Sai số';
$_LANG['js_languages']['pls_search_goods'] = 'Xin vui lòng tìm kiếm và lựa chọn hàng hóa';
$_LANG['js_languages']['pls_select_area'] = 'Xin vui lòng lựa chọn khu vực này';
$_LANG['js_languages']['pls_select_shipping'] = 'Xin vui lòng lựa chọn chế độ phân phối';
$_LANG['js_languages']['pls_select_payment'] = 'Xin vui lòng lựa chọn phương thức thanh toán';
$_LANG['js_languages']['pls_select_pack'] = 'Xin vui lòng lựa chọn gói';
$_LANG['js_languages']['pls_select_card'] = ' Xin vui lòng lựa chọn một thiệp';
$_LANG['js_languages']['pls_input_note'] = 'Vui lòng điền chú ý!';
$_LANG['js_languages']['pls_input_cancel'] = 'Vui lòng điền lí do hủy!';
$_LANG['js_languages']['pls_select_refund'] = 'Vui lòng chọn một cách thức hoàn lại tiền!';
$_LANG['js_languages']['pls_select_agency'] = 'Xin vui lòng lựa chọn chi nhánh!';
$_LANG['js_languages']['pls_select_other_agency'] = 'Xin chọn chi nhánh khác!';
$_LANG['js_languages']['loading'] = 'Đang tải ...';

/* Đặt hàng để hoạt động */
$_LANG['order_operate'] = 'Hoạt động đặt hàng:';
$_LANG['label_refund_amount'] = 'Số tiền trả lại:';
$_LANG['label_handle_refund'] = 'Phương thức hoàn lại tiền:';
$_LANG['label_refund_note'] = 'Mô tả thay đổi:';
$_LANG['return_user_money'] = 'Trả trực tiếp vào tài khoản';
$_LANG['create_user_account'] = 'Tạo tài khoản người dùng';
$_LANG['not_handle'] = 'Không chọn đối tượng';

$_LANG['order_refund'] = 'Số tiền hoàn lại: %s';
$_LANG['order_pay'] = 'Đơn đặt hàng: %s';

$_LANG['send_mail_fail'] = 'Gửi Email không thành công';

$_LANG['send_message'] = 'Gửi Thông Báo Cho Số Hàng Này';

/* 发货单操作 */
$_LANG['delivery_operate'] = 'Invoice Operation:';
$_LANG['delivery_sn_number'] = 'Serial number of Invoice:';
$_LANG['invoice_no_sms'] = 'Input Invoice NO.';

/* 发货单搜索 */
$_LANG['delivery_sn'] = 'Invoice';

/* 发货单状态 */
$_LANG['delivery_status'][0] = 'Normal';
$_LANG['delivery_status'][1] = 'Refunded';
$_LANG['delivery_status'][2] = 'Has shipped';

/* 发货单标签 */
$_LANG['label_delivery_status'] = 'Invoice Status';
$_LANG['label_delivery_time'] = 'Generation Time';
$_LANG['label_delivery_sn'] = 'Serial number of Invoice';
$_LANG['label_add_time'] = 'Order Time';
$_LANG['label_update_time'] = 'Shipped Time';
$_LANG['label_send_number'] = 'Shipped quantity';

/* 发货单提示 */
$_LANG['tips_delivery_del'] = 'Delete invoice success!';

/* 退货单操作 */
$_LANG['back_operate'] = 'Returned Note Operation：';

/* 退货单标签 */
$_LANG['return_time'] = 'Returned Time:';
$_LANG['label_return_time'] = 'Returned Time';

/* 退货单提示 */
$_LANG['tips_back_del'] = 'Return a single deletion of success!';

$_LANG['goods_num_err'] = 'Stocks, please re-select!';
?>
