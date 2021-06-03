<?php
namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$students = student::all();
return View('students.s_index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.s_create');
    }
    public function store(Request $r)
    {
$n=$r->fname;
$ln=$r->lname;
$g=$r->gender;
$l=$r->reg_no;
$d=$r->department;
$lev=$r->level;
$p=$r->phone;
$h=$r->hostel_category;
$s=$r->status;
$obj=new student();
$obj->fname=$n;
$obj->lname=$ln;
$obj->gender=$g;
$obj->reg_no=$l;
$obj->department=$d;
$obj->level=$lev;
$obj->phone=$p;
$obj->hostel_category=$h;
$obj->status=$s;
$ok=$obj->save();
if($ok)
{
    $students = student::all();
return View('students.s_index')->with('students', $students);
    //return view('students.s_index')->with('message','application roported successfully');
}
else
{
    return view('students.s_create')->with('message','application failed');

}
}
public function show(student $student)
{
return view('students.s_show', compact('student'));
}
public function edit(student $student)
{
return view('students.s_edit', compact('student'));
}
public function update(Request $request, student $student)
{
$request->validate([
            'fname'=> 'required',
                'lname'=> 'required',
                'gender' => 'required',
                'reg_no' => 'required',
                'department'=> 'required',
                'level' => 'required',
                'phone'=>'required',
                'hostel_category' => 'required',
                'status' => 'required'
        ]);
        $student = student::all();
            $student->fname='fname';
                $student->lname='lname';
                $student->gender ='gender';
                $student->reg_no='reg_no';
                $student->department='department';
                $student->level ='level';
                $student->phone='phone';
                $student->hostel_category ='hostel_category';
                $student->status ='status';
            $student->save();

            // redirect
           // Session::flash('message', 'Successfully updated student!');
           return view('students.s_index')->with('message', 'Successfully updated student!');
    }
public function destroy(student $student)
    {
        $student->delete();
        return redirect()->route('students.s_index')
            ->with('success', 'student deleted successfully');
    }



    public function apply()
    {
        return view('students.applyForm');
    }
    public function apply1(Request $r)
    {
$n=$r->fname;
$ln=$r->lname;
$g=$r->gender;
$l=$r->reg_no;
$d=$r->department;
$lev=$r->level;
$p=$r->phone;
$h=$r->hostel_category;
$s=$r->status;
$obj=new student();
$obj->fname=$n;
$obj->lname=$ln;
$obj->gender=$g;
$obj->reg_no=$l;
$obj->department=$d;
$obj->level=$lev;
$obj->phone=$p;
$obj->hostel_category=$h;
$obj->status=$s;
$ok=$obj->save();
if($ok)
{
    $students = student::all();
return View('index');
}
else
{
    return view('students.applyForm')->with('message','application failed');

}
}
}
