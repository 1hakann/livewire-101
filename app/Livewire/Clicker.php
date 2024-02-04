<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Clicker extends Component
{
    #[Rule('required|min:2|max:50')]
    public $name = "";

    #[Rule('required|email|unique:users')]
    public $email = "";

    #[Rule('required|min:2|max:50')]
    public $password = "";

    // protected function rules()
    // {
    //     return [
    //         'name' => 'required|min:2|max:50',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:2|max:50',
    //     ];
    // }

    // protected $rules = [
    //     'videoFile' => 'required|mimes:mp4|max:1228800'
    // ];

    public function createUser()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.clicker', [
            'users' => $users
        ]);
    }
}
