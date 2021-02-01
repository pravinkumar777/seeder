<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = 10;
        
        $gender    = ['male','female'];

        for ($i=1; $i <= $customers; $i++) { 
                        $random = array_rand($gender);
                        $customer[] = [
                            
                                'name' => str::random(10),
                                'email' => str::random(7).'@gmail.com',
                                'phone_number' => rand('100000000','9999999999'),
                                'gender' => $gender[$random] ,
                                'dob' => '08-03-2001',
                                'country' => 'India'               
                ];
                
        }
       
       DB::table('customers')->insert($customer);
        
    }
}
