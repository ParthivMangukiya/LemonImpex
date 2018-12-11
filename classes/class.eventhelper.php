<?php
    class EventHelper {
        private $_db;

        function __construct($db){
            $this->_db = $db;
        }

        public function getThreeEvents() {
            try {
                $query = 'SELECT ' . 
                Event::TAB_NAME.'.'.Event::COL_ID . ' , ' .
                Event::COL_NAME . ' , '.
                Event::COL_DESCRIPTION . ' , '.
                EventImage::COL_URL .
                ' FROM ' . Event::TAB_NAME .
                ' LEFT JOIN ' . EventImage::TAB_NAME . 
                ' ON ' . Event::TAB_NAME.'.'.Event::COL_ID .' = '.EventImage::TAB_NAME.'.'.EventImage::COL_EVENT_ID .
                ' AND ' . EventImage::TAB_NAME.'.'.EventImage::COL_ID . 
                ' = ( SELECT ' . 
                EventImage::COL_ID .
                ' FROM ' . EventImage::TAB_NAME .' AS ei  WHERE ' .
                Event::TAB_NAME.'.'.Event::COL_ID.' = ei.' . EventImage::COL_EVENT_ID . ' LIMIT 1 ) LIMIT 3';
            
                $stmt = $this->_db->query($query);

                return $stmt->fetchAll();
            } catch(PDOException $e) {
                echo '<p class="error">'.$e->getMessage().'</p>';
            }
        }
    }
?>