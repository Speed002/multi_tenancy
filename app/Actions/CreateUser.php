<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Validation\Rule;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateUser
{
    use AsAction;

    // this function works as the $this->validate()
    public function rules(){
        return [
            'email' => ['required', 'email', Rule::unique(User::class, 'email')],
            'name' => ['required', 'max:255'],
        ];
    }

    public function handle(string $email, string $name)
    {
        return User::create([
            'name' => $name,
            'email' => $email
        ]);
    }

    public function asController(ActionRequest $request, SendMagicLink $sendMagicLink)
    {
        $user = $this->handle($request->email, $request->name);
        $sendMagicLink->handle($user->email);
        return back()->with('success', 'Check your email address for a login link');
    }
}
