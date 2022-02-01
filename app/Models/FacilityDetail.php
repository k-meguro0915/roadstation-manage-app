<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'CID',
        'facility_code',
        'UID',
        'name',
        'name_furi',
        'recommendation_name',
        'recommendation_desc',
        'start_time1',
        'end_time1',
        'time_supplement1',
        'start_time2',
        'end_time2',
        'time_supplement2',
        'start_time3',
        'end_time3',
        'time_supplement3',
        'checkin_time',
        'checkout_time',
        'regular_holiday',
        'holiday_supplement1',
        'holiday_supplement2',
        'tel',
        'tel_supplement',
        'price',
        'detail_link',
        'is_pay_to_credit',
        'is_pay_to_e_money',
        'is_pay_to_barcode',
        'is_closed'
    ];
}
