<?php
App::uses('AppModel', 'Model');
/**
 * Retailer Model
 *
 */
class Retailer extends AppModel {
    public $hasMany = array(
        'WorkingHour' => array(
            'className' => 'WorkingHour',
            'foreignKey' => 'retailer_id'
        )
    );
}
