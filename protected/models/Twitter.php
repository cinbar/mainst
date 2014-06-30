<?php

Yii::import('application.models._base.BaseTwitter');

class Twitter extends BaseTwitter
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}