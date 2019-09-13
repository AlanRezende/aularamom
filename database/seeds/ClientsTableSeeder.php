<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'ALan',
                'cpf' => '2309029393',
                'data_nascimento' => '1988-10-29',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Ramom',
                'cpf' => '123123123213',
                'data_nascimento' => '1988-10-10',
                'created_at' => '2019-09-10 22:39:09',
                'updated_at' => '2019-09-10 22:39:09',
            ),
        ));
        
        
    }
}