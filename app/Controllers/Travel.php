<?php
namespace App\Controllers;

class Travel extends BaseController
{
    public function index()
    {
        // connect to the model
    $singers = new \App\Models\Singers();
        // retrieve all the records
    $records = $singers->findAll();
    
        // get a template parser
    $parser = \Config\Services::parser();
    
    $table = new \CodeIgniter\View\Table();
    $headings = $singers->fields;
    $displayHeadings = array_slice($headings, 1, 3);
    $table->setHeading($headings[1],$headings[3],'Link');
    
    foreach ($records as $record) {
    
    $nameLink = anchor("travel/showme/$record->id",$record->name);
    $table->addRow($record->name,'<img src="/image/'.$record->image.'">',$nameLink);
    
    }   
    
    
   $template = [
        'table_open' => '<table cellpadding="5px">',
        'cell_start' => '<td style="border: 1px solid #dddddd;">', 
        'row_alt_start' => '<tr style="background-color:green">',
        ];
    $table->setTemplate($template);
    $fields = [
        'title' => 'Travel Destinations',
        'heading' => 'Travel Destinations', 
        'footer' => 'Copyright Xavier(Zhudong He)'
        ];
    return $parser->setData($fields)
      ->render('templates\top') .
    $table->generate() .
    $parser->setData($fields)
      ->render('templates\bottom');
        // tell it about the substitions
    return $parser->setData(['records' => $records])
        // and have it render the template with those
    ->render('placeslist');
    
    
    }
    public function showme($id)
    {
        // connect to the model
      $singers = new \App\Models\Singers();
        // retrieve all the records
      $record = $singers->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      $table = new \CodeIgniter\View\Table();
      $headings = $singers->fields;
      $headings = array_map("ucfirst", $headings);
      $table->addRow($record['id']);
      $table->addRow($record['name']);
      $table->addRow($record['Country']);
      $table->addRow( "<img src=\"/image/".$record['image']."\"/>");    
      $table->addRow($record['age']);
      $table->addRow($record['height']);
      $table->addRow($record['weight']);
      
      $template = [
          'table_open' => '<table cellpadding="5px">',
          'cell_start' => '<td style="border: 1px solid #dddddd;">', 
          'row_alt_start' => '<tr style="background-color:#dddddd">',
          ];
      
      $fields = [
        'title' => 'This singer',
        'heading' => 'This singer', 
        'footer' => 'Copyright Zhudong He'
        ];
      
      $table->setTemplate($template);
      return $parser->setData($fields)
         ->render('templates\top') .
      $table->generate() .
      $parser->setData($fields)
         ->render('templates\bottom');
      // and have it render the template with those
      
    }
}

 
