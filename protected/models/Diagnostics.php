<?php

Yii::import('application.models._base.BaseDiagnostics');

class Diagnostics extends BaseDiagnostics
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}