<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;

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

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'User created successfully');
    }

    public function render()
    {
        $users = User::paginate(2);

        return view('livewire.clicker', [
            'users' => $users
        ]);
    }
}
