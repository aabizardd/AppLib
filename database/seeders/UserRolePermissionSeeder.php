<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value =[

            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        DB::begintransaction();
        try {
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name'  => 'admin',
                // 'password' => 'admin123'
            ], $default_user_value));
            $penyelia = User::create(array_merge([
                'email' => 'penyelia@gmail.com',
                'name'  => 'penyelia',
                // 'password' => 'penyelia123'
            ], $default_user_value));
            $petugas = User::create(array_merge([
                'email' => 'petugas@gmail.com',
                'name'  => 'petugas',
                //  'password' => 'admin123'

            ], $default_user_value));
    
            $role_admin    = Role::create(['name' => 'admin']);
            $role_penyelia = Role::create(['name' => 'penyelia']);
            $role_petugas  = Role::create(['name' => 'petugas']);
    
            $permission = Permission :: create(['name'=>'read role']);
            $permission = Permission :: create(['name'=>'create role']);
            $permission = Permission :: create(['name'=>'update role']);
            $permission = Permission :: create(['name'=>'delete role']);

            $role_admin->givePermissionTo('read role');
            $role_admin->givePermissionTo('create role');
            $role_admin->givePermissionTo('update role');
            $role_admin->givePermissionTo('delete role');
    
            $admin->assignRole('admin');
            $penyelia->assignRole('penyelia');
            $petugas->assignRole('petugas');
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}