<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;
    
    public function update($field)
    {
        $this->validateOnly($field,[
            'current_password'=>'required',
            'password'=>'required|min:8|confirmed|different:current_password',  
        ]);
       
    }

    public function changePassword()
    {
        $this->validate([
            'current_password'=>'required',
            'password'=>'required|min:8|confirmed|different:current_password',
            
        ]);
        if(Hash::check($this->current_password,Auth::user()->password))
        {
            $user = User::findOrFail(Auth::user()->id);
            $user->password=Hash::make($this->password);
            $user->save();
            session()->flash('pass_msg','Password Has Been Changed Successfully!');
        }
        else
        {
            session()->flash('fail_msg','Password does not match!!');

        }
    }
    public function render()
    {
        $profile=Profile::where('user_id',Auth::user()->id)->first();
        if(!$profile){
            $profile=new Profile();
            $profile->user_id=Auth::user()->id;
            $profile->save();
        
        }
        $user=User::find(Auth::user()->id);
        return view('livewire.user.user-change-password-component',['user'=>$user])->layout('layouts.base');
    }
}
