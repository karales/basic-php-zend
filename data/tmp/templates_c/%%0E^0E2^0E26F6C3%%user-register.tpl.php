<?php /* Smarty version 2.6.18, created on 2012-03-26 03:35:11
         compiled from email/user-register.tpl */ ?>
<?php echo $this->_tpl_vars['user']->profile->first_name; ?>
, Thank You For Your Registration
Dear <?php echo $this->_tpl_vars['user']->profile->first_name; ?>
,

Thank you for your registration. Your login details are as follows:

    Login URL: http://phpweb20/account/login
    Username: <?php echo $this->_tpl_vars['user']->username; ?>

    Password: <?php echo $this->_tpl_vars['user']->_newPassword; ?>


Sincerely,

Web Site Administrator