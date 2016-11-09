<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

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
            'name',
            'email',
            'password',
            'remember_token',
            'created_at',
            'updated_at',
            'deleted_at'
        ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Insert new user
     *
     * @var name string
     * @var email string
     * @var password string
     * @return saved
     */
    public function addUser($name, $email, $password)
    {
        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);

        $saved = $user->save();

        return $saved;
    }

    /**
     * Get a user by name
     *
     * @var string
     * @return user
     */
    public static function getUserByName($name)
    {
        $user = User::where('name', $name)
                        ->get();

        return (isset($user) ? $user : false;
    }

    /**
     * Get a user by email
     *
     * @var string
     * @return user
     */
    public static function getUserByEmail($email)
    {
        $user = User::where('email', $email)
                        ->get();

        return (isset($user) ? $user : false;
    }

    /**
     * Change password from user
     *
     * @var int
     * @var string
     * @return saved
     */
    public function updateUserPassword($id, $password)
    {
        $user = User::find($id);
        $user->password = Hash::make($password);

        $saved = $user->save();

        return $saved;
    }
}
