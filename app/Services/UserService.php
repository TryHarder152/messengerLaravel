<?php

namespace App\Services;

use App\Models\User;
use http\Exception;
use Illuminate\Support\Facades\Hash;

class UserService {
    public function store($data) {
        try {
            $data['password'] = Hash::make($data['password']);

            User::firstOrCreate(["email" => $data['email']], $data);
        } catch(Exception $exception) {
            return 'such a user already exists';
        }
    }

    public function update($data, $user) {
        try {
            $data['password'] = Hash::make(($data['password']));

            $user->update($data);
        } catch(Exception $exception) {
            return 'such a user already exists';
        }
    }
}
