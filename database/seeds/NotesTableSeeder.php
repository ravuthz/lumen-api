<?php

use Illuminate\Database\Seeder;
use App\Note;

class NotesTableSeeder extends Seeder
{
    public function run()
    {
        for ($i=1; $i<=10; $i++) {
            Note::create(array(
                'title' => 'test note ' . $i,
                'description' => 'test note 1 full text description',
                'author' => 1
            ));
        }
        
    }
}