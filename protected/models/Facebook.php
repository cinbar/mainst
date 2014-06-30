<?php

Yii::import('application.models._base.BaseFacebook');

class Facebook extends BaseFacebook
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}