<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
<script type="text/javascript" src="themes/3cshop/js/action.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="pageWarp clearfix">
 <div id="pageLeft" class="fl">
 <div class="ArticleCate"><a href="catalog.php">全部分类</a></div>
 </div>
 <div id="pageRight" class="fr">
 <?php echo $this->fetch('library/cart.lbi'); ?>
 </div>
</div>

<div class="block">
<?php echo $this->fetch('library/ur_here.lbi'); ?>

<?php if ($this->_var['action'] == 'login'): ?>
  <div class="user_login  clearfix">
	<h4>Đăng nhập</h4>
	 <form name="formLogin" action="user.php" method="post" onsubmit="return userLogin()">
    <table width="100%" border="0" align="left" cellpadding="3" cellspacing="5">
          <tr>
            <td width="40%" align="right"><?php echo $this->_var['lang']['label_username']; ?></td>
            <td width="60%" align="left"><input name="username" type="text" size="25" class="InputBorder" /></td>
          </tr>
          <tr>
            <td align="right" valign="top"><?php echo $this->_var['lang']['label_password']; ?></td>
            <td align="left">
            <input name="password" type="password" size="15"  class="InputBorder" />
            <a href="#blank" onclick="pwTips()"><?php echo $this->_var['lang']['get_password']; ?>？</a><br />
						<div class="close" id="tips">
						<span title="关闭" id="tipsClose" onclick=" pwTipsClose()"></span>
						如果您忘记了密码，可以通过下面两种方式找回：<br />
						1. <a href="user.php?act=qpassword_name"><?php echo $this->_var['lang']['get_password_by_question']; ?></a><br />
						2. <a href="user.php?act=get_password"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a>
						</div>
						<script type="text/javascript">
						function pwTips(){
						document.getElementById("tips").style.display = "block";
						}
						function pwTipsClose(){
						document.getElementById("tips").style.display = "none";
						}
						</script>
            </td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td align="left"><input type="text" size="8" name="captcha" class="InputBorder" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
					<tr>
					  <td>&nbsp;</td>
            <td align="left"><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left">
            <input type="hidden" name="act" value="act_login" />
            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
            <input type="submit" value="" class="bnt_join" /><br /><br />
						<a href="user.php?act=register"><?php echo $this->_var['lang']['sign_up']; ?>！</a>
            </td>
          </tr>
      </table>
   </form>
	</div>
<?php endif; ?>



    <?php if ($this->_var['action'] == 'register'): ?>
    <?php if ($this->_var['shop_reg_closed'] == 1): ?>
		<div class="user_login  clearfix">
		 <div class="tips"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
		</div>
		<?php else: ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
		<div class="user_login  clearfix">
	  <h4><?php echo $this->_var['lang']['sign_up']; ?></h4>
		<form action="user.php" method="post" name="formUser" onsubmit="return register();">
      <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
        <tr>
          <td width="40%" align="right"><?php echo $this->_var['lang']['label_username']; ?></td>
          <td width="60%" align="left">
          <input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="InputBorder"/>
            <span id="username_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['label_email']; ?></td>
          <td>
          <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="InputBorder"/>
            <span id="email_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['label_password']; ?></td>
          <td>
          <input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="InputBorder" style="width:179px;" />
            <span style="color:#FF0000" id="password_notice"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['label_password_intensity']; ?></td>
          <td>
            <table width="145" border="0" cellspacing="0" cellpadding="1">
              <tr align="center">
                <td width="33%" id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></td>
                <td width="33%" id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></td>
                <td width="33%" id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['label_confirm_password']; ?></td>
          <td>
          <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="InputBorder" style="width:179px;"/>
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
          </td>
        </tr>
        <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
	<?php if ($this->_var['field']['id'] == 6): ?>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['passwd_question']; ?></td>
          <td>
          <select name='sel_question' class="InputBorder">
					<option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
					<?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
					</select>
          </td>
        </tr>
        <tr>
          <td align="right" <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?></td>
          <td>
	  <input name="passwd_answer" type="text" size="25" class="InputBorder" maxlengt='20'/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
          </td>
        </tr>
	<?php else: ?>
        <tr>
          <td align="right" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>
          <td>
          <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" size="25" class="InputBorder" /><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
          </td>
        </tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php if ($this->_var['enabled_captcha']): ?>
      <tr>
      <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
      <td><input type="text" size="8" name="captcha" class="InputBorder" />
      <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src='captcha.php?'+Math.random()" /> </td>
      </tr>
      <?php endif; ?>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input name="agreement" type="checkbox" value="1" checked="checked" />
            <?php echo $this->_var['lang']['agreement']; ?></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left">
          <input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <input name="Submit" type="submit" value="" class="bnt_login">
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="actionSub">
          <a href="user.php?act=login" class="txtdot"><?php echo $this->_var['lang']['want_login']; ?></a><br />
          </td>
        </tr>
      </table>
    </form>
		</div>
		<?php endif; ?>
<?php endif; ?>


<?php if ($this->_var['action'] == 'get_password'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div class="user_login  clearfix">
	<h4><?php echo $this->_var['lang']['get_password']; ?></h4>
    <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
     <table width="100%" border="0" align="center" cellpadding="5">
          <tr>
            <td colspan="2" align="center" class="f1 f14b"><?php echo $this->_var['lang']['username_and_email']; ?></td>
          </tr>
          <tr>
            <td width="40%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="60%"><input name="user_name" type="text" size="30" class="InputBorder" /></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
            <td><input name="email" type="text" size="30" class="InputBorder" /></td>
          </tr>
          <tr>
            <td></td>
            <td>
						<input type="hidden" name="act" value="send_pwd_email" />   
						<input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_number4" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" class="bnt_number6" />
	         </td>
          </tr>
        </table>
    </form>
</div>
<?php endif; ?>


<?php if ($this->_var['action'] == 'qpassword_name'): ?>
<div class="user_login  clearfix">
	<h4><?php echo $this->_var['lang']['get_password']; ?></h4>
    <form action="user.php" method="post">
       <table width="100%" border="0" align="center" cellpadding="5">
          <tr>
            <td colspan="2" align="center" class="f1 f14b"><?php echo $this->_var['lang']['get_question_username']; ?></td>
          </tr>
          <tr>
            <td width="40%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="60%"><input name="user_name" type="text" size="30" class="InputBorder" /></td>
          </tr>
          <tr>
            <td></td>
            <td>
						  <input type="hidden" name="act" value="get_passwd_question" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_number4" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" class="bnt_number6" />
	         </td>
          </tr>
        </table>
    </form>
</div>
<?php endif; ?>


<?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="user_login  clearfix">
	<h4><?php echo $this->_var['lang']['get_password']; ?></h4>
    <form action="user.php" method="post">
     <table width="100%" border="0" align="center" cellpadding="5">
          <tr>
            <td colspan="2" align="center" class="f1 f14b"><?php echo $this->_var['lang']['input_answer']; ?></td>
          </tr>
          <tr>
            <td width="40%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>:</td>
            <td width="60%"><?php echo $this->_var['passwd_question']; ?></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>:</td>
            <td><input name="passwd_answer" type="text" size="20" class="InputBorder" /></td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td><input type="text" size="8" name="captcha" class="InputBorder" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          <tr>
            <td></td>
            <td>
						<input type="hidden" name="act" value="check_answer" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_number4" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" class="bnt_number6" />
	         </td>
          </tr>
        </table>
    </form>
</div>
<?php endif; ?>

<?php if ($this->_var['action'] == 'reset_password'): ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="user_login  clearfix">
	<h4><?php echo $this->_var['lang']['get_password']; ?></h4>
    <form action="user.php" method="post" name="getPassword2" onsubmit="return submitPwd()">
      <table width="100%" border="0" align="center" cellpadding="5">
        <tr>
          <td width="40%" align="right"><?php echo $this->_var['lang']['new_password']; ?></td>
          <td width="60%"><input name="new_password" type="password" size="25" class="InputBorder" /></td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['confirm_password']; ?></td>
          <td><input name="confirm_password" type="password" size="25"  class="InputBorder"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" class="bnt_number2" />
          </td>
        </tr>
      </table>
    </form>
</div>
<?php endif; ?>

	

</div>


<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
