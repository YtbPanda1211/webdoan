<?php if ($this->_var['home_cate_1']['goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="recomTit">
 <div class="recomLeft fl">
  <p id="camera"></p>
  <?php $_from = $this->_var['home_cate_1']['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'main_cate');if (count($_from)):
    foreach ($_from AS $this->_var['main_cate']):
?>
  <a href="<?php echo $this->_var['main_cate']['url']; ?>" >
	<?php echo $this->_var['main_cate']['name']; ?>
  </a>

	<?php $this->assign('allList',$this->_var['main_cate']); ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
 </div>
 <div class="recomRight fl" id="itemHot">
 <?php $_from = $this->_var['allList']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_cate');if (count($_from)):
    foreach ($_from AS $this->_var['child_cate']):
?>
	<a href="<?php echo $this->_var['child_cate']['url']; ?>" >
	<?php echo $this->_var['child_cate']['name']; ?>
	</a>	
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </div>
</div>
<div class="recommendContent"  id="show_hot_area">
<?php endif; ?>
		 <?php $_from = $this->_var['home_cate_1']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
			<div class="goodsbox">
			 <div class="g_wrap1">
				<div class="g_top1">
				<div class="imgbox"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
				 <a href="<?php echo $this->_var['goods']['url']; ?>" class="g_title" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a><br />
				 <?php if ($this->_var['goods']['promote_price'] != ""): ?>
				 <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
				 <?php else: ?>
				 <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
				 <?php endif; ?>
				 </div>
				 <div class="g_bot1" onclick="parent.location='<?php echo $this->_var['goods']['url']; ?>'">
				 <a class="g_title" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a><br />
				  <?php if ($this->_var['goods']['promote_price'] != ""): ?>
				 <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
				 <?php else: ?>
				 <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
				 <?php endif; ?>
				 <div class="goods_desc">
				 <?php echo $this->_var['goods']['goods_brief']; ?>
				 </div>
				 </div>
                 
			 </div>	
             <?php if ($this->_var['goods']['watermark_img'] != ""): ?>
             <img class="img_lable" src="themes/3cshop/images/<?php echo $this->_var['goods']['watermark_img']; ?>.png" /> 
             <?php endif; ?> 
			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="clearfix"></div>
</div>
<?php endif; ?>
<?php endif; ?>