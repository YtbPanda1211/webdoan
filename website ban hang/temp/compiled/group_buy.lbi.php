<?php if ($this->_var['group_buy_goods']): ?>
<div class="modbox">
	<h1 class="modTit"><div class="fl"><?php echo $this->_var['lang']['group_buy_goods']; ?></div><div class="fr more"><a href="group_buy.php">xem thêm >></a></div></h1>
	<div class="recommendContent">
	<?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
	<div class="goodsbox">
	 <div class="imgbox"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></a></div>
	 <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_style_name']); ?></a><br />
   <?php echo $this->_var['lang']['last_price']; ?><b class="f1"><?php echo $this->_var['goods']['last_price']; ?></b>
	</div>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<?php endif; ?>