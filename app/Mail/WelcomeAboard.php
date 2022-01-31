<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WelcomeAboard extends Mailable
{
    // use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	protected $user;
	protected $attorney;
	protected $flag;
	protected $subscription_video;
	protected $thumbnail_video_image;
	
    public function __construct(User $user,$flag=false,$attorney=null,$subscription_video=null,$thumbnail_video_image=null)
    {
         $this->user = $user;
         $this->attorney = $attorney;
         $this->flag = $flag;
         $this->subscription_video = $subscription_video;
         $this->thumbnail_video_image = $thumbnail_video_image;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome',['user'=>$this->user,'attorney'=>$this->attorney,'regiser'=> $this->flag,'subscription_video'=> $this->subscription_video,'thumbnail_video_image'=> $this->thumbnail_video_image]);
    }
}
