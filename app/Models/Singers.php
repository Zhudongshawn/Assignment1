<?php
namespace App\Models;
use App\Models\Simple\JSONModel;
/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Singers extends JSONModel{

    //mock data : an array of records
    protected $origin = WRITEPATH . 'data/SingerData.json';
    protected $keyField = 'id'; 
    protected $validationRules = [];

}
