<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function Event()
    {
        return view('pages.create');
    }

    public function show()
    {
        $events = Event::all();
        return view('pages.show', compact('events'));
    }

    public function PostEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'price' => 'required'
        ]);

        $eve = new Event();
        $eve->title = $request->title;
        $eve->description = $request->description;
        $eve->start = $request->start;
        $eve->end = $request->end;
        $eve->price = $request->price;
        $eve->save();
        flashy()->success('Event Saved');
        return redirect()->route('show');
    }

    public function edit($id)
    {
        $eve = Event::findOrFail($id);
        return view('pages.edit', compact('eve'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'price' => 'required'
        ]);


        $eve = Event::findOrFail($id);

        $eve->title = $request->title;
        $eve->description = $request->description;
        $eve->start = $request->start;
        $eve->end = $request->end;
        $eve->price = $request->price;
        $eve->save();

        flashy()->success("Event Updated");
        return redirect()->route('show');

    }

    public function delete($id)
    {
        Event::destroy($id);
        // flashy
        flashy()->success("Event Deleted");
        return redirect()->route('show');
    }
}
