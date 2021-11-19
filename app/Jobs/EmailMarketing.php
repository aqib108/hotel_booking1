<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\MarketingEmail;
use Mail;
class EmailMarketing implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }
    public function handle()
    {
        $emails = $this->details['email'];
        $data['message'] = $this->details['message'];
        $data['subject'] =  $this->details['subject'];
        
        Mail::to($emails)->send(new MarketingEmail($data));
        
        
        
    }
}
