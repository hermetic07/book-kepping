<?php

use Illuminate\Database\Seeder;

class GuardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guard = new \App\guards([
          'name'=>'Guard1',
          'address'=>'Manila',
          'age' => '21'
        ]);
        $guard -> save();

        $guard = new \App\guards([
          'name'=>'Guard2',
          'address'=>'Makati',
          'age' => '21'
        ]);
        $guard -> save();

        $guard = new \App\guards([
          'name'=>'Guard3',
          'address'=>'Mandaluyong',
          'age' => '21'
        ]);
        $guard -> save();

        $guard = new \App\guards([
          'name'=>'Guard4',
          'address'=>'Manila',
          'age' => '21'
        ]);
        $guard -> save();

        $guard = new \App\guards([
          'name'=>'Guard5',
          'address'=>'Pasig',
          'age' => '21'
        ]);
        $guard -> save();

        $guard = new \App\guards([
          'name'=>'Guard6',
          'address'=>'Pasay',
          'age' => '21'
        ]);
        $guard -> save();
    }
}
