<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index() {
        return $this->json_success('Success to list notes', Note::all());
    }
    
    public function show($id) {
        $note = Note::find($id);
        if ($note) {
            return $this->json_success("Success to find note id = $id", $note);
        }
        return $this->json_failure("Failure to find note id = $id");
    }
    
    public function create(Request $request) {
        $note = Note::create($request->all());
        if ($note) {
            return $this->json_success("Success to create note", $note);
        }
        return $this->json_failure("Failure to create note");
    }
    
    public function update(Request $request, $id) {
        $note = Note::find($id);
        if ($note) {
            $note->update($request->all());
            return $this->json_success("Success to update note id = $id", $note);
        }
        return $this->json_failure("Failure to update note id = $id");
    }
    
    public function delete($id) {
        $note = Note::find($id);
        if ($note) {
            $note->delete();
            return $this->json_success("Success to delete note id = $id");
        }
        return $this->json_failure("Failure to delete note id = $id");
    }
}
