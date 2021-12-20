<?php

namespace App\Models;

use Illuminate\Database\SEloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gezin extends Model
{

    public static function getGezinnenByNaam($naam)
    {
        $objectToQueryFor = ['Naam', 'like', '%' . $naam . '%'];
        return (Gezin::queryForObject($objectToQueryFor));
    }

    public static function getById($gezinId)
    {
        $objectToQueryFor = ['ID Gezin', 'like', '%' . $gezinId . '%'];
        $gezin = Gezin::queryForObject($objectToQueryFor);
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
