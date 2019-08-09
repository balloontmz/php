<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 14:22
 */
    $an = array(1);
    for ($n = 0; $n <10; $n++) {
        $anp = array();
        foreach ($an as $key=>$value) {
            if ($key == 0) {
                array_push($anp, 1);
            } else {
                $temp = $an[$key-1] + $an[$key];
                array_push($anp, $temp);
            }
        }
        array_push($anp, 1);
        print_r($anp);
        $an = $anp;
    }