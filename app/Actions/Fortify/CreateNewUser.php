<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class),],
            'image' => ['required', 'max:2048'],
            'contact_number' =>  ['required'],
            'password' => ['required'],
            'confirm_password' => 'required_with:password|same:password',
            'address' =>  ['required'],
            'apt_or_unit' =>  ['required'],
            'city' => ['required', 'string', 'max:100'],
            'state' => ['required'],
            'zip_code' => ['required', 'string', 'max:100'],
            'term' => ['required'],
        ], [
            'contact_number.required' => 'phone number field is required.',
            'term.required' => 'please confirm term and conditions.',
        ])->validate();

        $user = new User;

        if ($input['image'] && strpos($input['image'], "data:") !== false) {
            $image = $input['image'];
            $folderPath = ('storage/images/');
            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0775, true);
                chown($folderPath, exec('whoami'));
            }

            $image_parts = explode(";base64,", $image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_base64 = base64_decode($image_parts[1] ?? null) ?? null;
            $file_name = $user->id . '-' . md5(uniqid() . time()) . '.png';
            $imageFullPath = $folderPath . $file_name;
            file_put_contents($imageFullPath, $image_base64);

            //...
            $user->image = $file_name;
        }

        $user->role = $input['user_type'];
        $user->first_name = $input['first_name'];
        $user->last_name = $input['last_name'];
        $user->email = $input['email'];
        $user->contact_number = $input['contact_number'];
        $user->password = Hash::make($input['password']);
        $user->save();

        $detail = new UserDetails;
        $detail->user_id = $user->id;
        $detail->states_id = $input['state'];
        $detail->bio = $input['bio'];
        $detail->dob = $input['dob'] ?? null;
        $detail->ssn_or_tax = $input['ssn_or_tax'] ?? null;
        $detail->address = $input['address'];
        $detail->apt_or_unit = $input['apt_or_unit'];
        $detail->states_id = $input['state'];
        $detail->city = $input['city'];
        $detail->zip_code = $input['zip_code'];
        $detail->payment_method = $input['payment_method'];
        $detail->save();

        return $user;
    }
}
