<?php /* Smarty version 2.6.18, created on 2012-04-03 16:35:29
         compiled from user/lib/left-column.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_monthly_blog_summary', 'user/lib/left-column.tpl', 1, false),array('function', 'geturl', 'user/lib/left-column.tpl', 9, false),array('modifier', 'count', 'user/lib/left-column.tpl', 3, false),array('modifier', 'escape', 'user/lib/left-column.tpl', 5, false),array('modifier', 'date_format', 'user/lib/left-column.tpl', 9, false),)), $this); ?>
<?php echo smarty_function_get_monthly_blog_summary(array('user_id' => $this->_tpl_vars['user']->getId(),'assign' => 'summary','liveOnly' => true), $this);?>


<?php if (count($this->_tpl_vars['summary']) > 0): ?>
    <div id="preview-months" class="box">
        <h3><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->username)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
's Blog Archive</h3>
        <ul>
            <?php $_from = $this->_tpl_vars['summary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['month'] => $this->_tpl_vars['numPosts']):
?>
                <li>
                    <a href="<?php echo smarty_function_geturl(array('username' => $this->_tpl_vars['user']->username,'route' => 'archive','year' => ((is_array($_tmp=$this->_tpl_vars['month'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')),'month' => ((is_array($_tmp=$this->_tpl_vars['month'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m') : smarty_modifier_date_format($_tmp, '%m'))), $this);?>
">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['month'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%B %Y') : smarty_modifier_date_format($_tmp, '%B %Y')); ?>

                    </a>
                    (<?php echo $this->_tpl_vars['numPosts']; ?>
 post<?php if ($this->_tpl_vars['numPosts'] != 1): ?>s<?php endif; ?>)
                </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
<?php endif; ?>