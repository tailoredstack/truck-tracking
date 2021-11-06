<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'truck' => [
        'title' => 'Truck',

        'actions' => [
            'index' => 'Truck',
            'create' => 'New Truck',
            'show' => 'Show Truck',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'truck' => [
        'title' => 'Truck',

        'actions' => [
            'index' => 'Truck',
            'create' => 'New Truck',
            'show' => 'Show Truck',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'color' => 'Color',
            'manufacturer' => 'Manufacturer',
            'no_of_wheels' => 'No of wheels',
            'plate_no' => 'Plate no',
            'type' => 'Type',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];