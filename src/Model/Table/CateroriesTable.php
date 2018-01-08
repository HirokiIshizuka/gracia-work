<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class CategoriesTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Posts');
        $this->belongsTo('Parents');
    }

}
?>
