<?php if ($this->_var['cat_list']): ?>
<h1 class="topTit"><?php echo $this->_var['lang']['goods_category']; ?></h1>
<div class="topbox topContent blank">
	 <?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
    <a href="<?php echo $this->_var['cat']['url']; ?>" class="txtdot"><?php echo htmlspecialchars($this->_var['cat']['cat_name']); ?> <?php if ($this->_var['cat']['goods_num']): ?>(<?php echo $this->_var['cat']['goods_num']; ?>)<?php endif; ?></a><br />
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>