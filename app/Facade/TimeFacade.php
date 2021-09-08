<?php


namespace App\Facade;


/**
 * @author https://github.com/CuaMcCarsaree44
 * @since September, 9/9/2021 2021 00:51:01
 *
 * TimeFacade
 * Time wizard for this project.
 */
class TimeFacade
{

    /*
    |--------------------------------------------------------------------------
    | This part is for messing with current timestamps
    |--------------------------------------------------------------------------
    |
    | This part will manipulate current timestamp.
    | Like, how you added a shorthand to tell "Add 5 minutes from now".
    |
    */
    public function epochTimeStringifier(): string
    {
        return date("d-m-Y H:i:s");
    }


}
