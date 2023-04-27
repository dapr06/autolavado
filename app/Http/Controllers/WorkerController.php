<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::orderBy('name')->get();
        return view('workers/index', compact('workers'));
    }



    public function create()
    {

        $workers = Worker::orderBy('name')->get();
        return view('workers/create', compact('workers'));
    }


    public function store(Request $request)
    {
        {
            $this->validate($request, [
                'name' => 'required',
                'surname' => 'required',
                'DNI' => 'required',
                'email' => 'required',
                'role' => 'required',
                'turn' => 'required|in:0,1',
                'availability' => 'required',
            ]);

            $worker = new Worker();
            $worker->name = $request->name;
            $worker->surname = $request->surname;
            $worker->DNI = $request->DNI;
            $worker->email = $request->email;
            $worker->role = $request->role;
            $worker->turn = $request->turn;
            $worker->availability = $request->availability;
            $worker->save();
            return redirect()->route('workers.index');
        }
    }


    public function show(Worker $worker)
    {

        $worker->turn = $worker->turn ? 'Tarde' : 'Mañana';
        $worker->availability = $worker->availability ? 'Ocupado' : 'Libre';
        return view('workers/show', compact('worker'));
    }


    public function edit(Worker $worker)
    {

        return view('workers.edit', compact('worker'));
    }


    public function update(Request $request, Worker $worker)
    {
        {
            $this->validate($request, [
                'name' => 'required',
                'surname' => 'required',
                'DNI' => 'required',
                'email' => 'required',
                'role' => 'required',
                'turn' => 'required',
                'availability' => 'required',
            ]);


            $worker->name = $request->name;
            $worker->surname = $request->surname;
            $worker->DNI = $request->DNI;
            $worker->email = $request->email;
            $worker->role = $request->role;
            $worker->turn = $request->turn;
            $worker->availability = $request->availability;
            $worker->save();

            return redirect()->route('workers.index');
        }
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('workers.index');
    }
}
