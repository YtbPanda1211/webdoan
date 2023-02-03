<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themes/3cshop/js/action.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="pageWarp clearfix">
 <div id="pageLeft" class="fl">
 <div class="ArticleCate" style="display:none"><a href="catalog.php">全部分类</a></div>
  <?php echo $this->fetch('library/category_tree2.lbi'); ?> 
 </div>
 <div id="pageRight" class="fr">
 <?php echo $this->fetch('library/cart.lbi'); ?>
 </div>
</div>
<div class="block blank clearfix">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div id="articleLeft" class="fl">
	 <div class="articleBox blank">
	  <h1 class="articleTit tc"><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1>
	  <div class="author tc">
		  <?php echo htmlspecialchars($this->_var['article']['author']); ?> / <?php echo $this->_var['article']['add_time']; ?>
		  <div class="articleSize">[<a href="javascript:articleSize('16','30')">Lớn</a>] [<a href="javascript:articleSize('14','24')">Trung</a>] [<a href="javascript:articleSize('12','21')">Nhỏ</a>]</div>
	  </div>
		<?php if ($this->_var['article']['content']): ?>
		<div id="article" class="word">
		 <?php echo $this->_var['article']['content']; ?>
		</div> 
		<?php endif; ?>
		<?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?>
			<div class="tr"><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><u><?php echo $this->_var['lang']['relative_file']; ?></u></a></div>
		<?php endif; ?>
		 <div class="articlePrev">
			
				 <?php echo $this->_var['lang']['next_article']; ?>:
				 <?php if ($this->_var['next_article']): ?>
				 <a href="<?php echo $this->_var['next_article']['url']; ?>"><?php echo $this->_var['next_article']['title']; ?></a>
				 <?php else: ?>
				 Rỗng!
				 <?php endif; ?><br />
			 
				<?php echo $this->_var['lang']['prev_article']; ?>:
				<?php if ($this->_var['prev_article']): ?>
				<a href="<?php echo $this->_var['prev_article']['url']; ?>"><?php echo $this->_var['prev_article']['title']; ?></a>
				<?php else: ?>
				 Rỗng!
				<?php endif; ?>
		 </div>
	</div>	
  <div class="ArticleComm" style="display:none">
	<?php echo $this->fetch('library/comments.lbi'); ?>
	</div>
	</div>
	<div id="articleRight" class="fr">
	<?php if ($this->_var['related_goods']): ?>
	<h1 class="topTit"><?php echo $this->_var['lang']['releate_goods']; ?></h1>
	<div class="topbox topContent blank">
		<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
	    <ul class="attribute">
      <li class="clearfix">
       <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" align="left" /></a>
			 <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a><br />
			 <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
			 <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></b><br />
			 <?php else: ?>
			 <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></b><br />
			 <?php endif; ?>
      </li>
     </ul>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	</div>
	<?php endif; ?> 
	
	<?php echo $this->fetch('library/promotion_info.lbi'); ?>
	<?php echo $this->fetch('library/history.lbi'); ?>
  
	</div>
 </div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
