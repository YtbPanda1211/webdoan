<?php if ($this->_var['new_articles']): ?>
	  <h1><?php echo $this->_var['lang']['new_article']; ?></h1>
		<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['new_articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_articles']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['new_articles']['iteration']++;
?>
		<?php if (($this->_foreach['new_articles']['iteration'] - 1) < 6): ?>
		<a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" class="txtdot"><?php echo sub_str($this->_var['article']['short_title'],14); ?></a><br />
		<?php endif; ?>	
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>