<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('customers')->delete();
        DB::table('customers')->truncate();
        DB::table('customers')->insert([            
            'name'=>'user1',
            'password'=>'password1',
            'created_date'=>Carbon::now(),
            'created_by'=>'Seeder',
        ]
        );

        DB::table('customers')->insert([            
            'name'=>'user2',
            'password'=>'password2',
            'created_date'=>Carbon::now(),
            'created_by'=>'Seeder',
        ]        
    );

    DB::table('customers')->insert([            
        'name'=>'user3',
        'password'=>'password3',
        'created_date'=>Carbon::now(),
        'created_by'=>'Seeder',
    ]        
);
    }
}
