<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\WorkerRequest;
use App\Models\Worker;
use App\Models\User;

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


    public function store(WorkerRequest $request)
    {
        $validatedData = $request->validated();

        DB::transaction(function () use ($validatedData) {
            $worker = Worker::create($validatedData);

            // Crear una nueva instancia de User y copiar los datos del trabajador
            $user = new User();
            $user->name = $worker->name;
            $user->email = $worker->email;
            $user->password = bcrypt('123456789');

            // Guardar el usuario en la base de datos
            $user->save();

            // Asignar el rol al usuario
            $user->role = $worker->role;
            $user->save();
        });

        return redirect()->route('workers.index');
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

    public function update(WorkerRequest $request, Worker $worker)
    {
        {
            $request->validate($request->rules(), $request->messages());

            $worker->name = $request->name;
            $worker->surname = $request->surname;
            $worker->DNI = $request->DNI;
            $worker->email = $request->email;
            $worker->role = $request->role;
            $worker->turn = $request->turn;
            $worker->save();

            return redirect()->route('workers.index');
        }
    }

    public function destroy(Worker $worker)
    {
        $user = User::where('id', $worker->user_id)->first();

        if ($user) {
            $user->delete();
        }

        $worker->delete();

        return redirect()->route('workers.index');
    }






}


