<?php

namespace App\Http\Controllers;

use App\Models\Fiance;
use App\Models\Task;
use App\Models\User;
use App\Models\UserWeb;
use Illuminate\Http\Request;

class FianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = session('user');
        $User = User::findOrFail($user['id']);

        $tasks = Task::task($user['id'])->get();
        $completedCount = Task::completedTask($user['id'])->count();

        $userWeb = UserWeb::userWeb($user['id'])->first();
        $bride = Fiance::findOrFail($userWeb->bride_id);
        $groom = Fiance::findOrFail($userWeb->groom_id);
        $bride->photo = (!$bride->photo) ? "bride-image/sample.jpeg": $bride->photo;
        $groom->photo = (!$groom->photo) ? "groom-image/sample.jpeg": $groom->photo;
        return view('wedding-fiance.fiance',[
            'bride' => $bride,
            'groom' => $groom,

            'currentBudget' => $User->current_budget,
            'taskCount' => $tasks->count(),
            'completedCount' => $completedCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bride = Fiance::findOrFail($request->input('bride_id'));
        if($request->file('bride_photo')){
            $bride->photo = $this->storeBrideImage($request);
        }
        $bride->full_name = $request->input('bride_full_name');
        $bride->second_name = $request->input('bride_second_name');
        $bride->birthday = $request->input('bride_birthday');
        $bride->description = $request->input('bride_description');
        $bride->save();

        $groom = Fiance::findOrFail($request->input('groom_id'));
        if($request->file('groom_photo')){
            $groom->photo = $this->storeGroomImage($request);
        }
        $groom->full_name = $request->input('groom_full_name');
        $groom->second_name = $request->input('groom_second_name');
        $groom->birthday = $request->input('groom_birthday');
        $groom->description = $request->input('groom_description');
        $groom->save();

        return redirect()->route('fiances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    protected function storeBrideImage(Request $request){
        if($request->file('bride_photo')){
            $extension = $request->file('bride_photo')->getClientOriginalExtension();
            echo $extension;
            $newFileName = "bride" . $request->bride_id . "." .$extension; 
            $path = $request->file('bride_photo')->storeAs('public/bride-image',$newFileName);
            return substr($path,strlen('public/'));
        }
        else{
            echo "2";
            return null;
        }
    } 
    protected function storeGroomImage(Request $request){
        if($request->file('groom_photo')){
            $extension = $request->file('groom_photo')->getClientOriginalExtension();
            $newFileName = "groom" . $request->groom_id . "." .$extension; 
            $path = $request->file('groom_photo')->storeAs('public/groom-image',$newFileName);
            return substr($path,strlen('public/'));
        }
        else{
            return null;
        }
    } 
}
