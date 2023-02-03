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
  <?php echo $this->fetch('library/category_tree2.lbi'); ?>
  <!-- div class="ArticleCate" ><a href="catalog.php">全部分类</a></div -->
 </div>
 <div id="pageRight" class="fr">
 <?php echo $this->fetch('library/cart.lbi'); ?>
 </div>
</div>
<div class="block clearfix">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div id="pageLeft" class="fl">
	 
	 <?php echo $this->fetch('library/article_category_tree.lbi'); ?>
	 <?php echo $this->fetch('library/history.lbi'); ?>
	 <?php echo $this->fetch('library/promotion_info.lbi'); ?>
   
	</div>
	<div id="pageRight" class="fr">
	
	<h1 class="mod2Tit clearfix blank">
	 <div class="fl">
	 <?php echo $this->_var['lang']['article_list']; ?>
   </div>
	 <form action="<?php echo $this->_var['search_url']; ?>" name="search_form" method="post" class="fr">
        <input name="keywords" type="text" id="requirement" value="<?php echo $this->_var['search_value']; ?>" size="40" class="InputBorder" />
        <input name="id" type="hidden" value="<?php echo $this->_var['cat_id']; ?>" />
        <input name="cur_url" id="cur_url" type="hidden" value="" />
        <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="bnt_number4" />
  </form>
	</h1>
	 <div class="mod1con">
	 <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tr>
        <th bgcolor="#ffffff"><?php echo $this->_var['lang']['article_title']; ?></th>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['article_author']; ?></th>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['article_add_time']; ?></th>
        </tr>
      <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
      <tr>
        <td bgcolor="#ffffff"><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['short_title']; ?></a></td>
          <td bgcolor="#ffffff"><?php echo $this->_var['article']['author']; ?></td>
          <td bgcolor="#ffffff" align="center"><?php echo $this->_var['article']['add_time']; ?></td>
        </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
	 </div>
	<?php echo $this->fetch('library/pages.lbi'); ?>
	  
  

	</div>
</div>


<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
</html>
