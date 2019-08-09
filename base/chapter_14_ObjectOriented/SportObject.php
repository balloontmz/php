<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/31
 * Time: 17:58
 */
    class SportObject{
        public $name;
        public $height;
        public $avoirdupois;

        public function bootFootBall($name, $height, $avoirdupois) {
            $this->name = $name;
            $this->height = $height;
            $this->avoirdupois = $avoirdupois;
            if ($this->height<185 and $this->avoirdupois<85) {
                return $this->name."，符合踢足球的要求！";
            } else {
                return $this->name."，不符合踢足球的要求！";
            }
        }
    }

    $sport = new SportObject();
    echo $sport->bootFootBall('明日', '185', '80');