<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeProteinArray
{



    function dailyIntakeProteinWomenArray($heightInMeters, $imt){

        if ($heightInMeters >=1.47 and $heightInMeters <=1.53) {

            $dailyIntakeProteinArray[19] = 54;
            $dailyIntakeProteinArray[20] = 56;
            $dailyIntakeProteinArray[21] = 56;
            $dailyIntakeProteinArray[22] = 59;
            $dailyIntakeProteinArray[23] = 61;
            $dailyIntakeProteinArray[24] = 61;
            $dailyIntakeProteinArray[25] = 62;
            $dailyIntakeProteinArray[26] = 63;
            $dailyIntakeProteinArray[27] = 66;
            $dailyIntakeProteinArray[28] = 66;
            $dailyIntakeProteinArray[29] = 67;
            $dailyIntakeProteinArray[30] = 69;
            $dailyIntakeProteinArray[31] = 71;
            $dailyIntakeProteinArray[32] = 72;
            $dailyIntakeProteinArray[33] = 74;
            $dailyIntakeProteinArray[34] = 74;
            $dailyIntakeProteinArray[35] = 76;
            $dailyIntakeProteinArray[36] = 77;
            $dailyIntakeProteinArray[37] = 80;
            $dailyIntakeProteinArray[38] = 80;
            $dailyIntakeProteinArray[39] = 82;
            $dailyIntakeProteinArray[40] = 83;
            $dailyIntakeProteinArray[41] = 85;
            $dailyIntakeProteinArray[42] = 86;
            $dailyIntakeProteinArray[43] = 86;
            $dailyIntakeProteinArray[44] = 88;
            $dailyIntakeProteinArray[45] = 89;


        }

        if ($heightInMeters >=1.54 and $heightInMeters <=1.63) {

            $dailyIntakeProteinArray[19] = 66;
            $dailyIntakeProteinArray[20] = 70;
            $dailyIntakeProteinArray[21] = 72;
            $dailyIntakeProteinArray[22] = 73;
            $dailyIntakeProteinArray[23] = 74;
            $dailyIntakeProteinArray[24] = 76;
            $dailyIntakeProteinArray[25] = 77;
            $dailyIntakeProteinArray[26] = 78;
            $dailyIntakeProteinArray[27] = 81;
            $dailyIntakeProteinArray[28] = 82;
            $dailyIntakeProteinArray[29] = 84;
            $dailyIntakeProteinArray[30] = 84;
            $dailyIntakeProteinArray[31] = 87;
            $dailyIntakeProteinArray[32] = 89;
            $dailyIntakeProteinArray[33] = 91;
            $dailyIntakeProteinArray[34] = 93;
            $dailyIntakeProteinArray[35] = 95;
            $dailyIntakeProteinArray[36] = 96;
            $dailyIntakeProteinArray[37] = 97;
            $dailyIntakeProteinArray[38] = 99;
            $dailyIntakeProteinArray[39] = 102;
            $dailyIntakeProteinArray[40] = 103;
            $dailyIntakeProteinArray[41] = 105;
            $dailyIntakeProteinArray[42] = 106;
            $dailyIntakeProteinArray[43] = 109;
            $dailyIntakeProteinArray[44] = 109;
            $dailyIntakeProteinArray[45] = 111;


        }

        if ($heightInMeters >=1.64 and $heightInMeters <=1.73) {

            $dailyIntakeProteinArray[19] = 80;
            $dailyIntakeProteinArray[20] = 82;
            $dailyIntakeProteinArray[21] = 85;
            $dailyIntakeProteinArray[22] = 85;
            $dailyIntakeProteinArray[23] = 88;
            $dailyIntakeProteinArray[24] = 89;
            $dailyIntakeProteinArray[25] = 92;
            $dailyIntakeProteinArray[26] = 94;
            $dailyIntakeProteinArray[27] = 97;
            $dailyIntakeProteinArray[28] = 97;
            $dailyIntakeProteinArray[29] = 98;
            $dailyIntakeProteinArray[30] = 102;
            $dailyIntakeProteinArray[31] = 103;
            $dailyIntakeProteinArray[32] = 105;
            $dailyIntakeProteinArray[33] = 106;
            $dailyIntakeProteinArray[34] = 109;
            $dailyIntakeProteinArray[35] = 110;
            $dailyIntakeProteinArray[36] = 113;
            $dailyIntakeProteinArray[37] = 115;
            $dailyIntakeProteinArray[38] = 117;
            $dailyIntakeProteinArray[39] = 118;
            $dailyIntakeProteinArray[40] = 120;
            $dailyIntakeProteinArray[41] = 122;
            $dailyIntakeProteinArray[42] = 125;
            $dailyIntakeProteinArray[43] = 126;
            $dailyIntakeProteinArray[44] = 129;
            $dailyIntakeProteinArray[45] = 130;


        }

        if ($heightInMeters >=1.74 and $heightInMeters <=1.83) {

            $dailyIntakeProteinArray[19] = 93;
            $dailyIntakeProteinArray[20] = 95;
            $dailyIntakeProteinArray[21] = 97;
            $dailyIntakeProteinArray[22] = 100;
            $dailyIntakeProteinArray[23] = 102;
            $dailyIntakeProteinArray[24] = 104;
            $dailyIntakeProteinArray[25] = 106;
            $dailyIntakeProteinArray[26] = 108;
            $dailyIntakeProteinArray[27] = 110;
            $dailyIntakeProteinArray[28] = 113;
            $dailyIntakeProteinArray[29] = 115;
            $dailyIntakeProteinArray[30] = 117;
            $dailyIntakeProteinArray[31] = 119;
            $dailyIntakeProteinArray[32] = 121;
            $dailyIntakeProteinArray[33] = 124;
            $dailyIntakeProteinArray[34] = 126;
            $dailyIntakeProteinArray[35] = 129;
            $dailyIntakeProteinArray[36] = 129;
            $dailyIntakeProteinArray[37] = 131;
            $dailyIntakeProteinArray[38] = 133;
            $dailyIntakeProteinArray[39] = 136;
            $dailyIntakeProteinArray[40] = 138;
            $dailyIntakeProteinArray[41] = 141;
            $dailyIntakeProteinArray[42] = 143;
            $dailyIntakeProteinArray[43] = 146;
            $dailyIntakeProteinArray[44] = 148;
            $dailyIntakeProteinArray[45] = 150;


        }

        return $dailyIntakeProteinArray[$imt];

    }


    function dailyIntakeProteinMenArray($heightInMeters, $imt){

        if ($heightInMeters >=1.45 and $heightInMeters <=1.63) {

            $dailyIntakeProteinArray[19] = 82;
            $dailyIntakeProteinArray[20] = 84;
            $dailyIntakeProteinArray[21] = 86;
            $dailyIntakeProteinArray[22] = 87;
            $dailyIntakeProteinArray[23] = 89;
            $dailyIntakeProteinArray[24] = 92;
            $dailyIntakeProteinArray[25] = 92;
            $dailyIntakeProteinArray[26] = 93;
            $dailyIntakeProteinArray[27] = 95;
            $dailyIntakeProteinArray[28] = 97;
            $dailyIntakeProteinArray[29] = 98;
            $dailyIntakeProteinArray[30] = 99;
            $dailyIntakeProteinArray[31] = 102;
            $dailyIntakeProteinArray[32] = 104;
            $dailyIntakeProteinArray[33] = 105;
            $dailyIntakeProteinArray[34] = 107;
            $dailyIntakeProteinArray[35] = 109;
            $dailyIntakeProteinArray[36] = 110;
            $dailyIntakeProteinArray[37] = 111;
            $dailyIntakeProteinArray[38] = 114;
            $dailyIntakeProteinArray[39] = 116;
            $dailyIntakeProteinArray[40] = 117;
            $dailyIntakeProteinArray[41] = 119;
            $dailyIntakeProteinArray[42] = 120;
            $dailyIntakeProteinArray[43] = 122;
            $dailyIntakeProteinArray[44] = 125;
            $dailyIntakeProteinArray[45] = 127;


        }

        if ($heightInMeters >=1.64 and $heightInMeters <=1.73) {

            $dailyIntakeProteinArray[19] = 97;
            $dailyIntakeProteinArray[20] = 98;
            $dailyIntakeProteinArray[21] = 99;
            $dailyIntakeProteinArray[22] = 102;
            $dailyIntakeProteinArray[23] = 104;
            $dailyIntakeProteinArray[24] = 106;
            $dailyIntakeProteinArray[25] = 107;
            $dailyIntakeProteinArray[26] = 110;
            $dailyIntakeProteinArray[27] = 110;
            $dailyIntakeProteinArray[28] = 114;
            $dailyIntakeProteinArray[29] = 115;
            $dailyIntakeProteinArray[30] = 118;
            $dailyIntakeProteinArray[31] = 119;
            $dailyIntakeProteinArray[32] = 120;
            $dailyIntakeProteinArray[33] = 122;
            $dailyIntakeProteinArray[34] = 125;
            $dailyIntakeProteinArray[35] = 127;
            $dailyIntakeProteinArray[36] = 131;
            $dailyIntakeProteinArray[37] = 131;
            $dailyIntakeProteinArray[38] = 132;
            $dailyIntakeProteinArray[39] = 135;
            $dailyIntakeProteinArray[40] = 136;
            $dailyIntakeProteinArray[41] = 139;
            $dailyIntakeProteinArray[42] = 140;
            $dailyIntakeProteinArray[43] = 141;
            $dailyIntakeProteinArray[44] = 143;
            $dailyIntakeProteinArray[45] = 146;


        }

        if ($heightInMeters >=1.74 and $heightInMeters <=1.83) {

            $dailyIntakeProteinArray[19] = 107;
            $dailyIntakeProteinArray[20] = 113;
            $dailyIntakeProteinArray[21] = 115;
            $dailyIntakeProteinArray[22] = 119;
            $dailyIntakeProteinArray[23] = 119;
            $dailyIntakeProteinArray[24] = 122;
            $dailyIntakeProteinArray[25] = 125;
            $dailyIntakeProteinArray[26] = 127;
            $dailyIntakeProteinArray[27] = 129;
            $dailyIntakeProteinArray[28] = 131;
            $dailyIntakeProteinArray[29] = 132;
            $dailyIntakeProteinArray[30] = 135;
            $dailyIntakeProteinArray[31] = 137;
            $dailyIntakeProteinArray[32] = 139;
            $dailyIntakeProteinArray[33] = 141;
            $dailyIntakeProteinArray[34] = 143;
            $dailyIntakeProteinArray[35] = 146;
            $dailyIntakeProteinArray[36] = 148;
            $dailyIntakeProteinArray[37] = 150;
            $dailyIntakeProteinArray[38] = 151;
            $dailyIntakeProteinArray[39] = 153;
            $dailyIntakeProteinArray[40] = 155;
            $dailyIntakeProteinArray[41] = 159;
            $dailyIntakeProteinArray[42] = 161;
            $dailyIntakeProteinArray[43] = 163;
            $dailyIntakeProteinArray[44] = 165;
            $dailyIntakeProteinArray[45] = 169;


        }

        if ($heightInMeters >=1.84 and $heightInMeters <=1.93) {

            $dailyIntakeProteinArray[19] = 126;
            $dailyIntakeProteinArray[20] = 130;
            $dailyIntakeProteinArray[21] = 132;
            $dailyIntakeProteinArray[22] = 133;
            $dailyIntakeProteinArray[23] = 137;
            $dailyIntakeProteinArray[24] = 140;
            $dailyIntakeProteinArray[25] = 141;
            $dailyIntakeProteinArray[26] = 143;
            $dailyIntakeProteinArray[27] = 147;
            $dailyIntakeProteinArray[28] = 149;
            $dailyIntakeProteinArray[29] = 151;
            $dailyIntakeProteinArray[30] = 154;
            $dailyIntakeProteinArray[31] = 157;
            $dailyIntakeProteinArray[32] = 159;
            $dailyIntakeProteinArray[33] = 162;
            $dailyIntakeProteinArray[34] = 162;
            $dailyIntakeProteinArray[35] = 165;
            $dailyIntakeProteinArray[36] = 159;
            $dailyIntakeProteinArray[37] = 171;
            $dailyIntakeProteinArray[38] = 173;
            $dailyIntakeProteinArray[39] = 176;
            $dailyIntakeProteinArray[40] = 177;
            $dailyIntakeProteinArray[41] = 180;
            $dailyIntakeProteinArray[42] = 183;
            $dailyIntakeProteinArray[43] = 185;
            $dailyIntakeProteinArray[44] = 187;
            $dailyIntakeProteinArray[45] = 191;


        }

        return $dailyIntakeProteinArray[$imt];


    }

    function dailyIntakeProteinActivityWomenArray($activity, $age){

        if ($age>=18 and $age<=29) {
            $dailyIntakeProteinActivityWomenArray[1] = [78,43];
            $dailyIntakeProteinActivityWomenArray[2] = [77,42];
            $dailyIntakeProteinActivityWomenArray[3] = [81,45];
            $dailyIntakeProteinActivityWomenArray[4] = [87,48];
            $dailyIntakeProteinActivityWomenArray[5] = [0,0];
        }
        if ($age>=30 and $age<=39) {
            $dailyIntakeProteinActivityWomenArray[1] = [75,41];
            $dailyIntakeProteinActivityWomenArray[2] = [74,41];
            $dailyIntakeProteinActivityWomenArray[3] = [78,43];
            $dailyIntakeProteinActivityWomenArray[4] = [84,46];
            $dailyIntakeProteinActivityWomenArray[5] = [0,0];
        }
        if ($age>=40 and $age<=59) {
            $dailyIntakeProteinActivityWomenArray[1] = [72,40];
            $dailyIntakeProteinActivityWomenArray[2] = [70,39];
            $dailyIntakeProteinActivityWomenArray[3] = [75,41];
            $dailyIntakeProteinActivityWomenArray[4] = [80,44];
            $dailyIntakeProteinActivityWomenArray[5] = [0,0];
        }

        return $dailyIntakeProteinActivityWomenArray[$activity];


    }


    function dailyIntakeProteinActivityMenArray($activity, $age){

        if ($age>=18 and $age<=29) {
            $dailyIntakeProteinActivityMenArray[1] = [91,50];
            $dailyIntakeProteinActivityMenArray[2] = [90,49];
            $dailyIntakeProteinActivityMenArray[3] = [96,53];
            $dailyIntakeProteinActivityMenArray[4] = [102,56];
            $dailyIntakeProteinActivityMenArray[5] = [118,65];
        }
        if ($age>=30 and $age<=39) {
            $dailyIntakeProteinActivityMenArray[1] = [88,48];
            $dailyIntakeProteinActivityMenArray[2] = [87,48];
            $dailyIntakeProteinActivityMenArray[3] = [93,51];
            $dailyIntakeProteinActivityMenArray[4] = [99,54];
            $dailyIntakeProteinActivityMenArray[5] = [113,62];
        }
        if ($age>=40 and $age<=59) {
            $dailyIntakeProteinActivityMenArray[1] = [83,56];
            $dailyIntakeProteinActivityMenArray[2] = [82,45];
            $dailyIntakeProteinActivityMenArray[3] = [88,48];
            $dailyIntakeProteinActivityMenArray[4] = [95,52];
            $dailyIntakeProteinActivityMenArray[5] = [107,59];
        }

        return $dailyIntakeProteinActivityMenArray[$activity];


    }



}
