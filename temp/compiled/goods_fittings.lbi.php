<?php if ($this->_var['fittings']): ?>
<div class="mod2Tit"><?php echo $this->_var['lang']['accessories_releate']; ?></div>
<div class="mod2Content">
<?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_91842100_1384745789');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_91842100_1384745789']):
?>
  <div class="goodsbox">
	 <div class="imgbox"><a href="<?php echo $this->_var['goods_0_91842100_1384745789']['url']; ?>"><img src="<?php echo $this->_var['goods_0_91842100_1384745789']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_91842100_1384745789']['name']); ?>" /></a></div>
   <a href="<?php echo $this->_var['goods_0_91842100_1384745789']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_91842100_1384745789']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_91842100_1384745789']['short_name']); ?></a><br />
   <?php echo $this->_var['lang']['fittings_price']; ?><b class="f1"><?php echo $this->_var['goods_0_91842100_1384745789']['fittings_price']; ?></b>
  </div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>	
<?php endif; ?>