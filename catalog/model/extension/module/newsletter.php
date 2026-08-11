<?php
class ModelExtensionModuleNewsletter extends Model
{
    public function addSubscriber($data)
    {
        $email = $this->db->escape(utf8_strtolower($data['email']));
        $firstname = isset($data['firstname']) ? $this->db->escape($data['firstname']) : null;
        $lastname  = isset($data['lastname']) ? $this->db->escape($data['lastname']) : null;
        $ip        = $this->db->escape($this->request->server['REMOTE_ADDR']);
        $token     = isset($data['token']) ? $this->db->escape($data['token']) : null;
        $status    = (int)$data['status'];

        $query = $this->db->query("SELECT subscriber_id FROM `" . DB_PREFIX . "newsletter_subscriber` WHERE email = '" . $email . "' LIMIT 1");

        if ($query->num_rows) {
            $this->db->query("UPDATE `" . DB_PREFIX . "newsletter_subscriber`
            SET status = '" . $status . "',
                firstname = " . ($firstname !== null ? "'" . $firstname . "'" : "NULL") . ",
                lastname = " . ($lastname !== null ? "'" . $lastname . "'" : "NULL") . ",
                ip = '" . $ip . "',
                date_added = NOW(),
                token = " . ($token !== null ? "'" . $token . "'" : "NULL") . "
            WHERE email = '" . $email . "'");
            return $query->row['subscriber_id'];
        } else {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "newsletter_subscriber`
            SET email = '" . $email . "',
                firstname = " . ($firstname !== null ? "'" . $firstname . "'" : "NULL") . ",
                lastname = " . ($lastname !== null ? "'" . $lastname . "'" : "NULL") . ",
                status = '" . $status . "',
                token = " . ($token !== null ? "'" . $token . "'" : "NULL") . ",
                ip = '" . $ip . "',
                date_added = NOW()");
            return $this->db->getLastId();
        }
    }


    public function getByEmail($email)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "newsletter_subscriber` WHERE email='" . $this->db->escape(utf8_strtolower($email)) . "' LIMIT 1");
        return $query->row;
    }

    public function activateByToken($token)
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "newsletter_subscriber` SET status='1', token=NULL WHERE token='" . $this->db->escape($token) . "'");
        return $this->db->countAffected();
    }
}
