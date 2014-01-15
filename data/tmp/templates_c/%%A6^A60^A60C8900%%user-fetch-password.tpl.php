<?php /* Smarty version 2.6.18, created on 2012-03-28 12:34:31
         compiled from email/user-fetch-password.tpl */ ?>
<?php echo $this->_tpl_vars['user']->profile->first_name; ?>
, Your Account Password
Dear <?php echo $this->_tpl_vars['user']->profile->first_name; ?>
,

You recently requested a password reset as you had forgotten your password.

Your new password is listed below. To activate this password, click this link:

    Activate Password: http://dev_003.nodetower.net/account/fetchpassword?action=confirm&id=<?php echo $this->_tpl_vars['user']->getId(); ?>
&key=<?php echo $this->_tpl_vars['user']->profile->new_password_key; ?>

    Username: <?php echo $this->_tpl_vars['user']->username; ?>

    New Password: <?php echo $this->_tpl_vars['user']->_newPassword; ?>


If you didn't request a password reset, please ignore this message and your password
will remain unchanged.

Sincerely,

Web Site Administrator