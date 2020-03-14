<?php
    class DiamondHelper {
        private $_db;
        private const resultPerPage = 24;

        function __construct($db){
            $this->_db = $db;
        }

        public function getDiamondsWithFilter($shape,$cut,$color,$clarity,$carat_low,$carat_high,$price_low,$price_high,$page) {
            try {
                $res = [];

                $columns = Diamond::COL_ID . ' , ' .
                Diamond::COL_MAIN_IMAGE_URL . ' , ' .
                Diamond::COL_SHAPE . ' , ' .
                Diamond::COL_CARAT. ' , ' .
                Diamond::COL_COLOR . ' , ' .
                Diamond::COL_CLARITY . ' , ' .
                Diamond::COL_CUT . ' , ' .
                Diamond::COL_CERTI_URL . ' , ' .
                Diamond::COL_CERTI_TYPE . ' , ' .
                Diamond::COL_DEPTH . ' , ' .
                Diamond::COL_TABLE . ' , ' .
                Diamond::COL_PRICE;

                $selector = '';
                if(!empty($shape)){
                    $shapestr = " '" . implode("','",$shape) . "' ";
                    $selector = $selector . Diamond::COL_SHAPE . ' in ( '. $shapestr .' ) AND ';
                }

                if(!empty($cut)){
                    $cutstr = " '" . implode("','",$cut) . "' ";
                    $selector = $selector . Diamond::COL_CUT . ' in ( '. $cutstr .' ) AND ';
                }

                if(!empty($color)){
                    $colorstr =  " '" . implode("','",$color) . "' ";
                    $selector = $selector . Diamond::COL_COLOR . ' in ( '.$colorstr.' ) AND ';
                }

                if(!empty($clarity)){
                    $claritystr = " '" . implode("','",$clarity) . "' ";
                    $selector = $selector .  Diamond::COL_CLARITY . ' in ( '.$claritystr.' ) AND ';
                }

                if(!empty($carat_low)){
                    $selector = $selector . Diamond::COL_CARAT . ' >= :carat_low AND ';
                }

                if(!empty($carat_high)){
                    $selector = $selector . Diamond::COL_CARAT . ' <= :carat_high AND ';
                }

                if(!empty($price_low)){
                    $selector = $selector . Diamond::COL_PRICE . ' >= :price_low AND ';
                }

                if(!empty($price_high)){
                    $selector = $selector . Diamond::COL_PRICE . ' <= :price_high AND ';
                }


                $selector = rtrim($selector," AND ");
                $query = 'SELECT ' . $columns .
                ' FROM ' . Diamond::TAB_NAME .
                ' WHERE ' . $selector;

                if(isset($page)) {
                    $query = $query . ' LIMIT ' . strval($page * DiamondHelper::resultPerPage) .' , ' . DiamondHelper::resultPerPage;
                }


                $stmt = $this->_db->prepare($query);
                if(!empty($carat_low)) { $stmt->bindParam(':carat_low',$carat_low); }
                if(!empty($carat_high)) { $stmt->bindParam(':carat_high',$carat_high); }
                if(!empty($price_low)) { $stmt->bindParam(':price_low',$price_low); }
                if(!empty($price_high)) { $stmt->bindParam(':price_high',$price_high); }

                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

        public function getDiamondCountWithFilter($shape,$cut,$color,$clarity,$carat_low,$carat_high,$price_low,$price_high,$page) {
            try {
                $res = [];

                $columns = ' count(1) ';

                $selector = '';
                if(!empty($shape)){
                    $shapestr = " '" . implode("','",$shape) . "' ";
                    $selector = $selector . Diamond::COL_SHAPE . ' in ( '. $shapestr .' ) AND ';
                }

                if(!empty($cut)){
                    $cutstr = " '" . implode("','",$cut) . "' ";
                    $selector = $selector . Diamond::COL_CUT . ' in ( '. $cutstr .' ) AND ';
                }

                if(!empty($color)){
                    $colorstr =  " '" . implode("','",$color) . "' ";
                    $selector = $selector . Diamond::COL_COLOR . ' in ( '.$colorstr.' ) AND ';
                }

                if(!empty($clarity)){
                    $claritystr = " '" . implode("','",$clarity) . "' ";
                    $selector = $selector .  Diamond::COL_CLARITY . ' in ( '.$claritystr.' ) AND ';
                }

                if(!empty($carat_low)){
                    $selector = $selector . Diamond::COL_CARAT . ' >= :carat_low AND ';
                }

                if(!empty($carat_high)){
                    $selector = $selector . Diamond::COL_CARAT . ' <= :carat_high AND ';
                }

                if(!empty($price_low)){
                    $selector = $selector . Diamond::COL_PRICE . ' >= :price_low AND ';
                }

                if(!empty($price_high)){
                    $selector = $selector . Diamond::COL_PRICE . ' <= :price_high AND ';
                }

                $selector = rtrim($selector," AND ");
                $query = 'SELECT ' . $columns .
                ' FROM ' . Diamond::TAB_NAME .
                ' WHERE ' . $selector;

                if(isset($page)) {
                    $query = $query . ' LIMIT ' . strval($page * DiamondHelper::resultPerPage) .' , ' . DiamondHelper::resultPerPage;
                }

                $stmt = $this->_db->prepare($query);
                if(!empty($carat_low)) { $stmt->bindParam(':carat_low',$carat_low); }
                if(!empty($carat_high)) { $stmt->bindParam(':carat_high',$carat_high); }
                if(!empty($price_low)) { $stmt->bindParam(':price_low',$price_low); }
                if(!empty($price_high)) { $stmt->bindParam(':price_high',$price_high); }

                $stmt->execute();
                $result = $stmt->fetchColumn();
                return $result;
            } catch(PDOException $e) {
                $res = [];
                $res['data'] = [];
                $res['error'] = true;
                return $res;
            }
        }

        // public function getDiamonds($page) {
        //     try {
        //         $res = [];

        //         $columns = Diamond::COL_ID . ' , ' .
        //         Diamond::COL_MAIN_IMAGE_URL . ' , ' .
        //         Diamond::COL_SHAPE . ' , ' .
        //         Diamond::COL_CARAT. ' , ' .
        //         Diamond::COL_COLOR . ' , ' .
        //         Diamond::COL_CLARITY . ' , ' .
        //         Diamond::COL_CUT . ' , ' .
        //         Diamond::COL_CERTI_URL . ' , ' .
        //         Diamond::COL_CERTI_TYPE . ' , ' .
        //         Diamond::COL_DEPTH . ' , ' .
        //         Diamond::COL_TABLE . ' , ' .
        //         Diamond::COL_PRICE;

        //         $query = 'SELECT ' . $columns .
        //         ' FROM ' . Diamond::TAB_NAME ;

        //         $stmt = $this->_db->query($query);
        //         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //         $res['data'] = $result;
        //         $res['error'] = false; 
        //         $stmt->closeCursor();
        //         return $res;
        //     } catch(PDOException $e) {
        //         $res = [];
        //         $res['data'] = $e->getMessage();
        //         $res['error'] = true;
        //         return $res;
        //     }
        // }

        // public function getDiamondCount($page) {
        //     try {
        //         $res = [];

        //         $columns = ' count(1) ';

        //         $query = 'SELECT ' . $columns .
        //         ' FROM ' . Diamond::TAB_NAME ;

        //         $stmt = $this->_db->query($query);
        //         $result = $stmt->fetchColumn();
        //         return $result;
        //     } catch(PDOException $e) {
        //         $res = [];
        //         $res['data'] = $e->getMessage();
        //         $res['error'] = true;
        //         return $res;
        //     }
        // }


        public static function getValuesBetween($array,$low,$high) {
            $ret = [];
            $i = 0; $go = false;
            foreach($array as $key=>$value) {
                if($value == $low) {
                    $go = true;
                }
                if($go) {
                    $ret[$i] = $value;
                    $i++;
                }
                if($value == $high) {
                    $go = false;
                }
            }
            return $ret;
        }

    }
?>