<?php

Yii::import('application.models._base.BaseSocialComments');

class SocialComments extends BaseSocialComments
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}