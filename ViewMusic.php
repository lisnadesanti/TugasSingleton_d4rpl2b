<?php

require_once('DatabaseConnection.php');

class ViewMusic {

    protected PDO $db;
    private static ?ViewMusic $music = null;
    
    public function __construct()
    {
        $this->db = DatabaseConnection::connected();
    }

    public static function music(): ViewMusic
    {
        if (self::$music === null) {
            self::$music = new ViewMusic();
        }
        return self::$music;
    }

    public function readMusic() {
        $sql = "SELECT * FROM music";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>