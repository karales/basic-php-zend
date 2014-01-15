<?php /* Smarty version 2.6.18, created on 2012-04-03 16:03:21
         compiled from user/lib/blog-post-summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'geturl', 'user/lib/blog-post-summary.tpl', 1, false),array('modifier', 'escape', 'user/lib/blog-post-summary.tpl', 7, false),array('modifier', 'date_format', 'user/lib/blog-post-summary.tpl', 13, false),)), $this); ?>
<?php ob_start(); ?><?php echo smarty_function_geturl(array('username' => $this->_tpl_vars['user']->username,'url' => $this->_tpl_vars['post']->url,'route' => 'post'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('url', ob_get_contents());ob_end_clean(); ?>

<div class="teaser">
    <h3>
        <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="entry-title" rel="bookmark">
            <?php echo $this->_tpl_vars['post']->profile->title; ?>

        </a>
    </h3>

    <div class="teaser-date">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['post']->ts_created)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%b %e, %Y %l:%M %p') : smarty_modifier_date_format($_tmp, '%b %e, %Y %l:%M %p')); ?>

    </div>

    <div class="teaser-content summary">
        <?php echo $this->_tpl_vars['post']->getTeaser(500); ?>

    </div>

    <div class="teaser-links">
        <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Read More...</a>
        <?php if ($this->_tpl_vars['linkToBlog']): ?>
            |
            <a href="<?php echo smarty_function_geturl(array('username' => $this->_tpl_vars['user']->username,'route' => 'user'), $this);?>
">
                Published by <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->username)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            </a>
        <?php endif; ?>
    </div>
</div>