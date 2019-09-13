<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date' => '2019-09-01',
                'status' => 'C',
                'client_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'date' => '2019-09-02',
                'status' => 'N',
                'client_id' => 1,
                'created_at' => '2019-09-10 23:05:21',
                'updated_at' => '2019-09-10 23:05:21',
            ),
            2 => 
            array (
                'id' => 3,
                'date' => '2019-09-02',
                'status' => 'C',
                'client_id' => 1,
                'created_at' => '2019-09-10 23:06:59',
                'updated_at' => '2019-09-10 23:06:59',
            ),
            3 => 
            array (
                'id' => 5,
                'date' => '2019-09-02',
                'status' => 'C',
                'client_id' => 2,
                'created_at' => '2019-09-10 23:07:54',
                'updated_at' => '2019-09-10 23:07:54',
            ),
        ));
        
        
    }
}