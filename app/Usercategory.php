<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Usercategory extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public static function userCategory($id){
        //$category = Usercategory::where('id', '=', "$id") ->firstorFail();
        $query =  DB::table('usercategories')
            ->where([
                ['id', '=', $id]
            ])->orderBy('id', 'DESC')->get();
        return $query{0}->name;
    }
}
