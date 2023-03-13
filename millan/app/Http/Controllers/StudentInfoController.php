<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_Info;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    //     $StudentInfo = new student_Info();

    //     $StudentInfo->idNo = "C20-0155";
    //     $StudentInfo->firstName = "Millan";
    //     $StudentInfo->middleName = "Sedillo";
    //     $StudentInfo->lastName = "Yañez";
    //     $StudentInfo->suffix = "";
    //     $StudentInfo->course = "BSIT";
    //     $StudentInfo->year = 3;
    //     $StudentInfo->BirthDate = "2000-02-22";
    //     $StudentInfo->gender = "Male";

    //     $StudentInfo->save();

    //   echo "student information has been save from the data base";

    //delete a record
    //find() -- using the field name 'id' (default)
    //where() -- while using another field
    // $StudentInfo = student_Info::where('sno',2);
    // $StudentInfo->delete();
    // echo "student information has been deleted from the data base";
    //Update record
    // $StudentInfo = student_Info::where('sno',1)
    // ->update(['firstName'=> 'Millan War']);
    // echo "student information has been updated from the data base";

    //Retrieve record
    // $StudentInfo = student_Info::all();
    // return $StudentInfo;
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
