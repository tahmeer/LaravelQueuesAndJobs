<?php

namespace App\Jobs;

use App\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendTestMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $Students = Student::all('Email')->pluck('Email')->toArray();
            $data = array('name' => "Syed Tahmeer Hussain Naqvi", 'body' => "A Mail Testing Body");
            Mail::send('Mails.mail', $data, function ($message) use ($Students) {
                foreach ($Students as $items) {
                    $message->to($items)
                        ->subject('Laravel Mail Testing');
                }
            });
    }
}
