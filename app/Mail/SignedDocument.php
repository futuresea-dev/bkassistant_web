<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class SignedDocument extends Mailable
{
    // use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	protected $client;
	protected $sign_doc;
	protected $attorney_name;
    public function __construct(User $client,$sign_doc="",$attorney_name=""){
		 $this->client = $client;
         $this->sign_doc = $sign_doc;
         $this->attorney_name = $attorney_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sign_doc_submission',['client'=>$this->client,'sign_doc'=>$this->sign_doc,'attorney_name'=>$this->attorney_name]);
    }
}
