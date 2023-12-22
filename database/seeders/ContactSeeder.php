<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = new \App\Models\Contact([
            'name' => 'Contact #1',
            'number' => '2342872839'
        ]);
        $contact->save();

        $contact = new \App\Models\Contact([
            'name' => 'Contact #2',
            'number' => '3247862736'
        ]);
        $contact->save();

        $contact = new \App\Models\Contact([
            'name' => 'Contact #3',
            'number' => '4627362984'
        ]);
        $contact->save();
    }
}
