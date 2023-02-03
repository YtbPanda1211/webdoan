<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="recomTit">
 <div class="recomLeft bestBg fl"></div>
 <div class="recomRight fr" id="itemBest">
  <?php if ($this->_var['cat_rec'] [ 1 ]): ?>
      <h2><a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(1, 0);"><?php echo $this->_var['lang']['all_goods']; ?></a></h2>
      <?php $_from = $this->_var['cat_rec']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
      <h2 class="h2bg"><a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(1, <?php echo $this->_var['rec_data']['cat_id']; ?>)"><?php echo $this->_var['rec_data']['cat_name']; ?></a></h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
	<div class="recomMore fl"><a href="search.php?intro=best">xem thêm >></a></div>
 </div>
</div>
<div class="recommendContent"  id="show_best_area">
<?php endif; ?>
		 <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
			<div class="goodsbox">
			 <div class="g_wrap1">
				<div class="g_top1">
				<div class="imgbox"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
				 <a href="<?php echo $this->_var['goods']['url']; ?>" class="g_title" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
				 <?php if ($this->_var['goods']['promote_price'] != ""): ?>
				 <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
				 <?php else: ?>
				 <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
				 <?php endif; ?>
				 </div>
				 <div class="g_bot1" onclick="parent.location='<?php echo $this->_var['goods']['url']; ?>'">
				 <a class="g_title" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
				  <?php if ($this->_var['goods']['promote_price'] != ""): ?>
				 <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
				 <?php else: ?>
				 <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
				 <?php endif; ?>
				 <div class="goods_desc">
				 <?php echo $this->_var['goods']['goods_desc']; ?>
				 </div>
				 </div>
			 </div>	 
			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
</div>
<?php endif; ?>
<?php endif; ?>