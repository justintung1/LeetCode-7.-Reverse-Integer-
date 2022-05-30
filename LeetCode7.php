<?php
    class Solution {

        /**
         * @param Integer $x
         * @return Integer
         */
        function reverse($x) {
            $final="";
            if($x<0){
                $final.="-";
            }
            $str=strval($x);
            $ans=strrev($str);
            for($i=0;$i<strlen($ans);$i++){
                if($i==0&&$ans[0]!=0){
                    $final.=$ans[$i];
                }
                else if($i!=0){
                    $final.=$ans[$i];
                }
            }
            $final_ans=(int)$final;
            if($final_ans<=2147483647&&$final_ans>=-2147483648)
                return $final_ans;
            else{
                return 0;
            }
        }
    }
?>