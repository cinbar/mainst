<?php

Yii::import('application.models._base.BaseCustomerPackageRel');

class CustomerPackageRel extends BaseCustomerPackageRel
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}