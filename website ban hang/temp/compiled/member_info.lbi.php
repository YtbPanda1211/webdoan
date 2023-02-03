<?php if ($this->_var['user_info']): ?>
<?php echo $this->_var['lang']['hello']; ?><b class="username"><?php echo $this->_var['user_info']['username']; ?></b>
<a href="user.php" class="userContent"><?php echo $this->_var['lang']['user_center']; ?></a>
[<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>]
<?php else: ?>
<?php echo $this->_var['lang']['welcome']; ?>! [<a href="user.php">Đăng nhập</a>]  
[<a href="user.php?act=register">Đăng ký</a>]
<?php endif; ?>
