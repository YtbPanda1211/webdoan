<?php if ($this->_var['top_goods']): ?>
<h1 class="topTit"><?php echo $this->_var['lang']['top10']; ?></h1>
<div class="topbox blank">
 <ol class="clearfix">
	 <li class="w30">名次</li>
	 <li class="w100">商品</li>
	 <li class="w60">价格(元)</li>
 </ol>
 <ul id="top10">
	 <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
		<li>
		 <div class="first">
			<dl class="clearfix">
			 <dt class="w30"><?php echo $this->_foreach['top_goods']['iteration']; ?></dt>
			 <dt class="w100">
			 <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a><br />
			 <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
			 </dt>
			 <dt class="w60">
			 <span class="none" id="span_<?php echo $this->_foreach['top_goods']['iteration']; ?>"><?php echo $this->_var['goods']['price']; ?></span><span class="toprice" id="price_<?php echo $this->_foreach['top_goods']['iteration']; ?>"></span>
			 </dt>
			</dl>
		 </div>
		 <div class="last">
			<dl class="clearfix">
			 <dt class="w30"><?php echo $this->_foreach['top_goods']['iteration']; ?></dt>
			 <dt class="w100">
			 <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
			 </dt>
			 <dt class="w60">
			 <span class="none" id="spanL_<?php echo $this->_foreach['top_goods']['iteration']; ?>"><?php echo $this->_var['goods']['price']; ?></span><span id="priceL_<?php echo $this->_foreach['top_goods']['iteration']; ?>"></span>
			 </dt>
			</dl>
		 </div>
		</li>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
 </ul>
</div>
<script type="text/javascript">
top10("top10","cur");
var itemLi = $("top10").getElementsByTagName("li");
for(var k=1; k<=itemLi.length; k++)
{
  var price = $("span_"+k).innerHTML;
	var priceL = $("spanL_"+k).innerHTML;
	var b =/\d+/;
	$("price_"+k).innerHTML = price.match(b);
	$("priceL_"+k).innerHTML = price.match(b);
}
</script>
<?php endif; ?>