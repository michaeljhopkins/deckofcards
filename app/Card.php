<?php namespace Deckofcards;

use Illuminate\Database\Eloquent\Model;

/**
 * Deckofcards\Card
 *
 * @property integer $id
 * @property integer $deck_id
 * @property boolean $dealt
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Deck[] $decks
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereDeckId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereDealt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereDeletedAt($value)
 * @property string $value 
 * @property string $suite 
 * @property string $img 
 * @property-read mixed $deck_num 
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereSuite($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Card whereImg($value)
 */
class Card extends Model {
    protected $guarded = ['id'];
    protected $hidden = ['id','created_at','updated_at','deleted_at','pivot'];
    protected $appends = ['deck_num','dealt'];
    protected $casts = ['dealt' => 'bool'];

    public function decks()
    {
        return $this->belongsToMany(Deck::class);
    }

    public function getDeckNumAttribute()
    {
        if($this->pivot) {
            return $this->pivot->deck_num;
        }
    }

    public function getDealtAttribute()
    {
        if($this->pivot) {
            return $this->pivot->dealt;
        }
    }

}
