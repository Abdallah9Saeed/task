<?php


namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';

    // protected $appends = ["due",'created'];


    // public function getDueAttribute()
    // {
    //     return Carbon::createFromTimestamp($this->due)->toDateTimeString()->format('Y-m-d');
    // }
    // public function getCreatedAttribute()
    // {
    //     return Carbon::createFromTimestamp($this->created)->toDateTimeString()->format('Y-m-d');
    // }
}
