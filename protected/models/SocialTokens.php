<?php

Yii::import('application.models._base.BaseSocialTokens');

class SocialTokens extends BaseSocialTokens
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}