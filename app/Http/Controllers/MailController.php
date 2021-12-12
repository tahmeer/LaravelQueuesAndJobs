<?php

namespace App\Http\Controllers;

use App\Jobs\SendTestMailJob;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail()
    {
// --------------------------------------------------FIrst Method to Use ------------------------------------------------------------
        // dispatch(function () {
        //     $Students = Student::all('Email')->pluck('Email')->toArray();
        //     $data = array('name' => "Syed Tahmeer Hussain Naqvi", 'body' => "A Mail Testing Body");
        //     Mail::send('Mails.mail', $data, function ($message) use ($Students) {
        //         foreach ($Students as $items) {
        //             $message->to($items)
        //                 ->subject('Laravel Mail Testing');
        //         }
        //     });
        // })->delay(now()->addSecond());

// --------------------------------------------------Second Method to Use ------------------------------------------------------------

            // -------------------------Both Are Same -------------------------------------
        // dispatch(new SendTestMailJob)->delay(now()->addSecond());
        //  SendTestMailJob::dispatch()->delay(now()->addSecond());

// --------------------------------------------------Third Method to Use ------------------------------------------------------------


        return redirect('/');
    }
}
