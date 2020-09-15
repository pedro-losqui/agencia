<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $name, $email, $image, $password, $password_confirmation, $status;

    public function render()
    {   
        return view('livewire.user.index', [
            'users' => User::orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    public function store()
    {
        $data = $this->validate([
            'name'      => 'required|string',
            'email'     => 'required|string|email|unique:users',
            'image'     => 'image|max:1024',
            'password'  => 'required|string|min:8|confirmed',
            'status'    => 'required',
        ]);

        User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'image'     => $this->image->store('photos'),
            'password'  => Hash::make($this->password),
            'status'    => $this->status,
        ]);

        $this->default();
    }

    public function default()
    {
        $this->name     = '';
        $this->email    = '';
        $this->image    = '';
        $this->password = '';
        $this->status   = '';
    }


}
