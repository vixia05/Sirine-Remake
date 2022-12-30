<?php

use Illuminate\Support\Facades\Auth;
use App\Models\Privillage;
use App\Models\UserDetails;

class Helper {

    public static function getRole()
    {
        return Privillage::where('np_user',Auth::user()->np)->value('level_user');
    }

    public static function getUnit()
    {
        return UserDetails::where('np_user',Auth::user()->np)->value('id_unit');
    }

    public static function getWorkstation()
    {
        return UserDetails::where('np_user',Auth::user()->np)->value('id_workstation');
    }

}
