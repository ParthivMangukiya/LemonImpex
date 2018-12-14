<?php
    class EventHelper {
        private $_db;

        function __construct($db){
            $this->_db = $db;
        }

        public function getLatestThreeEvents() {
            try {
                $res = [];
                $query = 'SELECT ' . 
                Event::TAB_NAME.'.'.Event::COL_ID . ' , ' .
                Event::COL_NAME . ' , '.
                Event::COL_SHORT_DESCRIPTION . ' , '.
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
                $result = $stmt->fetchAll();
                $res['data'] = $result;
                $res['error'] = false; 
                $stmt->closeCursor();
                return $res;
            } catch(PDOException $e) {
                $res = [];
                $res['data'] = [];
                $res['error'] = true;
                return $res;
            }
        }

        public function getEvents() {
            try {
                $res = [];
                $query = 'SELECT * FROM ' . Event::TAB_NAME . ' ORDER BY ' . Event::COL_DATE_BEGIN . ' DESC ';
                $stmt = $this->_db->query($query);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
                $data = [];
                foreach($result as $row) {
                    $query = 'SELECT ' . EventImage::COL_URL . 
                        ' FROM ' . EventImage::TAB_NAME . 
                        ' WHERE ' . EventImage::COL_EVENT_ID .
                        ' = ' . $row[Event::COL_ID];
                    $stmt = $this->_db->query($query);
                    $images = $stmt->fetchAll(PDO::FETCH_COLUMN);
                    $row['images'] = $images;
                    array_push($data,$row);
                }
                $res['data'] = $data;
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