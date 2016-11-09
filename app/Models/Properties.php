<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'properties';

    /**
     * The table primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should have an incrementing primary key or non numeric value.
     *
     * @var bool
     */
    protected $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'type',
            'property_type',
            'price',
            'short_description',
            'long_description',
            'province',
            'city',
            'address',
            'housenumber',
            'zipcode',
            'longitude',
            'latitude',
            'outside_size',
            'inside_size',
            'sold',
            'spotlight',
            'owner_id',
            'document_id',
            'photo_album_id',
            'makelaar_id',
            'created_at',
            'updated_at',
            'deleted_at'
        ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'parent_id'];

    /**
     * Get the owner record associated with the property.
     */
    public function owner()
    {
        return $this->hasOne('App\Models\Owner', 'id', 'owner_id');
    }

    /**
     * Get a property by id
     *
     * @var int
     * @return property
     */
    public static function getPropertyById($id)
    {
        $property = Property::where('id', $id)
                        ->get();

        return (isset($property)) ? $property : false;
    }
}
