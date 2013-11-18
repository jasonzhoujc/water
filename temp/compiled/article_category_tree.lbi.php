<?php if ($this->_var['article_categories']): ?>
<h1 class="topTit"><?php echo $this->_var['lang']['article_cat']; ?></h1>
<div class="topbox topContent blank">
<?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
 <a href="<?php echo $this->_var['cat']['url']; ?>" class="txtdot"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a><br />
 <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
			&nbsp;&nbsp;·<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a><br />
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>