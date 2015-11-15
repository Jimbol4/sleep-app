<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DiaryRequest;
use Carbon\Carbon;

class DiaryController extends Controller
{
    public function index() {
        
        $entries = Diary::latest()->get();
        return view('diary.index')->with('entries', $entries);
        
    }
    
    public function create() {
        return view('diary.create');
    }
    
    public function store(DiaryRequest $request) {
        $entry = new Diary($request->all());
        
        $entry->save();
        
        \Flash::success('New diary entry added successfully.');
        
        return redirect('diary');
    }
    
    public function edit(Diary $diary) {
        
        return view('diary.edit', compact('diary'));
    }
    
    public function update(Diary $diary, DiaryRequest $request) {
        $diary->update($request->all());
        
        \Flash::success('Entry successfully updated.');
        
        return redirect('diary');
    }
    
    public function destroy(Diary $diary) {
        $diary->delete();
        
        \Flash::success('Entry successfully deleted.');
        
        return redirect('diary');
    }
}
