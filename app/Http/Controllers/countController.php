<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Quiz_attempt;


class countController extends Controller
{
    public function plusmiles1(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 1){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('skalasuhu');
    }
    public function plusmiles2(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 2){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('termometer');
    }
    public function plusmiles3(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 3){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('contohsoalsuhu');
    }
    public function plusmiles4(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 4){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizsuhu');
    }
    public function plusmiles5(){
        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz1) {
            $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
        }else{
            $maxgradeForQuiz1 = -1; 
        }
        if($user->miles == 5){
            if($maxgradeForQuiz1 > 75){

                $user->miles = $user->miles + 1;
                $user->save();
            }
        }
        return redirect()->route('pengaruhkalorpadazat');
    }
    public function plusmiles6(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 6){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('contohsoalkalor1');
    }
    public function plusmiles7(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 7){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizkalor1');
    }
    public function plusmiles8(){
        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz1) {
            $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
        }else{
            $maxgradeForQuiz1 = -1; 
        }
        if($user->miles == 8){
            if($maxgradeForQuiz1 > 75){

                $user->miles = $user->miles + 1;
                $user->save();
            }
        }
        return redirect()->route('pemuaianzat');
    }
    public function plusmiles9(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 9){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizkalor2');
    }
    public function plusmiles10(){
        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz1) {
            $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
        }else{
            $maxgradeForQuiz1 = -1; 
        }
        if($user->miles == 10){
            if($maxgradeForQuiz1 > 75){

                $user->miles = $user->miles + 1;
                $user->save();
            }
        }
        return redirect()->route('perpindahankalor');
    }
    public function plusmiles11(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 11){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('contohsoalkalor3');
    }
    public function plusmiles12(){
        $user = User::find(Auth::user()->id);
        if($user->miles == 12){
            $user->miles = $user->miles + 1;
            $user->save();
        }
        return redirect()->route('quizkalor3');
    }
    public function plusmiles13(){
        $user = User::find(Auth::user()->id);
        $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first();
        if ($maxAttemptForQuiz1) {
            $maxgradeForQuiz1 = $maxAttemptForQuiz1->grade;
        }else{
            $maxgradeForQuiz1 = -1; 
        }
        if($user->miles == 13){
            if($maxgradeForQuiz1 > 75){

                $user->miles = $user->miles + 1;
                $user->save();
            }
        }
        return redirect()->route('evaluasi');
    }
}
