<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/31
 * Time: 18:53
 */
    class SportObject{
        public $name;
        public $age;
        public $avoirdupois;
        public $sex;
        public function __construct($name, $age, $avoirdupois, $sex)
        {
            $this->name = $name;
            $this->age = $age;
            $this->avoirdupois = $avoirdupois;
            $this->sex = $sex;
        }
        function showMe() {
            echo '这句话不显示';
        }
    }

    class BeatBasketBall extends SportObject{
        public $height;
        function __construct($name, $height)
        {
            $this->height = $height;
            $this->name = $name;
        }
        function showMe() {
            if ($this->height>185) {
                return $this->name.'，符合打篮球要求';
            } else {
                return $this->name.'，不符合打篮球要求';
            }
        }
    }

    class WeightLifting extends SportObject{
        function showMe(){
            if ($this->avoirdupois<85) {
                return $this->name.'，符合举重要求';
            } else {
                return $this->name.'，不符合举重要求';
            }
        }
    }

    // 实例化对象
    $beatbasketball = new BeatBasketBall('科技', '190');
    $weightlifting = new WeightLifting('明日', ' 185', '80', '20', '男');
    echo $beatbasketball->showMe().'<br>';
    echo $weightlifting->showMe().'<br>';