<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Listing;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ListingCreatedMail extends Mailable
{
    use Queueable, SerializesModels;
    public $listing;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Listing $listing)
    {
        $this->listing = $listing;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('front.emails.listing_created')
        ->with([
            'listing' => $this->listing,
            'agent' => $this->listing->agent,

        ]);
    }
}
