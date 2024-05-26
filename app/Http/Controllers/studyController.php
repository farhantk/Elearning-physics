<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Quiz_attempt;

class studyController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;

        $user = User::find(Auth::user()->id);
        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz1) {
            $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
        }else{
            $maxgradeForQuiz1 = -1; 
        }
        $maxAttemptForQuiz2 = $user->attempt()->where('quiz_number', 2)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz2) {
            $maxgradeForQuiz2 = $maxAttemptForQuiz2->grade;
        }else{
            $maxgradeForQuiz2 = -1; 
        }
        $maxAttemptForQuiz3 = $user->attempt()->where('quiz_number', 3)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz3) {
            $maxgradeForQuiz3 = $maxAttemptForQuiz3->grade;
        }else{
            $maxgradeForQuiz3 = -1; 
        }
        $maxAttemptForQuiz4 = $user->attempt()->where('quiz_number', 4)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz4) {
            $maxgradeForQuiz4 = $maxAttemptForQuiz4->grade;
        }else{
            $maxgradeForQuiz4 = -1; 
        }
        $maxAttemptForQuiz5 = $user->attempt()->where('quiz_number', 5)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz5) {
            $maxgradeForQuiz5 = $maxAttemptForQuiz5->grade;
        }else{
            $maxgradeForQuiz5 = -1; 
        }
        $user = User::find(Auth::user()->id);
        return view('lecture.timeline', [
            'title' => 'Suhu & Kalor',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'miles' => $miles,
            'grade1' => $maxgradeForQuiz1,
            'grade2' => $maxgradeForQuiz2,
            'grade3' => $maxgradeForQuiz3,
            'grade4' => $maxgradeForQuiz4,
            'grade5' => $maxgradeForQuiz5,
            'user' => $user,
        ]);
    }
    public function landing(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        return view('lecture.landing', [
            'title' => 'Suhu & Kalor',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'miles' => $miles,
        ]);
    }
    public function contohsoalpemuaianzat(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 10){
            return redirect()->route('main');
        }else{
            return view('lecture.contohsoalzat', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function rangkuman(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 16){
            return redirect()->route('main');
        }else{
            return view('lecture.rangkuman', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function glosarium(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        return view('lecture.glosarium', [
            'title' => 'Suhu & Kalor',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'miles' => $miles,
            'user' => $user,
        ]);
    }
    public function daftarpustaka(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        return view('lecture.daftarpustaka', [
            'title' => 'Suhu & Kalor',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'miles' => $miles,
            'user' => $user,
        ]);
    }
    public function skalasuhu(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 2){
            return redirect()->route('main');
        }else{
            return view('lecture.skalasuhu', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function termometer(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 3){
            return redirect()->route('main');
        }else{
            return view('lecture.termometer', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function contohsoalsuhu(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 4){
            return redirect()->route('main');
        }else{
            return view('lecture.contohsoalsuhu', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function contohsoalkalor1(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
            if($miles < 7){
                return redirect()->route('main');
            }else{
            return view('lecture.contohsoalkalor1', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function contohsoalkalor2(){
        
        return view('lecture.contohsoalkalor2', [
            'title' => 'Suhu & Kalor',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'miles' => $miles,
            'user' => $user,
        ]);
    }
    public function contohsoalkalor3(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 13){
            return redirect()->route('main');
        }else{
            return view('lecture.contohsoalkalor3', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function pengaruhkalorpadazat(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 6){
            return redirect()->route('main');
        }else{
            return view('lecture.pengaruhkalorpadazat', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function pemuaianzat(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 9){
            return redirect()->route('main');
        }else{
            return view('lecture.pemuaianzat', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function perpindahankalor(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 12){
            return redirect()->route('main');
        }else{
            return view('lecture.perpindahankalor', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function quizsuhu(){

        $user = User::find(Auth::user()->id);
        $miles = $user->miles;


        if($miles < 5){
            return redirect()->route('main');
        }else{
            $maxgradeForQuiz1 = null;
            $user = User::find(Auth::user()->id);
            $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first();
            if ($maxAttemptForQuiz1) {
                $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
            }else{
                $maxgradeForQuiz1 = -1; 
            }
            
            return view('quiz.quizsuhu', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'grade' => $maxgradeForQuiz1,
                'miles' => $miles,
                'user' => $user,
            ]);
        };

    }
    public function quizsuhusubmit(Request $request){
        $score = 0;
        if($request['q1']=='B'){
            $score++;
        }
        if($request['q2']=='D'){
            $score++;
        }
        if($request['q3']=='A'){
            $score++;
        }
        $score = ($score/3)*100;
        $score = number_format($score, 2);
        
        $validated['grade'] = $score;
        $validated['quiz_number'] = 1;
        $validated['user_id'] = Auth::user()->id;

        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt->where('quiz_number', 1)->max('attempt');
        $nextAttempt = (int) $maxAttemptForQuiz1 + 1;

        $validated['attempt'] = $nextAttempt;
        Quiz_attempt::create($validated);
        if($user->miles == 5 && $score > 75){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizsuhu');
    }

    public function quizkalor1(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 8){
            return redirect()->route('main');
        }else{
            $maxgradeForQuiz1 = null;
            $user = User::find(Auth::user()->id);
            $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 2)->orderBy('grade', 'desc')->first();
            if ($maxAttemptForQuiz1) {
                $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
            }else{
                $maxgradeForQuiz1 = -1; 
            }
            return view('quiz.quizkalor1', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'grade' => $maxgradeForQuiz1,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function quizkalor1submit(Request $request){
        $score = 0;
        if($request['q1']=='C'){
            $score++;
        }
        if($request['q2']=='C'){
            $score++;
        }
        if($request['q3']=='C'){
            $score++;
        }
        $score = ($score/3)*100;
        $score = number_format($score, 2);
        
        $validated['grade'] = $score;
        $validated['quiz_number'] = 2;
        $validated['user_id'] = Auth::user()->id;

        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt->where('quiz_number', 2)->max('attempt');
        $nextAttempt = (int) $maxAttemptForQuiz1 + 1;

        $validated['attempt'] = $nextAttempt;

        Quiz_attempt::create($validated);
        if($user->miles == 8 && $score > 75){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizkalor1');
    }

    public function quizkalor2(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 10){
            return redirect()->route('main');
        }else{
            $maxgradeForQuiz1 = null;
            $user = User::find(Auth::user()->id);
            $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 3)->orderBy('grade', 'desc')->first();
            if ($maxAttemptForQuiz1) {
                $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
            }else{
                $maxgradeForQuiz1 = -1; 
            }
            return view('quiz.quizkalor2', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'grade' => $maxgradeForQuiz1,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function quizkalor2submit(Request $request){
        $score = 0;
        if($request['q1']=='B'){
            $score++;
        }
        if($request['q2']=='C'){
            $score++;
        }
        if($request['q3']=='C'){
            $score++;
        }
        $score = ($score/3)*100;
        $score = number_format($score, 2);
        
        $validated['grade'] = $score;
        $validated['quiz_number'] = 3;
        $validated['user_id'] = Auth::user()->id;

        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt->where('quiz_number', 3)->max('attempt');
        $nextAttempt = (int) $maxAttemptForQuiz1 + 1;

        $validated['attempt'] = $nextAttempt;

        Quiz_attempt::create($validated);
        if($user->miles == 10 && $score > 75){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizkalor2');
    }

    public function quizkalor3(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 14){
            return redirect()->route('main');
        }else{
            $maxgradeForQuiz1 = null;
            $user = User::find(Auth::user()->id);
            $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 4)->orderBy('grade', 'desc')->first();
            if ($maxAttemptForQuiz1) {
                $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
            }else{
                $maxgradeForQuiz1 = -1; 
            }
            return view('quiz.quizkalor3', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'grade' => $maxgradeForQuiz1,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function quizkalor3submit(Request $request){
        $score = 0;
        if($request['q1']=='D'){
            $score++;
        }
        if($request['q2']=='C'){
            $score++;
        }
        if($request['q3']=='A'){
            $score++;
        }
        $score = ($score/3)*100;
        $score = number_format($score, 2);
        
        $validated['grade'] = $score;
        $validated['quiz_number'] = 4;
        $validated['user_id'] = Auth::user()->id;

        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt->where('quiz_number', 4)->max('attempt');
        $nextAttempt = (int) $maxAttemptForQuiz1 + 1;

        $validated['attempt'] = $nextAttempt;

        Quiz_attempt::create($validated);
        if($user->miles == 13 && $score > 75){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizkalor3');
    }

    public function evaluasi(){
        $user = User::find(Auth::user()->id);
        $miles = $user->miles;
        if($miles < 15){
            return redirect()->route('main');
        }else{
            $maxgradeForQuiz1 = null;
            $user = User::find(Auth::user()->id);
            $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 5)->orderBy('grade', 'desc')->first();
            if ($maxAttemptForQuiz1) {
                $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
            }else{
                $maxgradeForQuiz1 = -1; 
            }
            return view('quiz.evaluasi', [
                'title' => 'Suhu & Kalor',
                'name' => Auth::user()->name,
                'class' => Auth::user()->class,
                'email' => Auth::user()->email,
                'grade' => $maxgradeForQuiz1,
                'miles' => $miles,
                'user' => $user,
            ]);
        }
    }
    public function evaluasisubmit(Request $request){
        $score = 0;
        if($request['q1']=='B'){
            $score++;
        }
        if($request['q2']=='A'){
            $score++;
        }
        if($request['q3']=='B'){
            $score++;
        }
        if($request['q4']=='C'){
            $score++;
        }
        if($request['q5']=='E'){
            $score++;
        }
        if($request['q6']=='C'){
            $score++;
        }
        if($request['q7']=='A'){
            $score++;
        }
        if($request['q8']=='E'){
            $score++;
        }
        if($request['q9']=='B'){
            $score++;
        }
        if($request['q10']=='E'){
            $score++;
        }
        if($request['q11']=='C'){
            $score++;
        }
        if($request['q12']=='C'){
            $score++;
        }
        if($request['q13']=='D'){
            $score++;
        }
        if($request['q14']=='C'){
            $score++;
        }
        if($request['q15']=='A'){
            $score++;
        }
        if($request['q16']=='B'){
            $score++;
        }
        if($request['q17']=='C'){
            $score++;
        }
        if($request['q18']=='E'){
            $score++;
        }
        if($request['q19']=='C'){
            $score++;
        }
        if($request['q19']=='A'){
            $score++;
        }
        $score = ($score/20)*100;
        $score = number_format($score, 2);
        
        $validated['grade'] = $score;
        $validated['quiz_number'] = 5;
        $validated['user_id'] = Auth::user()->id;

        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt->where('quiz_number', 5)->max('attempt');
        $nextAttempt = (int) $maxAttemptForQuiz1 + 1;

        $validated['attempt'] = $nextAttempt;
        if($user->miles == 14){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        Quiz_attempt::create($validated);
        return redirect()->route('evaluasi');
    }
}
