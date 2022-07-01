<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\support\facades\DB;
class Empleado_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('empleado')->insert([
    
            'nombre'=>'hhhhh',
           'apellido'=>'hhhhhh',
           'direccion'=>'jjjjjj',
           'telefono'=>'kkkkkk',
           

        ]);
    }
}
