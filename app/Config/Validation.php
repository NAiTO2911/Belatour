<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $user = [
        'full_name'         => 'required',
        'email'             => 'trim|required|valid_email|is_unique[user.email]',
        'username'          => 'trim|required|is_unique[user.username]',
        'phone_number'      => 'trim|required|numeric|is_unique[user.phone_number]',
        'password'          => 'required'
    ];

    public $user_errors = [
        'full_name'=> ['required'  => 'Full Name is required.'],
        'email'=> [
            'required'      => 'Email is required.',
            'valid_email'   => 'Email entered is not valid.',
            'is_unique'     => 'Email entered is already registered.'
        ],
        'username'=> [
            'required'  => 'User Name is required.',
            'is_unique' => 'User Name entered is already registered.'
        ],
        'phone_number'=> [
            'required'  => 'Phone Number is required.',
            'numeric'   => 'Phone Number must be numbers',
            'is_unique' => 'Phone Number entered is already registered.'
        ],
        'background'=> ['required'  => 'Background is required.'],
        'organization_name'=> ['required'  => 'Organization Name is required.'],
        'password'=> ['required'  => 'Password is required.']
    ];
    
    public $login = [
        'id_user'   => 'trim|required',
        'password'  => 'trim|required'
    ];
    
    public $login_errors = [
        'id_user'   => ['required'  => 'Email/Username/Phone Number is required.'],
        'password'  => ['required'  => 'Password is required.']
    ];
}
