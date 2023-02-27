<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  \App\Models\User::factory()->create([
      //       'name' => 'Test User',
      //     'email' => 'test@example.com',
     //    ]);

    //  \App\Models\User::factory(5)->create();


        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            
        ]);

    Listing::factory(30)->create([
        'user_id' => $user->id
    ]);

   /*  Listing::create([
        'title' => 'Senior Developer',
        'tags' => 'Java',
        'company' => 'Hipop',
        'location' => 'Makati ako',
        'email' => 'gadg@email.com',
        'website' => 'ssss',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare elementum nunc. Cras id vulputate purus, ut feugiat nisi. Sed eu accumsan ex, congue semper mi. Nam enim tortor, commodo eget facilisis sed, semper nec nisl. Pellentesque semper tellus nec quam tempus, eget tincidunt ante dignissim. Aenean sed vehicula massa. Mauris aliquam orci vitae hendrerit tincidunt. Etiam nec leo ac orci elementum fringilla.',
    ]);

    Listing::create([
        'title' => 'Junior Developer',
        'tags' => 'HTML',
        'company' => 'piperps',
        'location' => 'cdoc',
        'email' => 'hffg@email.com',
        'website' => 'ffff',
        'description' => 'Integer quam ligula, tincidunt eu orci sed, ullamcorper tempus erat. Sed sit amet augue pellentesque purus auctor efficitur. Fusce auctor ligula nec metus placerat, nec ultricies justo tincidunt. Phasellus mattis ipsum nec diam volutpat pretium. Quisque volutpat vehicula facilisis. Aenean in neque interdum massa mollis facilisis vitae eu sapien. Duis lacinia tincidunt venenatis. Proin ultrices purus eu malesuada accumsan. Ut maximus tristique urna, ut ultrices elit cursus et. Ut ante turpis, placerat ut sodales pulvinar, hendrerit id lectus.',
    ]); */

    }
}
