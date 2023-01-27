<?php

namespace App\Observers;

use App\Models\Instance;
use App\Models\Tenant;
use Illuminate\Support\Str;

class InstanceObserver
{
    /**
     * Handle the Post "creating" event.
     *
     * @param Instance $instance
     * @return void
     */
    public function creating(Instance $instance)
    {
//        $tenant = Tenant::create(['id' => request()->domain_slug]);
//        $tenant->domains()->create(['domain' => request()->domain_slug]);
//
//        if (!$instance->active) {
//            $tenant->putDownForMaintenance();
//        }
    }

    /**
     * Handle the Instance "created" event.
     *
     * @param  \App\Models\Instance  $instance
     * @return void
     */
    public function created(Instance $instance)
    {
        //
    }

    /**
     * Handle the Post "updating" event.
     *
     * @param Instance $instance
     * @return void
     */
    public function updating(Instance $instance)
    {
//        $tenant = tenancy()->find($instance->domain);
//        if (!$instance->active) {
//            $tenant->putDownForMaintenance();
//        } else {
//            $tenant->update(['maintenance_mode' => null]);
//        }
    }

    /**
     * Handle the Instance "updated" event.
     *
     * @param  \App\Models\Instance  $instance
     * @return void
     */
    public function updated(Instance $instance)
    {
        //
    }

    /**
     * Handle the Instance "deleted" event.
     *
     * @param  \App\Models\Instance  $instance
     * @return void
     */
    public function deleted(Instance $instance)
    {
        //
    }

    /**
     * Handle the Instance "restored" event.
     *
     * @param  \App\Models\Instance  $instance
     * @return void
     */
    public function restored(Instance $instance)
    {
        //
    }

    /**
     * Handle the Instance "force deleted" event.
     *
     * @param  \App\Models\Instance  $instance
     * @return void
     */
    public function forceDeleted(Instance $instance)
    {
        //
    }
}
