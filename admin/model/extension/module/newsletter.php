<?php
class ModelExtensionModuleNewsletter extends Model
{
    public function install()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "newsletter_subscriber` (
            `subscriber_id` INT(11) NOT NULL AUTO_INCREMENT,
            `email` VARCHAR(96) NOT NULL,
            `firstname` VARCHAR(64) DEFAULT NULL,
            `lastname` VARCHAR(64) DEFAULT NULL,
            `status` TINYINT(1) NOT NULL DEFAULT '1',
            `token` VARCHAR(64) DEFAULT NULL,
            `ip` VARCHAR(40) DEFAULT NULL,
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`subscriber_id`),
            UNIQUE KEY `email` (`email`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8");
    }
    public function getSubscribers()
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "newsletter_subscriber` ORDER BY date_added DESC");
        return $query->rows;
    }

    public function deleteSubscriber($subscriber_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "newsletter_subscriber` WHERE subscriber_id = '" . (int)$subscriber_id . "'");
    }
    public function uninstall()
    {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "newsletter_subscriber`");
    }
}
