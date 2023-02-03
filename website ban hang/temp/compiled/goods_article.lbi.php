<h1 class="topTit"><?php echo $this->_var['lang']['article_releate']; ?></h1>
<div class="topbox topContent blank">
<?php if ($this->_var['goods_article_list']): ?>
	<?php $_from = $this->_var['goods_article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
   <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" class="txtdot"><?php echo sub_str($this->_var['article']['short_title'],13); ?></a><br />
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php else: ?>
Không có bài viết liên quan!
<?php endif; ?>	
</div>
