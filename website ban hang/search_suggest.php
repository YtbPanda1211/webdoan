<?php

/**
 www.mocua.com
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

//Xác định xem có một yêu cầu ajax
$keywords   = !empty($_REQUEST['keywords'])   ? trim($_REQUEST['keywords'])     : '';
include_once('includes/cls_json.php');
$json = new JSON;
$result   = array('error' => 0, 'content' => '');
if($keywords!="")
{
	$sql = "SELECT distinct keyword  FROM " . $ecs->table('keywords') ." where searchengine='ecshop' and keyword LIKE'%".mysql_like_quote($keywords)."%' order by count DESC";
  $res = $db->selectLimit($sql,10);
  $arr = array();
  while ($row = $db->FetchRow($res))
  {
  		$count=$db->getOne("select count(*) from " . $ecs->table('goods') ." where goods_name LIKE '%".mysql_like_quote($row['keyword'])."%' AND is_on_sale = 1 AND is_delete = 0");
  		$result['content']=$result['content']."<li onmouseout='javascript:suggestOut(this);' onmouseover='javascript:suggestOver(this);' onclick='javascript:form_submit(this);'><span class='suggest-key'>".$row['keyword']."</span><span class='suggest-result'>".$count."&nbsp;Tìm&nbsp;kiếm</span></li>";
  }

  if($result['content']!="")$result['content']="<ol>".$result['content']."</ol>";
}
die($json->encode($result));
?>