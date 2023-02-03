<?php

/**
 * ECSHOP 动态内容函数库
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liuhui $
 * $Id: lib_insert.php 17063 2010-03-25 06:35:46Z liuhui $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

/**
 * 获得查询次数以及查询时间
 *
 * @access  public
 * @return  string
 */
function insert_query_info()
{
    if ($GLOBALS['db']->queryTime == '')
    {
        $query_time = 0;
    }
    else
    {
        if (PHP_VERSION >= '5.0.0')
        {
            $query_time = number_format(microtime(true) - $GLOBALS['db']->queryTime, 6);
        }
        else
        {
            list($now_usec, $now_sec)     = explode(' ', microtime());
            list($start_usec, $start_sec) = explode(' ', $GLOBALS['db']->queryTime);
            $query_time = number_format(($now_sec - $start_sec) + ($now_usec - $start_usec), 6);
        }
    }

    /* 内存占用情况 */
    if ($GLOBALS['_LANG']['memory_info'] && function_exists('memory_get_usage'))
    {
        $memory_usage = sprintf($GLOBALS['_LANG']['memory_info'], memory_get_usage() / 1048576);
    }
    else
    {
        $memory_usage = '';
    }

    /* 是否启用了 gzip */
    $gzip_enabled = gzip_enabled() ? $GLOBALS['_LANG']['gzip_enabled'] : $GLOBALS['_LANG']['gzip_disabled'];

    $online_count = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('sessions'));

    /* 加入触发cron代码 */
    $cron_method = empty($GLOBALS['_CFG']['cron_method']) ? '<img src="api/cron.php?t=' . gmtime() . '" alt="" style="width:0px;height:0px;" />' : '';

    return sprintf($GLOBALS['_LANG']['query_info'], $GLOBALS['db']->queryCount, $query_time, $online_count) . $gzip_enabled . $memory_usage . $cron_method;
}

/**
 * 调用浏览历史
 *
 * @access  public
 * @return  string
 */
function insert_history()
{
    $str = '';
    if (!empty($_COOKIE['ECS']['history']))
    {
        $where = db_create_in($_COOKIE['ECS']['history'], 'goods_id');
        $sql   = 'SELECT goods_id, goods_name, goods_thumb, shop_price FROM ' . $GLOBALS['ecs']->table('goods') .
                " WHERE $where AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0";
        $query = $GLOBALS['db']->query($sql);
        $res = array();
        while ($row = $GLOBALS['db']->fetch_array($query))
        {
            $goods['goods_id'] = $row['goods_id'];
            $goods['goods_name'] = $row['goods_name'];
            $goods['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $goods['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
            $goods['shop_price'] = price_format($row['shop_price']);
            $goods['url'] = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
            $str.='<ul class="clearfix"><li class="goodsimg"><a href="'.$goods['url'].'" target="_blank"><img src="'.$goods['goods_thumb'].'" alt="'.$goods['goods_name'].'" class="B_blue" /></a></li><li><a href="'.$goods['url'].'" target="_blank" title="'.$goods['goods_name'].'">'.$goods['short_name'].'</a><br />'.$GLOBALS['_LANG']['shop_price'].'<font class="f1">'.$goods['shop_price'].'</font><br /></li></ul>';
        }
        $str .= '<ul id="clear_history"><a onclick="clear_history()">' . $GLOBALS['_LANG']['clear_history'] . '</a></ul>';
    }
    return $str;
}

/**
 * 调用购物车信息
 *
 * @access  public
 * @return  string
 */
function insert_cart_info()
{
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = floatval($row['amount']);
    }
    else
    {
        $number = 0;
        $amount = 0;
    }

    $str = sprintf($GLOBALS['_LANG']['cart_info'], $number, price_format($amount, false));

    return '<a href="flow.php" title="' . $GLOBALS['_LANG']['view_cart'] . '">' . $str . '</a>';
}

/**
 * 调用指定的广告位的广告
 *
 * @access  public
 * @param   integer $id     广告位ID
 * @param   integer $num    广告数量
 * @return  string
 */
function insert_ads($arr)
{
    static $static_res = NULL;

    $time = gmtime();
    if (!empty($arr['num']) && $arr['num'] != 1)
    {
        $sql  = 'SELECT a.ad_id, a.position_id, a.media_type, a.ad_link, a.ad_code, a.ad_name, p.ad_width, ' .
                    'p.ad_height, p.position_style, RAND() AS rnd ' .
                'FROM ' . $GLOBALS['ecs']->table('ad') . ' AS a '.
                'LEFT JOIN ' . $GLOBALS['ecs']->table('ad_position') . ' AS p ON a.position_id = p.position_id ' .
                "WHERE enabled = 1 AND start_time <= '" . $time . "' AND end_time >= '" . $time . "' ".
                    "AND a.position_id = '" . $arr['id'] . "' " .
                'ORDER BY rnd LIMIT ' . $arr['num'];
        $res = $GLOBALS['db']->GetAll($sql);
    }
    else
    {
        if ($static_res[$arr['id']] === NULL)
        {
            $sql  = 'SELECT a.ad_id, a.position_id, a.media_type, a.ad_link, a.ad_code, a.ad_name, p.ad_width, '.
                        'p.ad_height, p.position_style, RAND() AS rnd ' .
                    'FROM ' . $GLOBALS['ecs']->table('ad') . ' AS a '.
                    'LEFT JOIN ' . $GLOBALS['ecs']->table('ad_position') . ' AS p ON a.position_id = p.position_id ' .
                    "WHERE enabled = 1 AND a.position_id = '" . $arr['id'] .
                        "' AND start_time <= '" . $time . "' AND end_time >= '" . $time . "' " .
                    'ORDER BY rnd LIMIT 1';
            $static_res[$arr['id']] = $GLOBALS['db']->GetAll($sql);
        }
        $res = $static_res[$arr['id']];
    }
    $ads = array();
    $position_style = '';

    foreach ($res AS $row)
    {
        if ($row['position_id'] != $arr['id'])
        {
            continue;
        }
        $position_style = $row['position_style'];
        switch ($row['media_type'])
        {
            case 0: // 图片广告
                $src = (strpos($row['ad_code'], 'http://') === false && strpos($row['ad_code'], 'https://') === false) ?
                        DATA_DIR . "/afficheimg/$row[ad_code]" : $row['ad_code'];
                $ads[] = "<a href='affiche.php?ad_id=$row[ad_id]&amp;uri=" .urlencode($row["ad_link"]). "'
                target='_blank'><img src='$src' width='" .$row['ad_width']. "' height='$row[ad_height]'
                border='0' /></a>";
                break;
            case 1: // Flash
                $src = (strpos($row['ad_code'], 'http://') === false && strpos($row['ad_code'], 'https://') === false) ?
                        DATA_DIR . "/afficheimg/$row[ad_code]" : $row['ad_code'];
                $ads[] = "<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" " .
                         "codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0\"  " .
                           "width='$row[ad_width]' height='$row[ad_height]'>
                           <param name='movie' value='$src'>
                           <param name='quality' value='high'>
                           <embed src='$src' quality='high'
                           pluginspage='http://www.macromedia.com/go/getflashplayer'
                           type='application/x-shockwave-flash' width='$row[ad_width]'
                           height='$row[ad_height]'></embed>
                         </object>";
                break;
            case 2: // CODE
                $ads[] = $row['ad_code'];
                break;
            case 3: // TEXT
                $ads[] = "<a href='affiche.php?ad_id=$row[ad_id]&amp;uri=" .urlencode($row["ad_link"]). "'
                target='_blank'>" .htmlspecialchars($row['ad_code']). '</a>';
                break;
        }
    }
    $position_style = 'str:' . $position_style;

    $need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

    $GLOBALS['smarty']->assign('ads', $ads);
    $val = $GLOBALS['smarty']->fetch($position_style);

    $GLOBALS['smarty']->caching = $need_cache;

    return $val;
}

/**
 * 调用会员信息
 *
 * @access  public
 * @return  string
 */
function insert_member_info()
{
    $need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

    if ($_SESSION['user_id'] > 0)
    {
        $GLOBALS['smarty']->assign('user_info', get_user_info());
    }
    else
    {
        if (!empty($_COOKIE['ECS']['username']))
        {
            $GLOBALS['smarty']->assign('ecs_username', stripslashes($_COOKIE['ECS']['username']));
        }
        $captcha = intval($GLOBALS['_CFG']['captcha']);
        if (($captcha & CAPTCHA_LOGIN) && (!($captcha & CAPTCHA_LOGIN_FAIL) || (($captcha & CAPTCHA_LOGIN_FAIL) && $_SESSION['login_fail'] > 2)) && gd_version() > 0)
        {
            $GLOBALS['smarty']->assign('enabled_captcha', 1);
            $GLOBALS['smarty']->assign('rand', mt_rand());
        }
    }
    $output = $GLOBALS['smarty']->fetch('library/member_info.lbi');

    $GLOBALS['smarty']->caching = $need_cache;

    return $output;
}

/**
 * 调用评论信息
 *
 * @access  public
 * @return  string
 */
function insert_comments($arr)
{
    $need_cache = $GLOBALS['smarty']->caching;
    $need_compile = $GLOBALS['smarty']->force_compile;

    $GLOBALS['smarty']->caching = false;
    $GLOBALS['smarty']->force_compile = true;

    /* 验证码相关设置 */
    if ((intval($GLOBALS['_CFG']['captcha']) & CAPTCHA_COMMENT) && gd_version() > 0)
    {
        $GLOBALS['smarty']->assign('enabled_captcha', 1);
        $GLOBALS['smarty']->assign('rand', mt_rand());
    }
    $GLOBALS['smarty']->assign('username',     stripslashes($_SESSION['user_name']));
    $GLOBALS['smarty']->assign('email',        $_SESSION['email']);
    $GLOBALS['smarty']->assign('comment_type', $arr['type']);
    $GLOBALS['smarty']->assign('id',           $arr['id']);
    $cmt = assign_comment($arr['id'],          $arr['type']);
    $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    $GLOBALS['smarty']->assign('pager',        $cmt['pager']);


    $val = $GLOBALS['smarty']->fetch('library/comments_list.lbi');

    $GLOBALS['smarty']->caching = $need_cache;
    $GLOBALS['smarty']->force_compile = $need_compile;

    return $val;
}


/**
 * 调用商品购买记录
 *
 * @access  public
 * @return  string
 */
function insert_bought_notes($arr)
{
    $need_cache = $GLOBALS['smarty']->caching;
    $need_compile = $GLOBALS['smarty']->force_compile;

    $GLOBALS['smarty']->caching = false;
    $GLOBALS['smarty']->force_compile = true;

    /* 商品购买记录 */
    $sql = 'SELECT u.user_name, og.goods_number, oi.add_time, IF(oi.order_status IN (2, 3, 4), 0, 1) AS order_status ' .
           'FROM ' . $GLOBALS['ecs']->table('order_info') . ' AS oi LEFT JOIN ' . $GLOBALS['ecs']->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $GLOBALS['ecs']->table('order_goods') . ' AS og ' .
           'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $arr['id'] . ' ORDER BY oi.add_time DESC LIMIT 5';
    $bought_notes = $GLOBALS['db']->getAll($sql);

    foreach ($bought_notes as $key => $val)
    {
        $bought_notes[$key]['add_time'] = local_date("Y-m-d G:i:s", $val['add_time']);
    }

    $sql = 'SELECT count(*) ' .
           'FROM ' . $GLOBALS['ecs']->table('order_info') . ' AS oi LEFT JOIN ' . $GLOBALS['ecs']->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $GLOBALS['ecs']->table('order_goods') . ' AS og ' .
           'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $arr['id'];
    $count = $GLOBALS['db']->getOne($sql);


    /* 商品购买记录分页样式 */
    $pager = array();
    $pager['page']         = $page = 1;
    $pager['size']         = $size = 5;
    $pager['record_count'] = $count;
    $pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
    $pager['page_first']   = "javascript:gotoBuyPage(1,$arr[id])";
    $pager['page_prev']    = $page > 1 ? "javascript:gotoBuyPage(" .($page-1). ",$arr[id])" : 'javascript:;';
    $pager['page_next']    = $page < $page_count ? 'javascript:gotoBuyPage(' .($page + 1) . ",$arr[id])" : 'javascript:;';
    $pager['page_last']    = $page < $page_count ? 'javascript:gotoBuyPage(' .$page_count. ",$arr[id])"  : 'javascript:;';

    $GLOBALS['smarty']->assign('notes', $bought_notes);
    $GLOBALS['smarty']->assign('pager', $pager);


    $val= $GLOBALS['smarty']->fetch('library/bought_notes.lbi');

    $GLOBALS['smarty']->caching = $need_cache;
    $GLOBALS['smarty']->force_compile = $need_compile;

    return $val;
}


/**
 * 调用在线调查信息
 *
 * @access  public
 * @return  string
 */
function insert_vote()
{
    $vote = get_vote();
    if (!empty($vote))
    {
        $GLOBALS['smarty']->assign('vote_id',     $vote['id']);
        $GLOBALS['smarty']->assign('vote',        $vote['content']);
    }
    $val = $GLOBALS['smarty']->fetch('library/vote.lbi');

    return $val;
}



function insert_thong_ke()
{
$truc_tuyenss=$GLOBALS['db']->getOne("SELECT COUNT(DISTINCT ip) FROM " . $GLOBALS['ecs']->table('sessions'));
$tt='';
$counter_expire = 86400;
$counter_filename = "counter.txt";
if (file_exists($counter_filename))
{
$ignore = false;
$current_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? addslashes(trim($_SERVER['HTTP_USER_AGENT'])) : "no agent";
$current_time = time();
$current_ip = $_SERVER['REMOTE_ADDR'];

$c_file = array();
$handle = fopen($counter_filename, "r");

if ($handle)
{
while (!feof($handle))
{
$line = trim(fgets($handle, 4096));
if ($line != "")
$c_file[] = $line;
}
fclose ($handle);
}
else
$ignore = true;

if (substr_count($current_agent, "bot") > 0)
$ignore = true;
for ($i = 1; $i < sizeof($c_file); $i++)
{
list($counter_ip, $counter_time) = explode("||", $c_file[$i]);
$counter_time = trim($counter_time);

if ($counter_ip == $current_ip && $current_time-$counter_expire < $counter_time)
{
$ignore = true;
break;
}
}

if ($ignore == false)
{
if (sizeof($c_file) == 0)
{
$add_line1 = date("z") . ":1||" . (date("z")-1) . ":0||" . date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time . "\n";
$add_line2 = $current_ip . "||" . $current_time . "\n";

$fp = fopen($counter_filename,"w+");
if ($fp)
{
flock($fp, LOCK_EX);
fwrite($fp, $add_line1);
fwrite($fp, $add_line2);
flock($fp, LOCK_UN);
fclose($fp);
}

$day = $yesterday = $week = $month = $year = $all = $record = 1;
$record_time = $current_time;
$online = 1;
}
else
{

list($day_arr, $yesterday_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);

$day_data = explode(":", $day_arr);
$yesterday_data = explode(":", $yesterday_arr);

// yesterday
$yesterday = $yesterday_data[1];
if ($day_data[0] == (date("z")-1))
{
$yesterday = $day_data[1];
}
else
{
if ($yesterday_data[0] != (date("z")-1))
{
$yesterday = 0;
}
}

// day
$day = $day_data[1];
if ($day_data[0] == date("z")) $day++; else $day = 1;

// week
$week_data = explode(":", $week_arr);
$week = $week_data[1];
if ($week_data[0] == date("W")) $week++; else $week = 1;

// month
$month_data = explode(":", $month_arr);
$month = $month_data[1];
if ($month_data[0] == date("n")) $month++; else $month = 1;

// year
$year_data = explode(":", $year_arr);
$year = $year_data[1];
if ($year_data[0] == date("Y")) $year++; else $year = 1;

// all
$all++;

$record_time = trim($record_time);
if ($day > $record)
{
$record = $day;
$record_time = $current_time;
}

$online = 1;

$fp = fopen($counter_filename,"w+");
if ($fp)
{
flock($fp, LOCK_EX);
$add_line1 = date("z") . ":" . $day . "||" . (date("z")-1) . ":" . $yesterday . "||" . date("W") . ":" . $week . "||" . date("n") . ":" . $month . "||" . date("Y") . ":" . $year . "||" . $all . "||" . $record . "||" . $record_time . "\n";
fwrite($fp, $add_line1);

for ($i = 1; $i < sizeof($c_file); $i++)
{
list($counter_ip, $counter_time) = explode("||", $c_file[$i]);

if ($current_time-$counter_expire < $counter_time)
{
$counter_time = trim($counter_time);
$add_line = $counter_ip . "||" . $counter_time . "\n";
fwrite($fp, $add_line);
$online++;
}
}
$add_line = $current_ip . "||" . $current_time . "\n";
fwrite($fp, $add_line);
flock($fp, LOCK_UN);
fclose($fp);
}
}
}
else
{
// nur zum anzeigen lesen
if (sizeof($c_file) > 0)
list($day_arr, $yesterday_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);
else
list($day_arr, $yesterday_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", date("z") . ":1||" . (date("z")-1) . ":0||" . date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time);

// day
$day_data = explode(":", $day_arr);
$day = $day_data[1];

// yesterday
$yesterday_data = explode(":", $yesterday_arr);
$yesterday = $yesterday_data[1];

// week
$week_data = explode(":", $week_arr);
$week = $week_data[1];

// month
$month_data = explode(":", $month_arr);
$month = $month_data[1];

// year
$year_data = explode(":", $year_arr);
$year = $year_data[1];

$record_time = trim($record_time);

$online = sizeof($c_file) - 1;
}
$truc_tuyenss = str_pad($truc_tuyenss, 3, "0", STR_PAD_LEFT );
$online = str_pad($online, 3, "0", STR_PAD_LEFT );
$day = str_pad($day, 4, "0", STR_PAD_LEFT );
$yesterday = str_pad($yesterday, 4, "0", STR_PAD_LEFT );
$week = str_pad($week, 5, "0", STR_PAD_LEFT );
$month = str_pad($month, 5, "0", STR_PAD_LEFT );
$year = str_pad($year, 5, "0", STR_PAD_LEFT );
$all = str_pad($year, 8, "0", STR_PAD_LEFT );
for($i=0;$i<3;$i++)
{
$j=intval(substr($truc_tuyenss,$i,1));
$tt .='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}

for($i=0;$i<3;$i++)
{
$j=intval(substr($online,$i,1));
$truc_tuyen .='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}
for($i=0;$i<4;$i++)
{
$j=intval(substr($day,$i,1));
$hom_nay .='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}
for($i=0;$i<4;$i++)
{
$j=intval(substr($yesterday,$i,1));
$hom_qua .='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}
for($i=0;$i<5;$i++)
{
$j=intval(substr($week,$i,1));
$tuan_nay .='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}
for($i=0;$i<5;$i++)
{
$j=intval(substr($month,$i,1));
$thang_nay.='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}
for($i=0;$i<5;$i++)
{
$j=intval(substr($year,$i,1));
$nam_nay .='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}
for($i=0;$i<8;$i++)
{
$j=intval(substr($all,$i,1));
$tong_cong .='<img src="thong_ke/bo_dem/'.$j.'.png" align="absmiddle" width="12">';
}
}
$content ='<table width=100% style="font-size:11px;"';
$content.='<tr><td align="left" ><b>Đang online:</b></td><td align="right"> '.$tt.'</td></tr>';
$content.='<tr><td align="left" ><b>Ngày hômm nay:</b></td><td align="right"> '.$hom_nay.'</td></tr>';
$content.='<tr><td align="left" ><b>Ngày hôm qua:</b></td><td align="right"> '.$hom_qua.'</td></tr>';
$content.='<tr><td align="left" ><b>Trong tuần:</b></td><td align="right"> '.$tuan_nay.'</td></tr>';
$content.='<tr><td align="left" ><b>Trong tháng:</b></td><td align="right"> '.$thang_nay.'</td></tr>';
$content.='<tr><td align="left" ><b>Trong năm:</b></td><td align="right"> '.$nam_nay.'</td></tr>';
$content.='<tr><td colspan="2" align="center"><b>Tổng số luợt truy cập:</b></td></tr>';
$content.='<tr><td colspan="2" align="center"><b>'.$tong_cong.'</b></td></tr>';
$content.='</table>';
return $content;
}  



?>