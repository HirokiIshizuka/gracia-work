<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
/**
 * Brand Entity
 *
 * @property int $id
 * @property int $name
 */
class Product extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    public function getDeliveryDate($i) {
        $weekList = array("日", "月", "火", "水", "木", "金", "土");
        if (!isset($i)) {
           $i = 5;
        }
        if ($weekList[date("w", strtotime("+{$i}day"))] == "土") {
            $j = $i + 2;
            $myDate = date("m/d", strtotime("{$j}day"));
            $myDate .= "(".$weekList[date("w", strtotime("+{$j}day"))].")";
        } elseif ($weekList[date("w", strtotime("+{$i}day"))] == "日") {
            $j = $i + 1;
            $myDate = date("m/d", strtotime("{$j}day"));
            $myDate .= "(".$weekList[date("w", strtotime("+{$j}day"))].")";
        } else {
            $myDate = date("m/d", strtotime("{$i}day"));
            $myDate .= "(".$weekList[date("w", strtotime("+{$i}day"))].")";
        }
        echo $myDate;
    }
}
