
<div class="cateContent blank"> 
 <dl>
 <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
 <dt><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></dt>
 <?php if ($this->_var['cat']['cat_id']): ?>
 <dd class="clearfix">
 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['childs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childs']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['childs']['iteration']++;
?>
     <p onMouseOver="this.className='itemsbg'" onMouseOut="this.className=''"><a href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></p>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </dd>
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </dl>

</div>