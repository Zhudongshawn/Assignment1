<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Billie Eilish',
            'Country' => 'A singer in America',
            'image' => 'Billi.jpg',
            'age' => '18',
            'height' => '161',
            'weight' => '55',
            'favorite food' => 'ice cream',
            
        ],
        '2' => [
            'id' => 2,
            'name' => 'Taylor Swift',
            'Country' => 'A singer in America',
            'image' => 'Taylor.jpg',
            'age' => '30',
            'height' => '180',
            'weight' => '60',
            'favorite food' => 'cake',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Troye Sivan',
            'Country' => 'A singer in America',
            'image' => 'Troye.jpg',
            'age' => '25',
            'height' => '174',
            'weight' => '50',
            'favorite food' => 'cake',
            
        ],
        '4' => [
            'id' => 4,
            'name' => 'Ariana Grande',
            'Country' => 'A singer in America',
            'image' => 'Ariana.jpg',
            'age' => '27',
            'height' => '157',
            'weight' => '50',
            'favorite food' => 'milk',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Burno Mars',
            'Country' => 'A singer in America',
            'image' => 'Burno.jpg',
            'age' => '35',
            'height' => '165',
            'weight' => '70',
            'favorite food' => 'apple',
        ],
        
        '6' => [
            'id' => 6,
            'name' => 'Lady Gaga',
            'Country' => 'A singer in America',
            'image' => 'Lady.jpg',
            'age' => '34',
            'height' => '157',
            'weight' => '70',
            'favorite food' => 'banana',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
