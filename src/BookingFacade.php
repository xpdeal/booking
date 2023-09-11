<?php

namespace Xpdeal\Booking;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xpdeal\Booking\Skeleton\SkeletonClass
 */
class BookingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'booking';
    }
}
