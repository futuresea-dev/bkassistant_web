<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class FinalSubmission extends Mailable
{
    // use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	protected $client_name;
	protected $attorney;
    public function __construct(User $attorney,$client_name){
		 $this->client_name = $client_name;
         $this->attorney = $attorney;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.final_submission',['client_name'=>$this->client_name,'attorney'=>$this->attorney]);
    }
}
