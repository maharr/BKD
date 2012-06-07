<?php if (!defined('IN_PHPBB')) exit; ?>Subject: New Topic Notification - <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>


Hello <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>, the forum "<?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>" at "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" has received a new topic since your last visit. You can view the forum by clicking on the following link: <?php echo (isset($this->_rootref['U_FORUM'])) ? $this->_rootref['U_FORUM'] : ''; ?>

_____________________________________________________________________
Topic: <?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>

Author: <?php echo (isset($this->_rootref['AUTHOR'])) ? $this->_rootref['AUTHOR'] : ''; ?>

Message:
<?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?>

_____________________________________________________________________

<?php echo (isset($this->_rootref['VISIT_MSG'])) ? $this->_rootref['VISIT_MSG'] : ''; ?>If you no longer wish to watch this forum, either click the "Unsubscribe forum" link found in the forum above, or click the following link:
<?php echo (isset($this->_rootref['U_STOP_WATCHING_FORUM'])) ? $this->_rootref['U_STOP_WATCHING_FORUM'] : ''; ?>

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>