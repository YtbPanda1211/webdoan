<div class="clearfix blank">
  <div class="pageNav fl">
	 <ul class="clearfix">
		 <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="curs"<?php endif; ?>><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
		 <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
			<li <?php if ($this->_var['nav']['active'] == 1): ?> class="curs"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 </ul>
	</div>
	<div class="cartBox fr">
	<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
	<span  id="ECS_CARTINFO" class="none"></span>
	<?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

	</div>
	<script type="text/javascript">cart();</script>
</div>
