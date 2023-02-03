<div class="block tc footer">
<div class="footer_cosl left_info">
   <?php if ($this->_var['navigator_list']['bottom']): ?>
   <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_47633500_1372169999');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_47633500_1372169999']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav_0_47633500_1372169999']['url']; ?>" <?php if ($this->_var['nav_0_47633500_1372169999']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_47633500_1372169999']['name']; ?></a> 
        <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
         | 
        <?php endif; ?>

      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
  <?php endif; ?>  
<h1>Liên hệ với chúng tôi : TRUNG TÂM ĐIỆN THOẠI TÂN THÀNH MOBILE</h1>
 <div class="address">
 Địa chỉ : <?php echo $this->_var['shop_address']; ?>
 
  <?php echo $this->_var['shop_postcode']; ?>
  <br />
 <?php if ($this->_var['service_phone']): ?>
      Tel: <?php echo $this->_var['service_phone']; ?>  <br/>
 <?php endif; ?>
 <?php if ($this->_var['service_email']): ?>
      E-mail: <?php echo $this->_var['service_email']; ?><br />
 <?php endif; ?>
 </div>
  <?php echo $this->_var['copyright']; ?><br />
 <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
			<a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/3cshop/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="themes/3cshop/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
  </div>
  <div class="footer_cosl"></div>'
  <div class="clearfix">
  
  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftanthanhgroup&amp;width=500&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=true&amp;appId=469802229751141" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:290px;" allowTransparency="true"></iframe>
  
  
  </div>
		<div class="tc" id="rss" style="display: none;"><a href="<?php echo $this->_var['feed_url']; ?>"><img src="themes/3cshop/images/xml_rss2.gif" alt="rss" /></a></div>
</div>
</div>
<div id="divAdRight" style="DISPLAY: none; POSITION: absolute; TOP: 0px">
<a href="http://www.chupanhdangoai.com" target="_blank"><img src="themes/3cshop/images/bannerright.jpg" width="125" /></a>
</div>
<div id="divAdLeft" style="DISPLAY: none; POSITION: absolute; TOP: 0px">
<a href="http://www.chupanhdangoai.com" target="_blank"><img src="themes/3cshop/images/bannerleft.jpg" width="125" /></a>
</div>
<script>
    function FloatTopDiv()
    {
        startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
        startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
        var d = document;
        function ml(id)
        {
            var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
            el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
            el.x = startRX;
            el.y = startRY;
            return el;
        }
        function m2(id)
        {
            var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
            e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
            e2.x = startLX;
            e2.y = startLY;
            return e2;
        }
        window.stayTopLeft=function()
        {
            if (document.documentElement && document.documentElement.scrollTop)
                var pY =  document.documentElement.scrollTop;
            else if (document.body)
                var pY =  document.body.scrollTop;
            if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
            ftlObj.y += (pY+startRY-ftlObj.y)/16;
            ftlObj.sP(ftlObj.x, ftlObj.y);
            ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
            ftlObj2.sP(ftlObj2.x, ftlObj2.y);
            setTimeout("stayTopLeft()", 1);
        }
        ftlObj = ml("divAdRight");
        //stayTopLeft();
        ftlObj2 = m2("divAdLeft");
        stayTopLeft();
    }
    function ShowAdDiv()
    {
        var objAdDivRight = document.getElementById("divAdRight");
        var objAdDivLeft = document.getElementById("divAdLeft");
        if (document.body.clientWidth < 1000)
        {
            objAdDivRight.style.display = "none";
            objAdDivLeft.style.display = "none";
        }
        else
        {
            objAdDivRight.style.display = "block";
            objAdDivLeft.style.display = "block";
            FloatTopDiv();
        }
    }
</script>
<script>
document.write("<script type='text/javascript' language='javascript'>MainContentW = 1002;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 40;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>
