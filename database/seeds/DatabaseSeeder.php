<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run() {

       

        DB::table('users')->insert([
            ['name' => 'luca', 'surname' => 'marcia', 'email' => 'luca@libero.it', 'username' => 'lucaluca',
                'password' => Hash::make('lucaluca'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'luca'],
            ['name' => 'staf', 'surname' => 'marcia', 'email' => 'luca@libero.it', 'username' => 'stafstaf',
                'password' => Hash::make('lucaluca'), 'role' => 'staf','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'staf'],
            ['name' => 'admin', 'surname' => 'marcia', 'email' => 'luca@libero.it', 'username' => 'adminadmin',
                'password' => Hash::make('lucaluca'), 'role' => 'admin','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'admin'],
            ['name' => 'pippo', 'surname' => 'coca', 'email' => 'pippo@coca.it', 'username' => 'pippococa',
                'password' => Hash::make('lucaluca'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'pippo'],
            ['name' => 'edo', 'surname' => 'taru', 'email' => 'edo@taru.it', 'username' => 'edoedo',
                'password' => Hash::make('lucaluca'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'edo'],
            ['name' => 'diego', 'surname' => 'migna', 'email' => 'diego@migna.it', 'username' => 'diedie',
                'password' => Hash::make('lucaluca'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'ciao mi chiamo diego faccio l universita e vivo in ancona in casa con edoardo tarulli (purtroppo)'],
            ['name' => 'fb', 'surname' => 'fb', 'email' => 'fb@michele.it', 'username' => 'fabioblack',
                'password' => Hash::make('lucaluca'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'edo'],
            ['name' => 'dio', 'surname' => 'santo', 'email' => 'dio@santo.it', 'username' => 'dioasanto',
                'password' => Hash::make('lucaluca'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'edo']
        
        ]);

        //utenti predefiniti

        DB::table('users')->insert([
            ['name' => 'user', 'surname' => 'user', 'email' => 'user@gmail.it', 'username' => 'useruser',
                'password' => Hash::make('useruser'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'user'],
            ['name' => 'staf', 'surname' => 'staf', 'email' => 'staf@libero.it', 'username' => 'stafstaf',
                'password' => Hash::make('stafstaf'), 'role' => 'staf','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'staf'],
            ['name' => 'admin', 'surname' => 'admin', 'email' => 'admin@gmail.it', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'role' => 'admin','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'data_nascita' => date("Y-m-d H:i:s"), 'descrizione'=> 'admin'],
        
        ]);


        DB::table('amicizia')->insert([
            ['richiedente' => 4, 'destinatario' => 1,
                'visualizzata' => 1, 'stato' => 1, 'data' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['richiedente' => 5, 'destinatario' => 1,
                'visualizzata' => 1, 'stato' => 1, 'data' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['richiedente' => 6, 'destinatario' => 1,
                'visualizzata' => 1, 'stato' => 1, 'data' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['richiedente' => 7, 'destinatario' => 1,
                'visualizzata' => 1, 'stato' => 1, 'data' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['richiedente' => 1, 'destinatario' => 8,
                'visualizzata' => 1, 'stato' => 1, 'data' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            
        ]);

    }

}
