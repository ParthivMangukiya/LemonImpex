<?php
    class Diamond {

        const TAB_NAME = 'diamond';
        const COL_ID = 'id';
        const COL_STOCK_NUMBER = 'stock_number';
        const COL_MAIN_IMAGE_URL = 'main_image_url';
        const COL_CARAT = 'carat';
        const COL_SHAPE = 'shape';
        const COL_COLOR = 'color';
        const COL_CLARITY = 'clarity';
        const COL_CUT = 'cut';
        const COL_DEPTH = 'depth_percentage';
        const COL_TABLE = 'table_percentage';
        const COL_CERTI_URL = 'certificate_url';
        const COL_CERTI_TYPE = 'certificate_type';
        const COL_MEASURE_LENGTH = 'measurement_length';
        const COL_MEASURE_WIDTH = 'measurement_width';
        const COL_MEASURE_HEIGHT = 'measurement_height';
        const COL_MEASURE_TYPE = 'measurement_type';
        const COL_GRIDLE = 'gridle';
        const COL_CULET = 'culet';
        const COL_FLUORESCENCE = 'fluorescence';
        const COL_PRICE = 'price';


        //shape

        //cut
        const CUT_GOOD = 'good';
        const CUT_VERY_GOOD = 'very good';
        const CUT_EXCELLENT = 'excellent';
        const CUT_IDEAL = 'ideal';
        const CUT_SUPER_IDEAL = 'super ideal';
        const cuts = array(Diamond::CUT_GOOD,Diamond::CUT_VERY_GOOD,Diamond::CUT_EXCELLENT,Diamond::CUT_IDEAL,Diamond::CUT_SUPER_IDEAL);
        //color

        const COLOR_D = 'd';
        const COLOR_E = 'e';
        const COLOR_F = 'f';
        const COLOR_G = 'g';
        const COLOR_H = 'h';
        const COLOR_I = 'i';
        const COLOR_J = 'j';
        const COLOR_K = 'k';
        const COLOR_L = 'l';
        const COLOR_M = 'm';
        const colors = array(Diamond::COLOR_D,Diamond::COLOR_E,Diamond::COLOR_F,Diamond::COLOR_G,Diamond::COLOR_H,Diamond::COLOR_I,Diamond::COLOR_J,Diamond::COLOR_K,Diamond::COLOR_L,Diamond::COLOR_M);

        //clarity

        const CLARITY_FL = 'fl';
        const CLARITY_IF = 'if';
        const CLARITY_VVS1 = 'vvs1';
        const CLARITY_VVS2 = 'vvs2';
        const CLARITY_VS1 = 'vs1';
        const CLARITY_VS2 = 'vs2';
        const CLARITY_SI1 = 'si1';
        const CLARITY_SI2 = 'si2';
        const CLARITY_SI3 = 'si3';
        const CLARITY_I1 = 'i1';

        const clarities = array(
        Diamond::CLARITY_FL
        ,Diamond::CLARITY_IF
        ,Diamond::CLARITY_VVS1
        ,Diamond::CLARITY_VVS2
        ,Diamond::CLARITY_VS1       
        ,Diamond::CLARITY_VS2      
        ,Diamond::CLARITY_SI1       
        ,Diamond::CLARITY_SI2        
        ,Diamond::CLARITY_SI3        
        ,Diamond::CLARITY_I1);

    }
?>