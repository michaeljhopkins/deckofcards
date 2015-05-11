<?php namespace Deckofcards\Http\Controllers;

use Deckofcards\Deck;
use Deckofcards\Http\Requests;
use Deckofcards\Http\Controllers\Controller;

use Deckofcards\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Response;
use URL;

class CardsController extends Controller {

	public function index($tableId)
	{
		$cards = Table::with(['cards'])->whereUniqueId($tableId)->first()->cards;
        return Response::json($cards);
	}

    public function pull($tableId)
    {
        /** @var \Illuminate\Database\Eloquent\Collection $cards */
        $cards = Table::with(['cards'])->whereUniqueId($tableId)->first()->cards;
        $card = $cards->random();
        $card->img = URL::to($card->img);
        return Response::json($card);


    }

    public function deal($tableId)
    {
        /** @var \Illuminate\Database\Eloquent\Collection $cards */
        $table = Table::with(['cards'])->whereUniqueId($tableId)->first();
        $card = $table->cards->where('dealt',false)->random();
        $deck = Deck::whereCardId($card->id)->whereTableId($table->id)->first();
        $deck->update(['dealt' => true]);
        $return = new Collection(['value' => $card->value,'suite' => $card->suite,'img' => URL::to($card->img),'deck_num' => $card->deck_num,'dealt' => 1]);
        return Response::json($return);
    }
}
