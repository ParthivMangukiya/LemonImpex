<?php
    class ContactUsHelper {
        private $_db;

        function __construct($db){
            $this->_db = $db;
        }

        public function createContactUsQuery($name,$mobile,$email,$message) {
            try {
                $res = [];
                $query = "INSERT INTO " . ContactUS::TAB_NAME . 
                " ( " .
                ContactUs::COL_NAME . " , " .
                ContactUs::COL_MOBILE . " , " .
                ContactUs::COL_EMAIL . " , " .
                ContactUs::COL_MESSAGE.
                " ) " . 
                " VALUES (:name,:mobile,:email,:message)";
                $stmt = $this->_db->prepare($query);
                $stmt->execute(array(
                    ':name' => $name,
                    ':mobile' => $mobile,
                    ':email' => $email,
                    ':message' => $message
                  ));

                $id = $this->_db->lastInsertId();

                if($stmt->rowCount() > 0) {
                    $res['id'] = $id;
                    $res['error'] = false;
                } else {
                    $res['error'] = true;
                }
                return $res;
            } catch(PDOException $e) {
                $res = [];
                $res['error'] = true;
                $res['message'] = $e->getMessage();
                return $res;
            }
        }

    }
?>