<?php namespace Deckofcards;

use Illuminate\Database\Eloquent\Model;

/**
 * Deckofcards\Table
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $unique_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|Deck[] $decks
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Table whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Table whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Table whereUniqueId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Table whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Table whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Table whereDeletedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards 
 */
class Table extends Model {

    protected $guarded = ['id'];
    protected $hidden = ['id','updated_at','created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function decks()
    {
        return $this->hasMany(Deck::class);
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class,'decks','table_id','card_id')->withPivot('deck_num','dealt');
    }

}
