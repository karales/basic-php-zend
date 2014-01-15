<?php /* Smarty version 2.6.18, created on 2012-04-03 19:47:43
         compiled from blogmanager/preview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'geturl', 'blogmanager/preview.tpl', 6, false),array('modifier', 'date_format', 'blogmanager/preview.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('section' => 'blogmanager')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript" src="/js/blogPreview.js"></script>

<form method="post"
      action="<?php echo smarty_function_geturl(array('controller' => 'blogmanager','action' => 'setstatus'), $this);?>
"
      id="status-form">

<div class="preview-status">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['post']->getId(); ?>
" />
    <?php if ($this->_tpl_vars['post']->isLive()): ?>
        <div class="status live">
            This post is live on your blog. To unpublish
            it click the <strong>Unpublish post</strong> button below.
            <div>
                <input type="submit" value="Unpublish post"
                       name="unpublish" id="status-unpublish" />
                <input type="submit" value="Edit post"
                       name="edit" id="status-edit" />
                <input type="submit" value="Delete post"
                       name="delete" id="status-delete" />
            </div>
        </div>
    <?php else: ?>
        <div class="status draft">
            This post is not yet live on your blog. To publish
            it on your blog, click the button below.
            <div>
                <input type="submit" value="Publish post"
                       name="publish" id="status-publish" />
                <input type="submit" value="Edit post"
                       name="edit" id="status-edit" />
                <input type="submit" value="Delete post"
                       name="delete" id="status-delete" />
            </div>
        </div>
    <?php endif; ?>
</div>

</form>

<div class="preview-date">
    <?php echo ((is_array($_tmp=$this->_tpl_vars['post']->ts_created)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%x %X') : smarty_modifier_date_format($_tmp, '%x %X')); ?>

</div>

<div class="preview-content">
    <?php echo $this->_tpl_vars['post']->profile->content; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('leftcolumn' => 'blogmanager/lib/left-column.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>