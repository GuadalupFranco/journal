<?php

namespace App\Http\Controllers;

use App\Http\Requests\JournalRequest;
use App\Models\Memory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class MemoryController extends Controller
{
    public function index()
    {
        return view('memories', [
            'memories' => DB::table('memories')->get()
        ]);
    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)

    {
        DB::table('memories')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return Redirect::route('memory.create')
            ->with('create-success', 'Memory created succesfully')
            ->with('title', $request->title);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $memory = DB::table('memories')->where('id', $id)->first();
        return view('edit', compact('memory'));
    }

    public function update(JournalRequest $request, $id)
    {
        DB::table('memories')->where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'updated_at' => Carbon::now()
        ]);

        return Redirect::route('memory.index')
            ->with('update-success', 'Memory updated succesfully')
            ->with('title', $request->title);
    }

    public function destroy($id)
    {
        //
    }
}
