<?php
    class AdminHelper {
        private $_db;

        function __construct($db){
            $this->_db = $db;
        }

        public function getAdminByEmail($email) {
            try {
                $res = [];
                $query = 'SELECT * FROM ' . Admin::TAB_NAME .
                ' WHERE ' . Admin::COL_EMAIL . ' = :email' ;
                $stmt = $this->_db->prepare($query);
                $stmt->bindParam(':email',$email);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
                $res['data'] = $result;
                $res['error'] = false; 
                return $res;
            } catch(PDOException $e) {
                $res = [];
                $res['data'] = [];
                $res['error'] = true;
                return $res;
            }
        }
    }
?>