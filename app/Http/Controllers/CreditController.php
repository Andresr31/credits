<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditRequest;
use App\Models\Credit;
use App\Models\Main;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credits = Credit::all();
        foreach ($credits as $credit) {
            $dt = Carbon::parse($credit->created_at);
            if($credit->partial_amount == 0){
                $credit->status = 'paid_out';
            }
            $credit->total_amount = number_format($credit->total_amount, 0);
            $credit->partial_amount = number_format($credit->partial_amount, 0);
            $credit->created = explode(" ", $dt->toDateTimeString())[0];
        }
    
        $main= Main::first();
        // dd($credits->first()->user()->fullname);
        return view('elements.credits.index', compact('credits'))->with('main',$main);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main= Main::first();
        // $customers = Customer::all();
        return view('elements.credits.create')->with('main',$main);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreditRequest $request)
    {
        $credit = new Credit();
        $customer = new Customer();
        $main= Main::first();

        $customer->fullname = $request->fullname;
        $customer->address =  $request->address;
        $customer->phone =  $request->phone;
        $customer->main_id = $main->id;
        $customer->save();

        $credit->total_amount = ($request->total_amount * $main->global_interest) + $request->total_amount;
        $credit->number_fees = $main->default_numfees;
        $credit->partial_amount = $credit->total_amount;
        $credit->date_finish = $request->created_at;
        $credit->status = 'active';
        $credit->fees_amount = $credit->total_amount / $credit->number_fees;
        $credit->customer_id = $customer->id;
        $credit->main_id = $main->id;
        $credit->save();
        $credit->created_at = $request->created_at;
        $credit->save();

        return redirect()->route('credits.index')->with('message', 'Crédito creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function show(Credit $credit)
    {
        $dt = Carbon::parse($credit->created_at);
        $credit->total_amount = number_format($credit->total_amount, 0);
        $credit->partial_amount = number_format($credit->partial_amount, 0);
        $credit->created = explode(" ", $dt->toDateTimeString())[0];
        $credit->fees_amount = number_format($credit->fees_amount, 0);
        $credit->customer = $credit->customer()->fullname;
        if($credit->date_lastpay){
            $dlt = Carbon::parse($credit->date_lastpay);
            $credit->date_lastpay = explode(" ", $dlt->toDateTimeString())[0];
        }
        $fees = [];
        for ($i=0; $i < $credit->number_fees; $i++) { 
            $fees[$i]= $i+1;
        }
        $credit->fees = $fees;
        return view("elements.credits.show", compact("credit"));
    }

    public function payFee(Request $request){
        if ($request->number_fees == -1)
        return redirect()->back()
            ->with('message_error', 'Por favor ingresa un número de cuotas válido');
        
        $credit = Credit::find($request->credit_id);
        $amount = $request->number_fees * $credit->fees_amount;
        $credit->partial_amount =  $credit->partial_amount - $amount;
        $credit->number_fees = $credit->number_fees - $request->number_fees;
        $credit->date_lastpay = date("Y-m-d");
        if ($credit->partial_amount == 0 && $credit->number_fees) {
            $credit->status = 'paid_out';
        }
        $credit->save();
        
        
        return redirect()->route('credits.index')->with('message', 'Abono registrado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function edit(Credit $credit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credit $credit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credit $credit)
    {
        $credit->delete();
        return redirect()->route('credits.index')->with('message', 'Crédito eliminado con éxito');
    }
}
