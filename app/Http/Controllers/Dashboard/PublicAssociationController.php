<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\publicAssociation;
use Database\Seeders\PublicAssociationSeeder;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PublicAssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = PublicAssociation::all();
        return response()->view('dashboard.publicAssociation.index',[
            'datas' =>$data,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('dashboard.publicAssociation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            'title' => 'required|string|min:3|max:45',
            'required|mimes:pdf'
        ]);
        if (!$validator->fails()) {

            $request_data = $request->all();


            if ($request->hasFile('file')) {
                $file = $request->file('file');

                $data['file'] = $file->store('/file', [
                    'disk' => 'uploads'
                ]);
            }
            $isSave = PublicAssociation::create($request_data);
            return response()->json([
                'message' => $isSave ? 'Created successfully' : 'Create Failed'
            ], $isSave ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' =>   $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function show(publicAssociation $publicAssociation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function edit(publicAssociation $publicAssociation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publicAssociation $publicAssociation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicAssociation  $publicAssociation
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicAssociation $publicAssociation)
    {
        //
    }
}
