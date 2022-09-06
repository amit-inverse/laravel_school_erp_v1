<?php

namespace App\Http\Controllers;

use App\Models\Admissions;
use Illuminate\Http\Request;

use App\Models\Rolls;
use Flash;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class StudentsController extends Controller
{
    public function studentLogin(Request $request)
    {
        return view('students.login');
    }
    public function studentLoginProcess(Request $request)
    {
        if ($request->isMethod('post')) {
            $student = $request->all();
            $studentCount = Rolls::where(['username' => $student['username'], 'password' => $student['password']])->count();

            if ($studentCount > 0) {
                Session::put('studentSession', $student['username']);
                Flash::success('Welcome...');
                return redirect('/dashboard');
            } else {
                Flash::error('Incorrect Username / Password...');
                return redirect('/students');
            }
        }
        return view('students.dashboard');
    }

    public function studentLogout(Request $request)
    {
        // return view('students.login');
    }

    public function dashboard()
    {
        if (Session::has('studentSession')) {
            $student = Admissions::all();
        } else {
            return redirect('/students')->with('error', 'Please login...');
        }
        return view('students.dashboard', compact('student'));
    }

    public function profile(Request $request)
    {
        $student = Rolls::join('admissions', 'admissions.student_id', 'rolls.student_id')
            ->where(['username' => Session::get('studentSession')])->first();

        return view('students.profile', compact('student'));
    }

    public function verifyPassword(Request $request)
    {
        $student = $request->all();
        $validStudent = Rolls::where(['username' => Session::get('studentSession'), 'password' => $student['old_password']])->count();
        if ($validStudent == 1) {
            echo "true";
            die;
        } else {
            echo "false";
            die;
        }
    }

    public function changePassword(Request $request)
    {
        $student = $request->all();
        $students = Admissions::where(['email' => $student['email']])->first();
        // dd($students);
        // die;
        $studentCount = Rolls::where(['username' => Session::get('studentSession'), 'password' => $student['old_password']])->count();
        if ($studentCount == 1) {
            $new_password = $student['new_password'];
            Rolls::where(['username' => Session::get('studentSession')])
                ->update(['password' => $new_password]);
            Flash::success('Password changed successfully...');
            return redirect()->back();
        } else {
            Flash::error('Password incorrect...');
            return redirect()->back();
        }
    }

    public function getForgotPassword()
    {
        return view('students.password_forgot');
    }

    public function forgotPassword(Request $request)
    {
        $data = $request->all();
        $studentCount = Admissions::where(['email' => $data['email']])->count();
        if ($studentCount == 0) {
            Flash::error('Email not found...');
            return redirect()->back();
        }

        Session::put('studentSession');
        $student = Admissions::where(['email' => $data['email']])->first();
        $ran_password = Str::random(12);

        $new_password = $ran_password;

        Rolls::where(['username' => Session::get('studentSession')])
            ->update(['password' => $new_password]);

        $email = $data['email'];
        $first_name = $student['first_name'];
        $message = [
            'email' => $email,
            'first_name' => $first_name,
            'password' => $ran_password,
        ];

        Mail::send('emails.password_forgot', $message, function ($message) use ($email) {
            $message->to($email)->subject('teachyLeaf ERP, Reset Password');
        });
        Flash::success('Email sent...');
        return redirect()->back();
    }

    public function courseSelection(Request $request)
    {
        return view('students.lectures.course-selection');
    }

    public function lectureCalendar(Request $request)
    {
        return view('students.lectures.lecture-calendar');
    }

    public function lectureActivity(Request $request)
    {
        return view('students.lectures.lecture-activity');
    }

    public function examMarks(Request $request)
    {
        return view('students.lectures.exam-marks');
    }
}
