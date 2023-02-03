 <form name="tagForm" action="javascript:;" onSubmit="return submitTag(this)" id="tagForm">
	<div id="ECS_TAGS" style="margin-bottom:5px;">
		<?php $_from = $this->_var['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
		<a href="search.php?keywords=<?php echo urlencode($this->_var['tag']['tag_words']); ?>" style="color:#006ace; text-decoration:none; margin-right:5px;"><?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?>[<?php echo $this->_var['tag']['tag_count']; ?>]</a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div>
		<input type="text" name="tag" id="tag" class="InputBorder" size="35" />
		<input type="submit" value="<?php echo $this->_var['lang']['button_submit_tag']; ?>" class="bnt_number6" />
		<input type="hidden" name="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>"  />
	</div>
					<script type="text/javascript">
					//<![CDATA[
					
					/**
					 * 用户添加标记的处理函数
					 */
					function submitTag(frm)
					{
						try
						{
							var tag = frm.elements['tag'].value;
							var idx = frm.elements['goods_id'].value;

							if (tag.length > 0 && parseInt(idx) > 0)
							{
								Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
							}
						}
						catch (e) {alert(e);}

						return false;
					}

					function submitTagResponse(result)
					{
						var div = document.getElementById('ECS_TAGS');

						if (result.error > 0)
						{
							alert(result.message);
						}
						else
						{
							try
							{
								div.innerHTML = '';
								var tags = result.content;

								for (i = 0; i < tags.length; i++)
								{
									div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
								}
							}
							catch (e) {alert(e);}
						}
					}
					
					//]]>
					</script>
				</form>

