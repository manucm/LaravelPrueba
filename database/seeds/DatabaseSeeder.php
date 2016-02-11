<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // unguard y reguard sirve para anular
      // fillable mientras se aplican los seeders
      // luego vuelven a quedarse inactivos
      Model::unguard();

      $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
