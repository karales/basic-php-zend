<?php /* Smarty version 2.6.18, created on 2012-04-03 16:35:29
         compiled from user/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user/view.tpl', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="post-date">
    <?php echo ((is_array($_tmp=$this->_tpl_vars['post']->ts_created)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%b %e, %Y %l:%M %p') : smarty_modifier_date_format($_tmp, '%b %e, %Y %l:%M %p')); ?>

</div>

<div class="post-content">
    <?php echo $this->_tpl_vars['post']->profile->content; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('leftcolumn' => 'user/lib/left-column.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>