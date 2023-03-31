<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enrolled_subject;
class EnrolledSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $EnrolledSubject = enrolled_subject::all();
        return view('enrolledsubject.index', compact('EnrolledSubject'));

        //      $EnrolledSubject = new enrolled_subject();

        // // $EnrolledSubject->EsNo = "011";
        // $EnrolledSubject->subjectcode = "BSBA2";
        // $EnrolledSubject->description = "Statistics";
        // $EnrolledSubject->units = "3";
        // $EnrolledSubject->schedule = "Monday & Friday";
        
        // $EnrolledSubject->save();
        // echo "enrolled subject  has been save from the data base";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
