<?php

namespace App\Models;
use illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class InvesterDetail extends Model
{
    protected $guarded= [];

    public function additional_documents(): HasMany
    {
        return $this->hasMany(AdditionalDocument::class);
    }
}
