<?php namespace Deckofcards\Http\Controllers;

use Deckofcards\Card;
use Deckofcards\Deck;
use Deckofcards\Table;
use Illuminate\Http\Request;
use Input;
use Response;

class TablesController extends Controller {

	public function store()
	{
        $uniqueTableId = str_random(20);
        if(!Table::whereUniqueId($uniqueTableId)->first())
        {
            $table = Table::create(['unique_id' => $uniqueTableId]);
            $this->createDecks($table);
            return Response::json($table);
        }
        else{
            return Response::json(['table already exists'],['401']);
        }
	}

    private function createDecks(Table $table)
    {
        $numDecks = (Input::has('decks')) ? Input::get('decks') : 1;
        if($numDecks >= 1 && $numDecks < 10){
            foreach(range(1,$numDecks) as $index)
            {
                foreach(Card::all() as $card) {
                    Deck::create(['table_id' => $table->id, 'card_id' => $card->id, 'deck_num' => $index]);
                }
            }
        }
    }
}
