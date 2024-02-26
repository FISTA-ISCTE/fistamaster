<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Users;

class CVverify extends Component
{

    public $users;
    public $currentUserIndex=0;
    

    public function mount()
    {
        $this->loadUsers();
    }


    public function loadUsers()
    {
        $this->users = Users::whereNotNull("file")->whereNull("cv_verify")->get(); // Fetch all users from the database
    }


    public function cvChecked($cvState)
    {
        // Your database update logic here
        // For example, you can update a specific column to 1 for the current user
        if ($this->users->isNotEmpty()) {
            $user = $this->users[$this->currentUserIndex];
            if($cvState == 'good' ){
                $user->update(['cv_verify' => 1]);
            }else if($cvState == 'bad'){
                $user->decrement('pontos', 10000);
                $user->update(['cv_verify' => 0]);
            }
        }

        $this->loadNextUser();
    }



    public function loadNextUser()
    {
        
        if ($this->currentUserIndex < count($this->users)) {
            $this->currentUserIndex++;
        }
    }

    public function render()
    {
        return view('livewire.c-vverify',[
            'currentUser' => $this->users[$this->currentUserIndex] ?? null,
        ]);
    }
}
