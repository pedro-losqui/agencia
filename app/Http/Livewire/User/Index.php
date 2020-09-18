<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $user_id, $name, $email, $image, $password, $password_confirmation, $status;

    public function render()
    {   
        return view('livewire.user.index', [
            'users' => User::orderBy('id', 'DESC')->paginate(10)
        ]);

        $this->default();
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
            'image'     => $this->image->store('avatars', 'public'),
            'password'  => Hash::make($this->password),
            'status'    => $this->status,
        ]);

        $this->default();
    }

    public function edit($id)
    {
        $user = User::Find($id);

        $this->user_id  = $user->id;
        $this->name     = $user->name;
        $this->email    = $user->email;
        $this->status   = $user->status;
    }

    public function update()
    {
        $data = $this->validate([
            'name'      => 'required|string',
            'email'     => ['required', Rule::unique('users')->ignore($this->user_id)],
            'status'    => 'required',
        ]);

        $user = User::Find($this->user_id);
        
        $user->update($data);

        if (!empty($this->image)) {
            $user->update([
                'image' => $this->image->store('avatars', 'public'),
            ]);
        }

        $this->edit($this->user_id);

    }

    public function destroy($id)
    {
        User::destroy($id);
    }

    public function default()
    {
        $this->name     = '';
        $this->email    = '';
        $this->image    = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->status   = '';
    }


}
