<?php if ($this->_var['auction_list']): ?>
<div class="modbox">
	<h1 class="modTit"><div class="fl"><?php echo $this->_var['lang']['auction_goods']; ?></div><div class="fr more"><a href="auction.php" >xem thêm >></a></div></h1>
	<div class="recommendContent">
		<?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');if (count($_from)):
    foreach ($_from AS $this->_var['auction']):
?>
   <div class="goodsbox">
	  <div class="imgbox"><a href="<?php echo $this->_var['auction']['url']; ?>"><img src="<?php echo $this->_var['auction']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?>"/></a></div>
    <a href="<?php echo $this->_var['auction']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['auction']['short_style_name']); ?></a><br />
    <?php echo $this->_var['lang']['au_start_price']; ?>:<b class="f1"><?php echo $this->_var['auction']['formated_start_price']; ?></b>
	 </div>	
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<?php endif; ?>