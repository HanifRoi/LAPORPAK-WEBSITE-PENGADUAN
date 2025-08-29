<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Report extends Model
{
    protected $fillable = [
        'code',
        'resident_id',
        'report_category_id',
        'title',
        'description',
        'image',
        'latitude',
        'longitude',
        'address'
    ];

    public function resident(){
        //satu laporan dimiliki oleh satu resident
        return $this->belongsTo(Resident::class);
    }

    public Function category(){
        //satuu laporan dimiliki oleh satu category
        return $this->belongsTo(ReportCategory::class);
    }
}
