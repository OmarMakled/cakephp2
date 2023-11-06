<?php
App::uses('AppModel', 'Model');
/**
 * WorkingHour Model
 *
 * @property Retailes $Retailes
 */
class WorkingHour extends AppModel {
	public $belongsTo = array(
        'Retail' => array(
            'className' => 'Retailer',
            'foreignKey' => 'retailer_id'
        )
    );
}
