<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\SendAuthMail;
use Illuminate\Http\Request;
use App\Mail\RegisterEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    //

    public function sendRegisterMail() {

        $user = new User();

        $user->name = 'Kauê';
        $user->password = '123';
        $user->email = 'kaue10@example.com';

        $user->save();

        SendAuthMail::dispatch($user);
    }
}
