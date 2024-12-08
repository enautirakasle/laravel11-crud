<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View
    {
        return view('note.create');
    }

    public function store(Request $request): RedirectResponse
    {

        //una forma de guardar
        // $note = new Note;
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        // otra forma
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        // esta parte ahora esta en NoteRequest
        // $request->validate([
        //     'title' => 'require|max:255|min:3',
        //     'description' => 'require|max:255|min:3'
        // ]);

        // otra
        Note::create($request->all());

        return redirect()->route('note.index');
    }

    /*  en realidad estamos pasando la id
        pero si ponemos como parametro Note
        laravel ya ha hecho el Note::find($note)
        y nos pasa la nota
    */
    public function edit(Note $note): View
    {

        return view('note.edit', compact('note'));
    }

    public function update(Request $request, Note $note ): RedirectResponse
    {
        // $note = Note::find($note);
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        // esta parte ahora esta en NoteRequest
        // $request->validate([
        //     'title' => 'require|max:255|min:3',
        //     'description' => 'require|max:255|min:3'
        // ]);

        $note->update($request->all());
        return redirect()->route('note.index');
    }

    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

   // public function destroy(Request $request, Note $note){
   //seria como arriba pero como no se utiliza $request se puede quitar

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index');
    }
}
