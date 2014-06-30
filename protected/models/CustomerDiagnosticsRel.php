<?php

Yii::import('application.models._base.BaseCustomerDiagnosticsRel');

class CustomerDiagnosticsRel extends BaseCustomerDiagnosticsRel
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}