<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Metal Fabrication',
                'description' => 'Custom metal fabrication services for various industries.',
                'status' => true
            ],
            [
                'title' => 'Welding Services',
                'description' => 'Professional welding services for all types of metals.',
                'status' => true
            ],
            [
                'title' => 'Sheet Metal Work',
                'description' => 'Precision sheet metal fabrication and forming.',
                'status' => true
            ]
        ];

        foreach ($services as $service) {
            Service::create([
                'title' => $service['title'],
                'slug' => Str::slug($service['title']),
                'description' => $service['description'],
                'status' => $service['status']
            ]);
        }
    }
} 