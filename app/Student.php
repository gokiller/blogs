<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const SEX_BOY = 1;
    const SEX_GIRL =2;

    protected $table = 'student';

    public $timestamps = false;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    public function sex($ind = null)
    {
        $arr = [
            self::SEX_BOY => '男',
            self::SEX_GIRL => '女',
        ];
        if ($ind !== null) {
            return array_key_exists($ind, $arr) ? $arr[$ind] : $arr[self::SEX_BOY];
        }
        return $arr;
    }
}
