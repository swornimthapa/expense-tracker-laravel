<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    //
    public function index(){

        return view('welcome',['expenses'=> Expense::all()]);
    }

    public function displayCreateForm(){
        return view('create');

    }

    public function displayEditForm($id){
        // dd($id);
        $data = Expense::find($id);
        // echo $data['title'];
        return view('edit' ,['data' => $data]);
    }

    public function store(Request $req){
        $tile = $req->title;
        $amount = $req->amount;
        $category = $req->category;
        $exp = new Expense();
        $exp ->title = $tile;
        $exp ->amount = $amount;
        $exp ->category = $category;
        $exp->save();
        return redirect(route('expense.home'));

    }

    public function update($id , Request $req){
        $data = Expense::find($id);
        $data->title = $req->title;
        $data->amount  = $req->amount;
        $data->category  = $req->category;
        $data->update();
        // dd($id);
        return redirect(route('expense.home'));
    }

    public function deleteForm($id , Request $req){
        $data = Expense::find($id);
        // $data->title = $req->title;
        // $data->amount  = $req->amount;
        // $data->category  = $req->category;
        $data->delete();
        // dd($id);
        return redirect(route('expense.home'));
    }
}
