<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themes/3cshop/js/action.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="pageWarp clearfix">
 <div id="categorybox" class="pageLeft fl">
  <?php echo $this->fetch('library/category_tree2.lbi'); ?>
  </div>
 <div class="pageRight fr">
 <?php echo $this->fetch('library/cart.lbi'); ?>
 </div>
</div>
<div class="block">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
</div>
<div class="block clearfix blank">
 <div class="goodInfoImg fl">
  	 <div id="focuscont">
		  <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['pic'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pic']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['pic']['iteration']++;
?>
		  <div class="focuscont" id="focuscont<?php echo $this->_foreach['pic']['iteration']; ?>"  style="display:none">
		   <p><a href="gallery.php?id=<?php echo $this->_var['id']; ?>&amp;img=<?php echo $this->_var['picture']['img_id']; ?>" target="_blank"><img src="<?php echo $this->_var['picture']['img_url']; ?>" /></a></p>
		  </div>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	   </div>
		 <ul id="focustab" class="clearfix">
		 <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['pic'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pic']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['pic']['iteration']++;
?>
			<li><a href="#go" target="_blank" name="<?php echo $this->_foreach['pic']['iteration']; ?>"><img src="<?php echo $this->_var['picture']['img_url']; ?>" /></a></li>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 </ul>
	   <script>initAutoFocus();</script>
		 <div class="prev">
		  <?php if ($this->_var['prev_good']): ?>
        <a href="<?php echo $this->_var['prev_good']['url']; ?>" class="fl bnt_number4">Trước</a>
      <?php endif; ?>
      <?php if ($this->_var['next_good']): ?>
        <a href="<?php echo $this->_var['next_good']['url']; ?>" class="fl bnt_number4">Sau</a>
      <?php endif; ?>
			<?php if ($this->_var['affiliate']['on']): ?>
			<a href="user.php?act=affiliate&goodsid=<?php echo $this->_var['goods']['goods_id']; ?>" class="fr bnt_number6">Các liên kết</a>
			<?php endif; ?>
		 </div>
 </div>
 <div class="goodInfoTxt fr">
  <h1 class="goodsName">
	<?php echo $this->_var['goods']['goods_style_name']; ?>
	<?php if ($this->_var['goods']['is_shipping']): ?>
	<font class="a f14b">(<?php echo $this->_var['lang']['goods_free_shipping']; ?>)</font>
	<?php endif; ?>
	</h1>
	<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
        <h2 class="title">Tính Năng Nổi Bật</h2>
        <div class="vst_custom">
			<?php if ($this->_var['promotion']): ?>
			<div class="Goodpromotion">
			<font id="fontcolor"><?php echo $this->_var['lang']['activity']; ?></font><br />
			<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			<?php if ($this->_var['item']['type'] == "snatch"): ?>
			<a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
			<?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
			<a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
			<?php elseif ($this->_var['item']['type'] == "auction"): ?>
			<a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>">[<?php echo $this->_var['lang']['auction']; ?>]</a>
			<?php elseif ($this->_var['item']['type'] == "favourable"): ?>
			<a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
			<?php endif; ?>
			<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"><?php echo $this->_var['item']['act_name']; ?></a><br />
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<script>setInterval("colorStyle('fontcolor','a','b')",300);</script>
			</div>
			<?php endif; ?>
			
            <div class="vst_price">
           	<font class="price" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></font><br />
            </div>
            
			<?php if ($this->_var['cfg']['show_goodssn']): ?>
			<p style="display: none;"><?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?></p>
			<?php endif; ?>
			
			<?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
			<?php if ($this->_var['goods']['goods_number'] == 0): ?>
			<p><?php echo $this->_var['lang']['goods_number']; ?><img src="themes/3cshop/images/wuhuo.gif" /></p>
			<?php else: ?>
			<p class="instock"><?php echo $this->_var['lang']['goods_number']; ?>  <span > <img src="themes/3cshop/images/in_stock.png" /> Còn hàng </span></p>
			<?php endif; ?>
			<?php endif; ?>
			
            <div class="bref">
                <?php echo $this->_var['goods']['goods_brief']; ?>
            </div>
            <div class="sell_note">
                <?php echo $this->_var['goods']['seller_note']; ?>
            </div>
            <div class="order_info">
                
            </div>
            
			<?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
			<?php echo $this->_var['lang']['goods_brand']; ?><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><ul><?php echo $this->_var['goods']['goods_brand']; ?></ul></a><br />
			<?php endif; ?>
			
			<?php if ($this->_var['cfg']['show_goodsweight']): ?>
			<?php echo $this->_var['lang']['goods_weight']; ?><?php echo $this->_var['goods']['goods_weight']; ?><br />
			<?php endif; ?>
			
			<?php if ($this->_var['cfg']['show_addtime']): ?>
			<p><?php echo $this->_var['lang']['add_time']; ?><?php echo $this->_var['goods']['add_time']; ?></p>
			<?php endif; ?>
			
			
			<p><?php echo $this->_var['lang']['goods_click_count']; ?>:<?php echo $this->_var['goods']['click_count']; ?></p>
			<p><?php echo $this->_var['lang']['goods_rank']; ?> <img src="themes/3cshop/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" /></p>
			</div>
			
			<div class="Goodpromotion Goodpromotion2">
			<?php if ($this->_var['cfg']['show_marketprice']): ?>
			<?php echo $this->_var['lang']['market_price']; ?><span class="market"><?php echo $this->_var['goods']['market_price']; ?></span><br />
			<?php endif; ?>
			<?php echo $this->_var['lang']['shop_price']; ?><font class="price" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></font><br />
			<?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
			<?php echo $this->_var['rank_price']['rank_name']; ?>:<font class="price" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font><br />
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
			<?php echo $this->_var['lang']['promote_price']; ?><font class="price"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
			<?php endif; ?>
			
			<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
			<?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
			<?php echo $this->_var['lang']['residual_time']; ?> <font class="a" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font><br />
			<?php endif; ?>
			
			<?php if ($this->_var['goods']['give_integral'] > 0): ?>
			<?php echo $this->_var['lang']['goods_give_integral']; ?><font class="price"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font><br />
			<?php endif; ?>
			<?php if ($this->_var['cfg']['use_integral']): ?>
			<?php echo $this->_var['lang']['goods_integral']; ?><font class="price"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></font><br />
			<?php endif; ?>
			<?php if ($this->_var['goods']['bonus_money']): ?>
			<?php echo $this->_var['lang']['goods_bonus']; ?><font class="price"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
			<?php endif; ?>
			</div>
			<?php if ($this->_var['volume_price_list']): ?>
		 <font class="a"><?php echo $this->_var['lang']['volume_price']; ?>:</font><br />
			<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#cccccc" class="blank">
				<tr>
				<td align="center" bgcolor="#FFFFFF" class="f14b"><?php echo $this->_var['lang']['number_to']; ?></td>
				<td align="center" bgcolor="#FFFFFF" class="f14b"><?php echo $this->_var['lang']['preferences_price']; ?></td>
				</tr>
				<?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
				<tr>
				<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
				<td align="center" bgcolor="#FFFFFF" class="price"><?php echo $this->_var['price_list']['format_price']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</table>
		 <?php endif; ?>
		
			
			
			<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
			<?php echo $this->_var['spec']['name']; ?>:
			
			<?php if ($this->_var['spec']['attr_type'] == 1): ?>
			<?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
			<br />
			<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
			<label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
			<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onClick="changePrice()" />
			<?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
			<?php else: ?>
			<select name="spec_<?php echo $this->_var['spec_key']; ?>" onChange="changePrice()" class="InputBorder">
				<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
				<option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</select>
			<br />
			<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
			<?php endif; ?>
			<?php else: ?>
			<br />
			<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
			<label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
			<input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onClick="changePrice()" />
			<?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
			<br />
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
			
			<?php echo $this->_var['lang']['number']; ?>:
			<input name="number" type="text" id="number" value="1" size="4" onBlur="changePrice()" class="InputBorder"/><br />
			<div class="Goodpromotion" style="margin-bottom:10px;">
			<?php echo $this->_var['lang']['amount']; ?>:<span id="ECS_GOODS_AMOUNT" class="price"></span><br />
			</div>
			<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/3cshop/images/bnt_buy.gif" /></a> 
			<a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/3cshop/images/bnt_colle.gif" /></a>
		</form>
 </div>
</div>

<div class="block clearfix blank">
 <div id="attribuet" class="attribuet fl">
   <div class="tagTit" id="com_b">
		<a  class="L  g_detail_tab g_tab_active" title="g_dettail_desc"><span ></span><span class="R"></span><?php echo $this->_var['lang']['feed_goods_desc']; ?></a>
		<a class="g_detail_tab" title="g_detail_properties"><span class="L"></span><span class="R"></span><?php echo $this->_var['lang']['goods_attr']; ?></a>
		<a class="g_detail_tab" title="goods_comment"><span class="L"></span><span class="R"></span>Bình luận</a>
		<!-- a class="g_detail_tab" title="goods_related"><span class="L"></span><span class="R"></span>Sản phẩm liên quan </a -->
		<a class="g_detail_tab" title="g_detail_tags"><span class="L"></span><span class="R"></span><?php echo $this->_var['lang']['goods_tag']; ?></a>
		<?php if ($this->_var['package_goods_list']): ?>
		<a class="g_detail_tab" style="display:none;"><span class="L"></span><span class="R"></span><font title="package"><?php echo $this->_var['lang']['remark_package']; ?></font></a>
		<script>setInterval("colorStyle('package','a','b')",300);</script>
		<?php endif; ?>
		<div class="opendot fr" id="openLine"></div>
	 </div>
	 <div class="tagcontent blank" id="com_v"></div>
	 <div id="com_h">
	<div id="g_dettail_desc" class="g_tab_content">
        <?php echo $this->_var['goods']['goods_desc']; ?>
    </div>
	<div id="g_detail_properties" class="g_tab_content" >
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <tr>
          <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </table>
     </div>
	<div id="g_detail_tags" class="g_tab_content">
        <?php echo $this->fetch('library/goods_tags.lbi'); ?>
    </div>
			 <?php if ($this->_var['package_goods_list']): ?>
        <div id="g_detail_packed_goods_list" style="display:none">
        <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?>
        <strong><?php echo $this->_var['package_goods']['act_name']; ?></strong><br />
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dcdcdc">
        <tr>
          <td bgcolor="#fafafa">
          <?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
          <a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods_list']['goods_name']; ?></a> &nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?><br />
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </td>
          <td bgcolor="#fafafa">
          <?php echo $this->_var['lang']['old_price']; ?><font class="market"><?php echo $this->_var['package_goods']['subtotal']; ?></font><br />
          <?php echo $this->_var['lang']['package_price']; ?><font class="price"><?php echo $this->_var['package_goods']['package_price']; ?></font><br />
          <?php echo $this->_var['lang']['then_old_price']; ?><font class="price"><?php echo $this->_var['package_goods']['saving']; ?></font><br />
          </td>
          <td bgcolor="#fafafa" align="center">
          <a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)"><img src="themes/3cshop/images/small_cart.gif" alt="<?php echo $this->_var['lang']['button_buy']; ?>" /></a>
          </td>
        </tr>
        </table>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
       <?php endif; ?>
	   
	    <div id="goods_comment" class="g_tab_content">
		<?php echo $this->fetch('library/comments.lbi'); ?>
		 </div>
		
		
		
 
	   
	 </div>
	 <script type="text/javascript">//reg("com");</script>	 
 </div>
 <div id="hostrybox" class="hostrybox clearfix fr">
	<div id="openShow" class="openShow fr">
	<?php echo $this->fetch('library/goods_article.lbi'); ?>
	<?php echo $this->fetch('library/history.lbi'); ?>
    
    <div id="goods_related" class="g_tab_content2">
		<?php echo $this->fetch('library/goods_related.lbi'); ?>
	 </div>
         
         
	</div>
 </div>
</div>
<script type="text/javascript">
/*
var attribuet = $("attribuet");
var hostrybox = $("hostrybox");
var openShow = $("openShow");
var openLine = $("openLine");
attribuet.style.cssText = "width:1000px;";
openShow.style.cssText = "width:0px; height:0px";
openLine.onclick = function(){
 var openShow_W = openShow.clientWidth;
 if(openShow_W ==0)
 {
 openShow.style.cssText = "width:190px;";
 attribuet.style.cssText = "width:800px;";
 hostrybox.style.cssText = "width:200px;";
 openLine.className = "closedot fr";
 }else{
 attribuet.style.cssText = "width:1000px;";
 openShow.style.cssText = "width:0px; height:0px";
 openLine.className = "opendot fr";
 }
}
openLine.onmouseover = function(){
  var openShow_W = openShow.clientWidth;
  if(openShow_W ==0){
	openLine.className = "opendot_1 fr";
	}else{
	openLine.className = "closedot_1 fr";
	}
}
openLine.onmouseout = function(){
  var openShow_W = openShow.clientWidth;
  if(openShow_W ==0){
	openLine.className = "opendot fr";
	}else{
	openLine.className = "closedot fr";
	}
}
*/
</script>
<div class="block blank">

<div id="goods_fittings" style="display:none">
<?php echo $this->fetch('library/goods_fittings.lbi'); ?>
 </div>

 
 
 <div id="diff_goods" style="display:none">
<?php echo $this->fetch('library/bought_goods.lbi'); ?>
 </div>
 

	
</div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}




</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function($){
	$('.g_detail_tab').click(function(){
		//alert($(this).attr('title'));
		$('.g_tab_active').removeClass('g_tab_active');
		$(this).addClass('g_tab_active');
		$('.g_tab_content').hide();
		var id = $(this).attr('title');
		$('#'+id).show(); 
	});
});
</script>
<style>
#goods_comment,
#g_detail_tags,#g_detail_properties {
display:none;
}


.g_detail_tab.g_tab_active {
background: none;
color: #000;
border: 1px solid #ccc;
border-bottom: none;

-webkit-border-top-left-radius: 2px;
-webkit-border-top-right-radius: 2px;
-moz-border-radius-topleft: 2px;
-moz-border-radius-topright: 2px;
border-top-left-radius: 2px;
border-top-right-radius: 2px;

}


</style>

</html>
