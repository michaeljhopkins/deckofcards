<?php namespace Deckofcards;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Deckofcards\User
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Table[] $tables
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\User whereDeletedAt($value)
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function tables()
    {
        return $this->hasMany(Table::class);
    }

}
