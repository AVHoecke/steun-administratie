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
        return (Gezin::queryForObject($objectToQueryFor));
    }

    public static function getGezinByCode($code)
    {
        $objectToQueryFor = ['Code', 'like', '%' . $code . '%'];
        $gezin = Gezin::queryForObject($objectToQueryFor);
        // re-read to learn twice:
        return $gezin->first();
    }

    private static function queryForObject($object)
    {
        try {
            $collectionObject = DB::connection('mssql')->table('wvg.Gezin')->where($object[0], $object[1], $object[2])->get();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e);
        }
        return $collectionObject;
    }
}
