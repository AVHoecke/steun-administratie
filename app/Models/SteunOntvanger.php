<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SteunOntvanger extends Model
{
    use HasFactory;

    public static function getAllByGezinId($gezinId)
    {
        $objectToQueryFor = ['ID Gezin', 'like', $gezinId];
        $steunOntvangers = SteunOntvanger::queryForObject($objectToQueryFor);
        $steunOntvangers = $steunOntvangers->all();
        return $steunOntvangers;
    }

    private static function queryForObject($object)
    {
        try {
            $collectionObject = DB::connection('mssql')->table('wvg.Steun Ontvanger')->where($object[0], $object[1], $object[2])->get();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e);
        }
        return $collectionObject;
    }
}