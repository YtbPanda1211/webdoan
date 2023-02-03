<?php if ($this->_var['article_categories']): ?>
<h1 class="topTit"><?php echo $this->_var['lang']['article_cat']; ?></h1>
<div class="topbox topContent blank">
<?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_13513600_1372986193');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_13513600_1372986193']):
?>
 <a href="<?php echo $this->_var['cat_0_13513600_1372986193']['url']; ?>" class="txtdot"><?php echo htmlspecialchars($this->_var['cat_0_13513600_1372986193']['name']); ?></a><br />
 <?php $_from = $this->_var['cat_0_13513600_1372986193']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_13524700_1372986193');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_13524700_1372986193']):
?>
			&nbsp;&nbsp;·<a href="<?php echo $this->_var['child_0_13524700_1372986193']['url']; ?>"><?php echo htmlspecialchars($this->_var['child_0_13524700_1372986193']['name']); ?></a><br />
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>