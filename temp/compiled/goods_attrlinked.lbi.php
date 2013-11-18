<?php $_from = $this->_var['attribute_linked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked');$this->_foreach['links'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['links']['total'] > 0):
    foreach ($_from AS $this->_var['linked']):
        $this->_foreach['links']['iteration']++;
?>
<?php if ($this->_var['linked']['goods']): ?>
<div class="mod2Tit"><?php echo $this->_var['linked']['title']; ?></div>
<div class="mod2Content">
	<?php $_from = $this->_var['linked']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['linked_goods_data']):
?>
  <div class="goodsbox">
    <div class="imgbox">
		<a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['linked_goods_data']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['linked_goods_data']['name']); ?>" /></a>
		</div>
		<a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>"><?php echo htmlspecialchars($this->_var['linked_goods_data']['short_name']); ?></a><br />
    <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['linked_goods_data']['shop_price']; ?></b><br />
  </div>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div> 
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>