<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
class AdditionalDocument extends Model
{
    protected $guarded= [];

    public function investor_detail(): HasOne
    {
        return $this->HasOne(InvestorDetail::class, 'id', 'investor_detail_id');
    }
}
