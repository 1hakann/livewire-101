<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username = 'testuser';

    public function createUser()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => '123456',
        ]);
    }

    public function render()
    {
        $title = "Test";

        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
