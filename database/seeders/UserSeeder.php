<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->delete();

        $users = [
            [ 
                'name' => 'John', 
                'lastname' => 'Doe', 
                'identification' => '123456789', 
                'email' => 'john.doe@example.com', 
                'address' => '123 Main St', 
                'phone' => '555-1234', 
                'birthdate' => '1990-01-01', 
                'gender' => 'male', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password123')
            ],
            [ 
                'name' => 'Jane', 
                'lastname' => 'Smith', 
                'identification' => '987654321', 
                'email' => 'jane.smith@example.com', 
                'address' => '456 Elm St', 
                'phone' => '555-5678', 
                'birthdate' => '1992-02-02', 
                'gender' => 'female', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password456')
            ],
            [
                'name' => 'Michael', 
                'lastname' => 'Johnson', 
                'identification' => '1122334455', 
                'email' => 'michael.johnson@example.com', 
                'address' => '789 Pine St', 
                'phone' => '555-7890', 
                'birthdate' => '1988-03-03', 
                'gender' => 'male', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password789')
            ],
            [
                'name' => 'Emily', 
                'lastname' => 'Davis', 
                'identification' => '5566778899', 
                'email' => 'emily.davis@example.com', 
                'address' => '321 Oak St', 
                'phone' => '555-6543', 
                'birthdate' => '1993-04-04', 
                'gender' => 'female', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password101')
            ],
            [
                'name' => 'David', 
                'lastname' => 'Brown', 
                'identification' => '9988776655', 
                'email' => 'david.brown@example.com', 
                'address' => '654 Cedar St', 
                'phone' => '555-4321', 
                'birthdate' => '1991-05-05', 
                'gender' => 'male', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password202')
            ],
            [
                'name' => 'Sarah', 
                'lastname' => 'Miller', 
                'identification' => '3344556677', 
                'email' => 'sarah.miller@example.com', 
                'address' => '987 Maple St', 
                'phone' => '555-9876', 
                'birthdate' => '1989-06-06', 
                'gender' => 'female', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password303')
            ],
            [
                'name' => 'James', 
                'lastname' => 'Wilson', 
                'identification' => '4433221100', 
                'email' => 'james.wilson@example.com', 
                'address' => '654 Walnut St', 
                'phone' => '555-8765', 
                'birthdate' => '1987-07-07', 
                'gender' => 'male', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password404')
            ],
            [
                'name' => 'Olivia', 
                'lastname' => 'Martinez', 
                'identification' => '5566770011', 
                'email' => 'olivia.martinez@example.com', 
                'address' => '321 Birch St', 
                'phone' => '555-7654', 
                'birthdate' => '1994-08-08', 
                'gender' => 'female', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password505')
            ],
            [
                'name' => 'Daniel', 
                'lastname' => 'Taylor', 
                'identification' => '6677889900', 
                'email' => 'daniel.taylor@example.com', 
                'address' => '456 Cherry St', 
                'phone' => '555-6547', 
                'birthdate' => '1995-09-09', 
                'gender' => 'male', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password606')
            ],
            [
                'name' => 'Ava', 
                'lastname' => 'Anderson', 
                'identification' => '2233445566', 
                'email' => 'ava.anderson@example.com', 
                'address' => '789 Poplar St', 
                'phone' => '555-9870', 
                'birthdate' => '1996-10-10', 
                'gender' => 'female', 
                'status' => 'active', 
                'program_id' => rand(1, 7),
                'password' => Hash::make('password707')
            ],
        ];

        foreach($users as $user){        
          
            User::create($user);
          }
    }
}
