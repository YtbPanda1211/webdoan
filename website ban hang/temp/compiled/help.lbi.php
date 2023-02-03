<?php if ($this->_var['helps']): ?>
<div class="block blank">
	  <div class="helpbox">
		 <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');if (count($_from)):
    foreach ($_from AS $this->_var['help_cat']):
?>
			<div class="goodsbox">
			 <div class="helpTit"><?php echo $this->_var['help_cat']['cat_name']; ?></div>
			 <div class="helpList tl">
				<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
				·<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a><br />
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			 </div>
			</div>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>
</div> 
<?php endif; ?>