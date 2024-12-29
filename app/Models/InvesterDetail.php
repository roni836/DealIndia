<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvesterDetail extends Model
{
    protected $fillable = [
        'user_id',
        'vr_code',
        'range_code',
        'company_code',
        'noc_number',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'religion',
        'email',
        'contact_number',
        'bank_name',
        'account_number',
        'ifsc_code',
        'account_holder_name',
        'account_type',
        'street_address',
        'city',
        'state',
        'country',
        'postal_code',
        'aadhar_card',
        'pan_card'
    ];
}
