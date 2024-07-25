<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePortfolio extends Model
{
    use HasFactory;

    protected $table = 'service_portfolios';

    protected $fillable = [
        'service_id',
        'portfolio_id',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function portfolio(){
        return $this->belongsTo(Portfolio::class);
    }
}
