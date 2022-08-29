<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $avatar;
    public $avatar_link;

    public $typed_code;
    public $random_code;
    public $disabled;

    public function mount()
    {
        $this->random_code = rand(11111,99999);
        $this->avatar_link = auth()->user()->avatar;
    }
    public function save()
    {
        $this->validate([
            'avatar' => 'required|image|max:1024', // 1MB Max
        ]);

        $upload_name = $this->avatar->store('avatars');
        User::find(auth()->id())->update([
            'avatar' => $upload_name
        ]);
        $this->avatar_link = $upload_name;
        session()->flash('success', 'Avatar successfully updated.');
    }
    public function checker()
    {
        if($this->typed_code == $this->random_code){
            $this->disabled = true;
        }
        else{
            $this->disabled = false;
        }
    }
    public function deleteaccount()
    {
        User::find(auth()->id())->delete();
        Auth::logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.profile.edit');
    }
}
