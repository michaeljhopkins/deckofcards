<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cards')->delete();
        $cards = [['value' => 'A', 'suite' => 'S','img' => '/images/ACESPADES.png'],['value' => '2', 'suite' => 'S','img' => '/images/2SPADES.png'],['value' => '3', 'suite' => 'S','img' => '/images/3SPADES.png'],['value' => '4', 'suite' => 'S','img' => '/images/4SPADES.png'],['value' => '5', 'suite' => 'S','img' => '/images/5SPADES.png'],['value' => '6', 'suite' => 'S','img' => '/images/6SPADES.png'],['value' => '7', 'suite' => 'S','img' => '/images/7SPADES.png'],['value' => '8', 'suite' => 'S','img' => '/images/8SPADES.png'],['value' => '9', 'suite' => 'S','img' => '/images/9SPADES.png'],['value' => 'A', 'suite' => 'S','img' => '/images/JACKSPADES.png'],['value' => 'J', 'suite' => 'S','img' => '/images/QUEENSPADES.png'],['value' => 'Q', 'suite' => 'S','img' => '/images/KINGSPADES.png'],['value' => 'A', 'suite' => 'S','img' => '/images/ACEHEARTS.png'],['value' => '2', 'suite' => 'S','img' => '/images/2HEARTS.png'],['value' => '3', 'suite' => 'S','img' => '/images/3HEARTS.png'],['value' => '4', 'suite' => 'S','img' => '/images/4HEARTS.png'],['value' => '5', 'suite' => 'S','img' => '/images/5HEARTS.png'],['value' => '6', 'suite' => 'S','img' => '/images/6HEARTS.png'],['value' => '7', 'suite' => 'S','img' => '/images/7HEARTS.png'],['value' => '8', 'suite' => 'S','img' => '/images/8HEARTS.png'],['value' => '9', 'suite' => 'S','img' => '/images/9HEARTS.png'],['value' => 'A', 'suite' => 'S','img' => '/images/JACKHEARTS.png'],['value' => 'J', 'suite' => 'S','img' => '/images/QUEENHEARTS.png'],['value' => 'Q', 'suite' => 'S','img' => '/images/KINGHEARTS.png'],['value' => 'A', 'suite' => 'S','img' => '/images/ACECLUBS.png'],['value' => '2', 'suite' => 'S','img' => '/images/2CLUBS.png'],['value' => '3', 'suite' => 'S','img' => '/images/3CLUBS.png'],['value' => '4', 'suite' => 'S','img' => '/images/4CLUBS.png'],['value' => '5', 'suite' => 'S','img' => '/images/5CLUBS.png'],['value' => '6', 'suite' => 'S','img' => '/images/6CLUBS.png'],['value' => '7', 'suite' => 'S','img' => '/images/7CLUBS.png'],['value' => '8', 'suite' => 'S','img' => '/images/8CLUBS.png'],['value' => '9', 'suite' => 'S','img' => '/images/9CLUBS.png'],['value' => 'A', 'suite' => 'S','img' => '/images/JACKCLUBS.png'],['value' => 'J', 'suite' => 'S','img' => '/images/QUEENCLUBS.png'],['value' => 'Q', 'suite' => 'S','img' => '/images/KINGCLUBS.png'],['value' => 'A', 'suite' => 'S','img' => '/images/ACEDIAMONDS.png'],['value' => '2', 'suite' => 'S','img' => '/images/2DIAMONDS.png'],['value' => '3', 'suite' => 'S','img' => '/images/3DIAMONDS.png'],['value' => '4', 'suite' => 'S','img' => '/images/4DIAMONDS.png'],['value' => '5', 'suite' => 'S','img' => '/images/5DIAMONDS.png'],['value' => '6', 'suite' => 'S','img' => '/images/6DIAMONDS.png'],['value' => '7', 'suite' => 'S','img' => '/images/7DIAMONDS.png'],['value' => '8', 'suite' => 'S','img' => '/images/8DIAMONDS.png'],['value' => '9', 'suite' => 'S','img' => '/images/9DIAMONDS.png'],['value' => 'A', 'suite' => 'S','img' => '/images/JACKDIAMONDS.png'],['value' => 'J', 'suite' => 'S','img' => '/images/QUEENDIAMONDS.png'],['value' => 'Q', 'suite' => 'S','img' => '/images/KINGDIAMONDS.png']];

        foreach($cards as $card)
        {
            \Deckofcards\Card::create(['value' => $card['value'],'suite' => $card['suite'],'img' => $card['img']]);
        }

    }
}