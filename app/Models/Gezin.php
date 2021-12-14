<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gezin extends Model
{
    use HasFactory;

    public static function getGezinnenByNaam($naam)
    {
        $objectToQueryFor = ['Naam', 'like', '%' . $naam . '%'];
        try {
            $gezinnen = DB::connection('mssql')->table('wvg.Gezin')->where($objectToQueryFor[0], $objectToQueryFor[1], $objectToQueryFor[2])->get();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e);
        }
        return $gezinnen;
    }

    public static function getGezinByCode($code)
    {
        $objectToQueryFor = ['Code', 'like', '%' . $code . '%'];
        try {
            $gezin = DB::connection('mssql')->table('wvg.Gezin')->where($objectToQueryFor[0], $objectToQueryFor[1], $objectToQueryFor[2])->get();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e);
        }
        // re-read to learn twice:
        return $gezin->first();
    }
}
