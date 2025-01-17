<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\DB;

class Zone extends Model
{
    use HasFactory;

    protected $table = 'zones';

    protected $fillable = [
        'title',
        'status',
        'coordinates',
        'alias',
    ];




    // Accessor for coordinates to return in the desired format



    public function setgeojsonAttribute($value){
        dd($value);
    }

    public function setwktAttribute($value){
        dd($value);
    }


    // public function setCoordinatesAttribute($value)
    // {
    //     if (is_string($value)) {
    //         $this->attributes['coordinates'] = DB::raw("ST_GeomFromText('{$value}')");
    //     } else {
    //         throw new \InvalidArgumentException('Invalid coordinates format.');
    //     }
    // }
    // // public function setCoordinatesAttribute($value)
    // {
    //     if (is_string($value)) {
    //         // Split the string into individual coordinate pairs
    //         $coordinates = array_map('trim', explode(',', $value));
    //     } elseif (is_array($value)) {
    //         // Format coordinates array as ["(lat,lng)", ...]
    //         $coordinates = array_map(fn($point) => "({$point['latitude']},{$point['longitude']})", $value);
    //     } else {
    //         throw new \InvalidArgumentException('Invalid coordinates format.');
    //     }

    //     // Generate the LINESTRING format: LINESTRING(lat1 lng1, lat2 lng2, ...)
    //     $lineString = 'MULTIPOINT(' .$value . ')';

    //     // Set the GEOMETRY data in WKB format
    //     $this->attributes['coordinates'] = DB::raw("$lineString");
    // }



    protected function location(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => [
                'latitude' => $attributes['latitude'],
                'longitude' => $attributes['longitude']
            ],
            set: fn (array $value) => [
                'latitude' => $value['latitude'],
                'longitude' => $value['longitude']
            ],
        );
    }

    
  
}
