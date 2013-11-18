<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themes/3cShop/js/action.js"></script>
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

<div class="block blank">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
	<div class="modbox">
	<h1 class="modTit"><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1>
	<div class="recommendContent" style="font-size:14px; line-height:23px;">
	  <?php if ($this->_var['article']['content']): ?>
     <?php echo $this->_var['article']['content']; ?>
    <?php else: ?>
	  <div class="tips">暂无数据</div>
	  <?php endif; ?>
	</div>
	</div>

</div>

<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
