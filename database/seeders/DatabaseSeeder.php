<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\Form;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@filamentphp.com',
        ]);

        Form::create([
            'name' => 'form name',
        ]);
        Section::create([
            'name' => 'section name',
            'form_id' => 1,
        ]);
        Field::create([
            'name' => 'field name',
            'section_id' => 1,
        ]);
    }
}
