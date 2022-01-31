<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class EditRequest extends Mailable
{
    // use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	protected $user;
	protected $message;
	protected $editable_tabs;
	
    public function __construct(User $user,$message=null,$editable_tabs=null)
    {
         $this->user = $user;
         $this->message = $message;
         $this->editable_tabs = $editable_tabs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.editrequest',['user'=>$this->user,'message_info'=>$this->message,'editable_tabs'=>$this->editable_tabs]);
    }
}
