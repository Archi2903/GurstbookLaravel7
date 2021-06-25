<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Record;

class GuestbookController extends Controller
{
    public function addRecord(Request $request)
    {
        $record = new Record;
        $record->name = $request->input('name');
        $record->email = $request->input('email');
        $record->record = $request->input('record');

        $record->save();
        return redirect()->route('main');
    }

    public function getRecords()
    {
        $records = new Record;
        return view('index', ['records' => $records->all()]);
    }
}
