<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package\TravelPackage;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $travelPackages = [
            [
                'image' => 'image1.jpg',
                'title' => 'Travel Package 1',
                'slug' => 'travel-package-1',
                'location' => 'Location 1',
                'about' => 'About Travel Package 1',
                'featured_event' => 'Featured Event 1',
                'language' => 'English',
                'foods' => 'Food 1, Food 2',
                'departure_date' => '2023-01-01',
                'duration' => '5 days',
                'type' => 'Type 1',
                'price' => 1000,
            ],
            [
                'image' => 'image2.jpg',
                'title' => 'Travel Package 2',
                'slug' => 'travel-package-2',
                'location' => 'Location 2',
                'about' => 'About Travel Package 2',
                'featured_event' => 'Featured Event 2',
                'language' => 'Spanish',
                'foods' => 'Food 3, Food 4',
                'departure_date' => '2023-02-01',
                'duration' => '7 days',
                'type' => 'Type 2',
                'price' => 1500,
            ],
            // Add more travel package entries as needed
        ];

        // Insert the data into the travel_packages table
        foreach ($travelPackages as $travelPackage) {
            TravelPackage::create($travelPackage);
        }
    }
}
