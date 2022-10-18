<?php

namespace App\Http\Livewire\Cleaner;

use Livewire\Component;
use App\Models\User;
use App\Models\UserDetails;

class ProfileUpdate extends Component
{
    public $email, $timezone, $first_name, $last_name, $contact_number, $address;
    public $savefile;
    public $fieldStatus = false, $action;

    public function changeStatus($id)
    {
        // dd($status);

        $editValue = User::find($id);
        if ($editValue->status == 1) {
            $cleanerDetail = User::find($id);
            $this->first_name = $cleanerDetail->name;
            $this->last_name = $cleanerDetail->name;
            $this->contact_number = $cleanerDetail->phone;
            $this->email = $cleanerDetail->email;
            $cleanerDetail = UserDetails::find($id);
            $this->address = $cleanerDetail->address;
        } else {
            $editValue->status = 0;
            $editValue->save();
        }
    }

    public function editData($userId, $action)
    {
        $user = User::find($userId);
        $this->userId = $userId;
        if ($action == 'name') {
            $this->name = $user->name;
        }
        if ($action == 'contact_number') {
            $this->contact_number = $user->contact_number;
        }
        if ($action == 'email') {
            $this->email = $user->email;
        }
        if ($action == 'address') {
            $this->address = $user->details->address;
        }
        if ($action == 'bio') {
            $this->bio = $user->details->bio;
        }

        $this->action = $action;

        $this->fieldStatus = true;
    }

    public function cancle()
    {
        $this->fieldStatus = false;
    }

    public function updateData($action)
    {
        

        if ($this->userId) {
            $user = User::find($this->userId);
            if ($action == 'name') {
                $name = explode(' ', $this->name);
                $user->first_name = @$name[0];
                $user->last_name = @$name[1];
            }
            if ($action == 'contact_number') {
                $user->contact_number = $this->contact_number;
            }
            if ($action == 'email') {
                $user->email = $this->email;
            }
            $user = UserDetails::find($this->userId);
            dd($user);
            if ($action == 'address') {
                $user->details->address = $this->address;
            }
            if ($action == 'bio') {
                $user->details->bio = $this->bio;
            }
            $user->update();

            $this->fieldStatus = false;
        }
    }



    public function render()
    {

        $user = User::findOrFail(auth()->user()->id);
        // dd( $user->details);
        return view('livewire.cleaner.profile-update', compact('user'));
    }
}
