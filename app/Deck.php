<?php namespace Deckofcards;

use Illuminate\Database\Eloquent\Model;

/**
 * Deckofcards\Deck
 *
 * @property integer $id
 * @property integer $table_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read Table $table
 * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereTableId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereDeletedAt($value)
 * @property string $unique_id
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereUniqueId($value)
 * @property integer $card_id 
 * @property integer $deck_num 
 * @property boolean $dealt 
 * @property-read Card $card 
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereCardId($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereDeckNum($value)
 * @method static \Illuminate\Database\Query\Builder|\Deckofcards\Deck whereDealt($value)
 */
class Deck extends Model {

	protected $guarded = ['id'];
    protected $appends = ['value','suite','img'];
    protected $hidden = ['id','table_id','card_id','created_at','updated_at','deleted_at','card'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function getValueAttribute()
    {
        if($this->card) {
            return $this->card->value;
        }
    }

    public function getSuiteAttribute()
    {
        if($this->card) {
            return $this->card->suite;
        }
    }

    public function getImgAttribute()
    {
        if($this->card) {
            return $this->card->img;
        }
    }

}
