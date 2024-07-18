<?php

namespace App\Actions;

use App\Mail\MagicLoginLink;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class SendMagicLink
{
    use AsAction;

    // this function works as the $this->validate()
    public function rules(){
        return [
            'email' => ['required', 'email', Rule::exists(User::class, 'email')]
        ];
    }

    public function handle(string $email)
    {
        Mail::to($email)->send(new MagicLoginLink($email));

    }

    public function asController(ActionRequest $request)
    {
        $this->handle($request->email);
        return back()->with('success', 'Check your email for a magic login link');
    }

}
