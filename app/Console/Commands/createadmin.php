<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class createadmin extends Command
{

    protected $signature = 'create:admin';
    protected $description = 'This command will create an admin';

    public function handle()
    {
        if (!User::where('email','=','admin@admin.com')->first()){
            User::create([
                'name' => 'Admin',
                'email' =>'admin@admin.com',
                'role' => 'admin',
                'password'=> Hash::make('12345')
            ]);
            $this->info('Created Successfully');
        }else{
            $this->info('Already Exist');
        }
        return 0;
    }
}
