<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "administrator@larashop.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("larashop");
        $administrator->phone = "08131515151";
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address ="Bintaro, Tangerang Selatan";

        $administrator->save();

        $this->command->info("user Admin berhasil diinsert");
    }
}
