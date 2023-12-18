<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReminderTypeCreateUpdate;
use App\Models\ReminderType;
use Illuminate\Http\Request;

class ReminderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reminderTypes = ReminderType::all();
        return view('remindertype.index' ,compact('reminderTypes'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('remindertype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReminderTypeCreateUpdate $request)
    {
        $input = $request->validated();
        ReminderType::create($input);
        return redirect()->route('reminderTypes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReminderType $reminderType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReminderType $reminderType)
    {
        return view('remindertype.edit', compact('reminderType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReminderTypeCreateUpdate $request, ReminderType $reminderType)
    {
        $input = $request->validated();

        // Update the ReminderType model with validated data
        $reminderType->update($input);

        return redirect()->route('reminderTypes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReminderType $reminderType)
    {
        $reminderType->delete();
        return redirect()->route('reminderTypes.index');
    }
}
