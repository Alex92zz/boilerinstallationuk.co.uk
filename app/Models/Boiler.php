<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boiler extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'meta_description',
        'meta_keywords',
        'price',
        'main_description',
        'secondary_description',
        'spec_1',
        'spec_2',
        'spec_3',
        'spec_4',
        'spec_5',
        'brand',
        'dimensions',
        'flow_rate', // Changed from 'flow-rate' to 'flow_rate' to use an underscore
        'ErP_rating_heating', // Changed from 'ErP-rating-heating' to 'ErP_rating_heating' to use underscores
        'ErP_rating_DHW', // Changed from 'ErP-rating-DHW' to 'ErP_rating_DHW' to use underscores
        'ErP_efficiency', // Changed from 'ErP-efficiency' to 'ErP_efficiency' to use underscores
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];
}
