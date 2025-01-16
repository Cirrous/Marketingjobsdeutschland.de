<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\Tag;

class ListingsTableSeeder extends Seeder
{
    public function run()
    {
        // Create some tags first
        $tags = [
            'Laravel',
            'PHP',
            'Vue.js',
            'React',
            'Frontend',
            'Backend',
            'Full Stack'
        ];

        foreach ($tags as $tagName) {
            Tag::create(['name' => $tagName]);
        }

        // Create test listings
        $listings = [
            [
                'title' => 'Senior Laravel Developer',
                'company' => 'TechCorp Berlin',
                'location' => 'Berlin, Germany',
                'apply_link' => 'https://example.com/apply',
                'content' => 'We are looking for a senior Laravel developer to join our team...',
                'is_highlighted' => true,
                'is_active' => true
            ],
            [
                'title' => 'Frontend React Developer',
                'company' => 'StartupHub',
                'location' => 'Remote',
                'apply_link' => 'https://example.com/apply2',
                'content' => 'Looking for an experienced React developer...',
                'is_highlighted' => false,
                'is_active' => true
            ],
            // Add more listings as needed
        ];

        foreach ($listings as $listing) {
            $newListing = Listing::create($listing);
            // Attach random tags to each listing
            $newListing->tags()->attach(Tag::inRandomOrder()->limit(3)->get());
        }
    }
}