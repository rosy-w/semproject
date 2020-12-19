<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Permission;
use App\User;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        /*Roles are added here */
        $user = Role::create([
            'name' => 'user',
            'display_name' => 'Normal User', // optional
            'description' => 'User is registered on the site and is allowed to order and make reservations.', // optional
        ]);
        
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator', // optional
            'description' => 'User is allowed to manage users and the menu', // optional
        ]);

        /*Permissions are added here */
        $createItem = Permission::create([
            'name' => 'create-item',
            'display_name' => 'Add Food Items', // optional
            'description' => 'Add new food items to the existing menu', // optional
        ]);
            
        $editUser = Permission::create([
            'name' => 'edit-user',
            'display_name' => 'Edit Users', // optional
            'description' => 'edit existing users', // optional
        ]);

        $createOrder = Permission::create([
            'name' => 'create-order',
            'display_name' => 'Order Food', // optional
            'description' => 'Order Food on the Website', // optional
        ]);

        $createReservation = Permission::create([
            'name' => 'create-reservation',
            'display_name' => 'Create Reservation', // optional
            'description' => 'create new reservation', // optional
        ]);


        /* Assign Permissions to each role */
        //$admin->attachPermission([$createItem,$editUser]); // parameter can be a Permission object, array or id
        $admin->permissions()->sync([$createItem->id,$editUser->id]);

        // equivalent to $owner->permissions()->sync([$createPost->id, $editUser->id]);

        // $user->attachPermissions([$createOrder,$createReservation]); // parameter can be a Permission object, array or id
        // // equivalent to $owner->permissions()->attach([$editUser->id]);
        // $user->syncPermissions([$createOrder,$createReservation]); // parameter can be a Permission object, array or id
        $user->permissions()->sync([$createOrder->id, $createReservation->id]);

         /*Create a default User for each Role */
         $adminuser = User::create([
             'name' => 'Administrator1',
             'email' => 'admin1@gmail.com', 
             'password' => Hash::make('123456789'), 
         ]);
         $normaluser = User::create([
             'name' => 'User1',
             'email' => 'user1@gmail.com', 
             'password' => Hash::make('123456789'), 
         ]);

         $adminuser->roles()->attach([$admin->id]);
         $normaluser->roles()->attach([$user->id]);

    }
 
}
