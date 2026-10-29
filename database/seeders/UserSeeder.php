<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email'    => 'admin@bansud.gov.ph',
                'name'     => 'Admin User',
                'password' => 'Password123!',
                'role'     => User::ROLE_ADMIN,
            ],
            [
                'email'    => 'bplo@bansud.gov.ph',
                'name'     => 'BPLO Staff',
                'password' => 'Password123!',
                'role'     => User::ROLE_BPLO,
            ],
            [
                'email'    => 'treasurer@bansud.gov.ph',
                'name'     => 'Treasurer Staff',
                'password' => 'Password123!',
                'role'     => User::ROLE_TREASURER,
            ],
            [
                'email'    => 'inspector@bansud.gov.ph',
                'name'     => 'Inspector Staff',
                'password' => 'Password123!',
                'role'     => User::ROLE_INSPECTOR,
            ],
            [
                'email'    => 'applicant@example.com',
                'name'     => 'Sample Applicant',
                'password' => 'Password123!',
                'role'     => User::ROLE_APPLICANT,
            ],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name'      => $data['name'],
                    'password'  => bcrypt($data['password']),
                    'role'      => $data['role'],
                    'is_active' => true,
                ],
            );
        }
    }
}
