<?php if ($this->_var['related_goods']): ?>
<div class="mod2Tit"><?php echo $this->_var['lang']['releate_goods']; ?></div>
<div class="mod2Content">
<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
 <div class="goodsbox">
	 <div class="imgbox"><a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" /></a></div>
	 <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a><br />
	 <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
   <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></b><br />
	 <?php else: ?>
	 <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></b><br />
	 <?php endif; ?>
  </div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>
