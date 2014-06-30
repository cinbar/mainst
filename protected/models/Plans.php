<?php

Yii::import('application.models._base.BasePlans');

class Plans extends BasePlans
{
       public $typeArray = array('Monthly'=>'Monthly',
                                 'Yearly'=>'Yearly',
                                 'One Time'=>'One Time',
                                );
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	
	public function getPlanInfo(){
		return $this->price." ".$this->name;
	}
     
}