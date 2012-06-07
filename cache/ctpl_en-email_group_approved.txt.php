<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Your request has been approved

Congratulations,

Your request to join the "<?php echo (isset($this->_rootref['GROUP_NAME'])) ? $this->_rootref['GROUP_NAME'] : ''; ?>" group on "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" has been approved.
Click on the following link to see your group membership.

<?php echo (isset($this->_rootref['U_GROUP'])) ? $this->_rootref['U_GROUP'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>