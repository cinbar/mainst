<?php

Yii::import('application.models._base.BaseLinkedin');

class Linkedin extends BaseLinkedin
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}