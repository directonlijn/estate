<?php

//namespace App;
namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as Model;

class Posts extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

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
    public $incrementing = true;

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
            'title',
            'content',
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
     * Get the latest news
     *
     * @return newsitems
     */
    public static function homepageNewsItems()
    {
        $newsItems = Posts::take(2)->get();

        return $newsItems;
    }
}
