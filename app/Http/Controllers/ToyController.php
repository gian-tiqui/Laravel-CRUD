<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Toy;
use Illuminate\View\View;

class ToyController extends Controller
{
    public function homepage(): View
    {
        return view("index");
    }

    public function landingpage(): View
    {
        $toys = Toy::all();
        return view("toys.storage")->with("toys", $toys);
    }

    public function create(): View
    {
        return view("toys.create");
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Toy::create($input);
        return redirect()->route('main')->with('flash_message', 'Toy Added!');
    }

    public function show(string $id): View
    {
        $toy = Toy::find($id);
        return view('toys.show')->with('toys', $toy);
    }

    public function edit(string $id): View
    {
        $toy = Toy::find($id);
        return view('toys.edit')->with('toys', $toy);
    }
    
    public function update(Request $request, string $id): RedirectResponse
    {
        $toy = Toy::find($id);
        $input = $request->all();
        $toy->update($input);
        return redirect()->route('main')->with('flash_message', 'Toy Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Toy::destroy($id);
        return redirect()->route('main')->with('flash_message', 'Toy deleted!');
    }
}
