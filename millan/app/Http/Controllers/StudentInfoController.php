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
        $StudentInfo = student_Info::all();
        return view('students.index', compact('StudentInfo'));

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
        $validatedData = $request->validate([
            'xidNo' => ['required', 'max:8'],
            'xfirstName' => ['required', 'max:20 '],
            'xmiddleName' => [ 'max:15 '],
            'xlastName' => ['required', 'max:15 '],
            'xsuffix' => ['nullable', 'max:5 '],
            'xcourse' => ['required', 'max:15 '],
            'xyear' => ['required'],
            'xbirthDate' => ['required'],
            'xgender' => ['required', 'max:6 '],
        ]);
        //
        $StudentInfo = new student_Info();
        $StudentInfo->idNo = $request->xidNo;
        $StudentInfo->firstName = $request->xfirstName;
        $StudentInfo->middleName = $request->xmiddleName;
        $StudentInfo->lastName = $request->xlastName;
        $StudentInfo->suffix = $request->xsuffix;
        $StudentInfo->course = $request->xcourse;
        $StudentInfo->year = $request->xyear;
        $StudentInfo->birthDate = $request->xBirthDate;
        $StudentInfo->gender = $request->xgender;
        return redirect()->route('students');

        // echo $request->xidNo;
        // echo $request->xfirstName;
        // echo $request->xmiddleName;
        // echo $request->xlastName;
        // echo $request->xsuffix;
        // echo $request->xcourse;
        // echo $request->xyear;
        // echo $request->xBirthDate;
        // echo $request->xgender;

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
        $StudentInfo = student_Info::where('sno', $id)->get();
        return view('students.show', compact('StudentInfo'));
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
        $StudentInfo = student_Info::where('sno', $id)->get();
        return view('students.edit', compact('StudentInfo'));
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
        $validatedData = $request->validate([
            'xidNo' => ['required', 'max:8'],
            'xfirstName' => ['required', 'max:20 '],
            'xmiddleName' => [ 'max:15 '],
            'xlastName' => ['required', 'max:15 '],
            'xsuffix' => ['nullable', 'max:5 '],
            'xcourse' => ['required', 'max:15 '],
            'xyear' => ['required'],
            'xbirthDate' => ['required'],
            'xgender' => ['required', 'max:6 '],
        ]);

        $StudentInfo = student_Info::where('sno', $id)
        ->update([
        'idNo'=>  $request->xidNo,
        'firstName'=>  $request->xfirstName,
        'middleName'=>  $request->xmiddleName,
        'lastName'=>  $request->xlastName,
        'suffix'=>  $request->xsuffix,
        'course'=>  $request->xcourse,
        'year'=>  $request->xyear,
        'birthDate'=>  $request->xbirthDate,
        'gender'=>  $request->xgender,
    ]);
    return redirect()->route('students');

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
        $StudentInfo = student_Info::where('sno',$id);
        $StudentInfo->delete();
        return redirect()->route('students');
    }
}
