<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/31
 * Time: 18:23
 */
    class SportObject{
        public $name;
        public $height;
        public $avoirdupois;
        public $age;
        public $sex;
        public function __construct($name, $height, $avoirdupois, $age, $sex)
        {
            $this->name=$name;
            $this->height=$height;
            $this->avoirdupois= $avoirdupois;
            $this->age=$age;
            $this->sex=$sex;
        }
        public function bootFootBall() {
            if ($this->height<185 and $this->avoirdupois<85) {
                return $this->name."，符合踢足球的要求！";
            } else {
                return $this->name."，不符合踢足球的要求";
            }
        }
    }

    $sport = new SportObject('明日', '185', '80','20', '男');
    echo $sport->bootFootBall();