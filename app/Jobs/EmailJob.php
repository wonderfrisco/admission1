<?php

namespace App\Jobs;

use App\Mail\UserPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $name;
    public $password;
    public function __construct(public array $data)
    {
        $this->email = $data['email'];
        $this->name = $data['name'];
        $this->password = $data['password'];
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new UserPassword(['name' => $this->name, 'password' => $this->password]));
    }
}
