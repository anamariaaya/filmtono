<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Homeslider;

Use App\Http\Requests\HomeSliderRequest;

use Illuminate\Support\Facades\Storage;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        return view('admin.homesliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homesliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeSliderRequest $request)
    {
        $homeslider = Homeslider::create($request->all());

        if ($request->file('file')){
            $url = Storage::put('imagesliders', $request->file('file'));

            $homeslider->image()->create([
                'url' => $url
            ]);
        }  

        return redirect()->route('admin.homesliders.index')->with('info', 'Home slider created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Homeslider $homeslider)
    {
        return view('admin.homesliders.show', compact('homeslider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeslider $homeslider)
    {
        return view('admin.homesliders.edit', compact('homeslider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeSliderRequest $request, Homeslider $homeslider)
    {

        $homeslider->update($request->all());

        if ($request->file('file')){
            $url = Storage::put('imagesliders', $request->file('file'));

            if($homeslider->image){
                Storage::delete($homeslider->image->url);

                $homeslider->image->update([
                    'url' => $url                    
                ]);
            }else{
                $homeslider->image()->create([
                    'url' => $url                    
                ]);
            }
        }

        return redirect()->route('admin.homesliders.index')->with('info', 'Home slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeslider $homeslider)
    {
        
        $homeslider->delete();

        return redirect()->route('admin.homesliders.index')->with('info', 'Home slider deleted successfully');
    }
}
