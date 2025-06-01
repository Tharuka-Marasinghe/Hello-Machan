<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'My Restaurant'],
            ['key' => 'site_email', 'value' => 'dHl0V@example.com'],
            ['key' => 'site_phone', 'value' => '1234567890'],
            ['key' => 'site_address', 'value' => '123 Main St, Anytown, USA'],
        ];

        foreach ($settings as $setting) {
            Settings::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
