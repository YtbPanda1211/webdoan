<?php

$_LANG['select_method'] = 'Chọn cách thức：';
$_LANG['by_cat'] = 'Dựa trên phân loại hàng hoá, thương hiệu';
$_LANG['by_sn'] = 'Theo khoản Thương mại';
$_LANG['select_cat'] = 'Chọn chuyên mục hàng hóa:';
$_LANG['select_brand'] = 'Chọn thương hiệu:';
$_LANG['goods_list'] = 'Danh sách sản phẩm:';
$_LANG['src_list'] = 'Danh sách sẽ được lựa chọn:';
$_LANG['dest_list'] = 'Danh sách lựa chọn:';
$_LANG['input_sn'] = 'nhập vào số bài viết:<br />(một trong mỗi dòng)';
$_LANG['edit_method'] = 'Sửa đổi chế độ:';
$_LANG['edit_each'] = 'Bằng cách chỉnh sửa';
$_LANG['edit_all'] = 'Biên soạn thống nhất(Tất cả)';
$_LANG['go_edit'] = 'Truy cập để chỉnh sửa';

$_LANG['notice_edit'] = 'Thành viên Thành viên -1 là thành viên giảm giá,dựa vào các cơ sở để giảm giá';

$_LANG['goods_class'] = 'Chuyên mục sản phẩm';
$_LANG['g_class'][G_REAL] = 'Hàng hóa Vật lí';
$_LANG['g_class'][G_CARD] = 'Thẻ ảo';

$_LANG['goods_sn'] = 'Kí hiệu hàng hóa';
$_LANG['goods_name'] = 'Tên';
$_LANG['market_price'] = 'Giá thị trường';
$_LANG['shop_price'] = 'Giá của chúng tôi';
$_LANG['integral'] = 'Số điểm để mua';
$_LANG['give_integral'] = 'Điểm khuyến mại';
$_LANG['goods_number'] = 'Hàng tồn kho';
$_LANG['brand'] = 'Nhãn hiệu';

$_LANG['batch_edit_ok'] = 'Thay đổi thành công';

$_LANG['goods_cat'] = 'Mục hàng hóa：';
$_LANG['csv_file'] = 'FILE CSV：';
$_LANG['notice_file'] = '(tập tin CSV tải lên một số,không nên vượt quá 1000. Kích cỡ tệp CSV, không nên vượt quá 500k.)';
$_LANG['file_charset'] = 'Mã hóa tập tin:';
$_LANG['download_file'] = 'Tải xuống tập tin CSV dung lượng（%s）';
$_LANG['use_help'] = 'Cách sử dụng:' .
        '<ol>' .
          '<li>Phù hợp với người sử dụng, tải về các ngôn ngữ tương ứng của csv, ví dụ: Các tệp tin của TIẾNG VIỆT hay tiếng khác...;</li>' .
          '<li>Để vào csv, bạn có thể sử dụng Excel hoặc một trình soạn thảo văn bản mở csv;<br />' .
              'Hãy điền vào trong các số là 0 hoặc 1，0 thay mặt" Không ", 1 đại diện" là ";<br />' .
              'Hàng hoá và các hình nhỏ, hình ảnh Xin vui lòng điền vào những hình ảnh với đường dẫn của các tên tập tin, trong đó có đường dẫn liên quan đến [gốc] / hình ảnh /đường dẫn, chẳng hạn như hình ảnh đường dẫn là [gốc] / images/200610/abc.jpg, miễn là có thể điền vào 200610/abc.jpg;<br />' .
          '<li>Hình sẽ được điền vào hàng hóa, hình ảnh tải lên nó vào thư mục tương ứng hàng hóa, ví dụ: [thư mục gốc] / images/200610 /; <br />'.
              '<font style="color:#FE596A;">Đầu tiên tải lên hình ảnh của hàng hóa và các csv và tải lên các hình nhỏ, hoặc hình ảnh có thể không được xử lý.</font></li>' .
          '<li>Chọn phân loại hàng hóa cũng như mã hoá các tập tin tải lên, tải lên csv</li>' .
        '</ol>';

$_LANG['js_languages']['please_select_goods'] = 'Xin vui lòng lựa chọn hàng hoá của bạn';
$_LANG['js_languages']['please_input_sn'] = 'Xin vui lòng nhập số bài viết';
$_LANG['js_languages']['goods_cat_not_leaf'] = 'Xin vui lòng lựa chọn một phân loại ở phần cuối của lớp';
$_LANG['js_languages']['please_select_cat'] = 'Xin vui lòng lựa chọn thể loại';
$_LANG['js_languages']['please_upload_file'] = 'Xin vui lòng tải lên số lượng lớn csv của bạn';

// Các lĩnh vực hàng hóa đăng tải số lượng lớn 
$_LANG['upload_goods']['goods_name'] = 'Tên hàng hóa';
$_LANG['upload_goods']['goods_sn'] = 'Kí hiệu';
$_LANG['upload_goods']['brand_name'] = 'Tên thương hiệu';   // cần phải chuyển đổi brand_id
$_LANG['upload_goods']['market_price'] = 'Giá thị trường';
$_LANG['upload_goods']['shop_price'] = 'Giá bán ở SHOP';
$_LANG['upload_goods']['integral'] = 'Số điểm để mua';
$_LANG['upload_goods']['original_img'] = 'Hỉnh ảnh ban đầu';
$_LANG['upload_goods']['goods_img'] = 'Ảnh hàng hóa';
$_LANG['upload_goods']['goods_thumb'] = 'Thumb';
$_LANG['upload_goods']['keywords'] = 'Từ khóa';
$_LANG['upload_goods']['goods_brief'] = 'Mô tả ngắn gọn';
$_LANG['upload_goods']['goods_desc'] = 'Mô tả chi tiết';
$_LANG['upload_goods']['goods_weight'] = 'Trọng lượng (kg)';
$_LANG['upload_goods']['goods_number'] = 'Số lượng hàng';
$_LANG['upload_goods']['warn_number'] = 'Số lượng cảnh báo(Giới hạn số lượng)';
$_LANG['upload_goods']['is_best'] = 'Tốt nhất';
$_LANG['upload_goods']['is_new'] = 'Mới';
$_LANG['upload_goods']['is_hot'] = 'HOT';
$_LANG['upload_goods']['is_on_sale'] = 'Hàng đã bán';
$_LANG['upload_goods']['is_alone_sale'] = 'Hàng còn lại';
$_LANG['upload_goods']['is_real'] = 'Hàng thật';

$_LANG['batch_upload_ok'] = 'Số lượng lớn >> Tải lên thành công';
$_LANG['goods_upload_confirm'] = 'Xác nhận tải lên';
?>