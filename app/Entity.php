<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Entity extends Model {

    protected $table = null;
    protected $date = ['deleted_at'];

    public static function uniqIDEightLength() {
        return strtoupper(str_pad(dechex(crc32(self::uniqID())), 8, '0', STR_PAD_LEFT));
    }
    public static function uniqID()
    {
        return hash('sha256', uniqid());
    }
//    protected function getDateFormat() {
//        return 'U';
//    }

    public static function boot() {
        parent::boot();
        // Setup event bindings...
        static::created(function($entity) {

            Schema::table($entity->table, function (Blueprint $table) use($entity) {
                if (Schema::hasColumn($entity->table, 'unique_code')) {
                    $uniqueCode = self::generateUniqueCode($entity); //uniqid();//uniqid(strtoupper(str_replace("_", "", $entity->table)));//Utility::uniqID();
                    //\Log::info("Table Name : {$entity->table} -- Entity ID: {$entity->id}");
                    $sql = "UPDATE {$entity->table} SET unique_code = '{$uniqueCode}' WHERE id = {$entity->id}";
                    //\Log::info("{$sql} \n");
                    DB::statement($sql);
                }
            });
        });
    }

    public static function generateUniqueCode($entity) {
        //$uniqueCode = uniqid();
        $uniqueCode = self::uniqIDEightLength($entity);
        $rs = DB::select("SELECT unique_code FROM {$entity->table} WHERE unique_code = '{$uniqueCode}'");
        foreach ($rs as $row) {
            if ($row->unique_code === $uniqueCode) {
                self::generateUniqueCode($entity);
            }
        }
        return $uniqueCode;
    }

}
