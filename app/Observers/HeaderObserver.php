<?php

namespace App\Observers;

use App\Http\Helpers\Helper;
use App\Models\Header;

class HeaderObserver
{
    /**
     * Handle the Header "saving" event.
     *
     * @param  \App\Models\Header  $header
     * @return void
     */
    public function saving(Header $header)
    {
        Helper::uploadBaner($header);
    }

    /**
     * Handle the Header "created" event.
     *
     * @param  \App\Models\Header  $header
     * @return void
     */
    public function created(Header $header)
    {
        //
    }

    /**
     * Handle the Header "updated" event.
     *
     * @param  \App\Models\Header  $header
     * @return void
     */
    public function updated(Header $header)
    {
        //
    }

    /**
     * Handle the Header "deleted" event.
     *
     * @param  \App\Models\Header  $header
     * @return void
     */
    public function deleted(Header $header)
    {
        //
    }

    /**
     * Handle the Header "restored" event.
     *
     * @param  \App\Models\Header  $header
     * @return void
     */
    public function restored(Header $header)
    {
        //
    }

    /**
     * Handle the Header "force deleted" event.
     *
     * @param  \App\Models\Header  $header
     * @return void
     */
    public function forceDeleted(Header $header)
    {
        //
    }
}
