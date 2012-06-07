<?php if (!defined('IN_PHPBB')) exit; ?>Subject: New Private Message: <?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>


Hello <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>, you have received a new private message to your account on "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>". You can view your new message by clicking on the following link: <?php echo (isset($this->_rootref['U_VIEW_MESSAGE'])) ? $this->_rootref['U_VIEW_MESSAGE'] : ''; ?>

_____________________________________________________________________

From: <?php echo (isset($this->_rootref['AUTHOR_NAME'])) ? $this->_rootref['AUTHOR_NAME'] : ''; ?>

Subject: <?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>

Message:
<?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?>

_____________________________________________________________________

You have requested that you be notified on this event; remember that you can always choose not to be notified of new messages by changing the appropriate setting in your profile.
<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>