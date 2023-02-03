<?php if ($this->_var['promotion_goods']): ?>
<div class="recomTit">
 <div class="recomLeft promoBg fl"></div>
 <div class="recomRight fr">
	<div class="recomMore fl"><a href="search.php?intro=promotion">xem thêm >></a></div>
 </div>
</div>
<div class="recommendContent">
		 <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
			<div class="goodsbox">
			<div class="imgbox"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
			 <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
			 <?php if ($this->_var['goods']['promote_price'] != ""): ?>
			 <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
			 <?php else: ?>
			 <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
			 <?php endif; ?>
			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>