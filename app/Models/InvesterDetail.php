<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvesterDetail extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'religion',
        'email',
        'mobile',
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
        'aadhar_card_number',
        'pan_card',
        'pan_card_number',
        'label1_name',
        'label1_image',
        'label2_name',
        'label2_image',
        'label3_name',
        'label3_image',
        'label4_name',
        'label4_image',
    ];
}
