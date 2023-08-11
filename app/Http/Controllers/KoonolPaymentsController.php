<?php

namespace App\Http\Controllers;

use App\Models\CustomerPromotion;
use App\Models\KoonolAltanServiceSupplementaryOfferings;
use App\Models\KoonolOfferings;
use App\Models\KoonolPayments;
use App\Models\KoonolSegments;
use App\Models\KoonolUsers;
use Illuminate\Http\Request;

class KoonolPaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $koonolPayments = KoonolPayments::orderBy('id', 'asc')->paginate(10);
        return view('admin.koonolPayments.index', ['koonolPayments' => $koonolPayments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KoonolPayments $koonolPayments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KoonolPayments $koonolPayments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KoonolPayments $koonolPayments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KoonolPayments $koonolPayments)
    {
        //
    }

    public function koonolPaymentByCustomer()
    {

        $customersPromotions = CustomerPromotion::pluck('customer_id')->toArray();

        $koonolPayments = KoonolPayments::whereIn('user_id', function ($query) use ($customersPromotions) {
            $query->select('id')
                ->from('users')->whereIn('id', $customersPromotions);
        })->orderBy('id', 'asc')->paginate(10);


        return view('admin.koonolPayments.koonolPaymentByCustomer', ['koonolPayments' => $koonolPayments]);
    }
}
