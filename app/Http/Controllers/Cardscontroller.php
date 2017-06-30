<?php

namespace App\Http\Controllers;

use App\Card;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class Cardscontroller extends Controller
{
    public function index()
	{
		$cards = Card::all();
		return view('cards.index', compact('cards'));
	}
	
	public function show(Card $card)
	{
		$card->load('notes.user');

		return view('cards.show', compact('card'));
	}
    public function create($thread_id)
    {
      $thread = Thread::with('cards')->findOrFail($thread_id);
        return view('cards.create')->withThread($thread);
    }
    public function store(Request $request, Card $card)
	{
		
		$this->validate($request, [
			'title' => 'required|min:15',
		]);
		
		$card = new Card($request->all());
		
		$card->addCard($card, 1);
		
		return back();
	}
	public function edit(Note $note)
	{
		return view('cards.edit', compact('card'));
	}
	
	public function update(Request $request, Card $card)
	{
		$card->update($request->all());
		
		return back();
	}
    
}
