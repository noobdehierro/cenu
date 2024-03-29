<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerPromotionRequest;
use App\Http\Requests\UpdateCustomerPromotionRequest;
use App\Models\CustomerPromotion;

class CustomerPromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $customers = CustomerPromotion::paginate(10);;

        return view('admin.customers.index', ['customers' => $customers]);
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
    public function store(StoreCustomerPromotionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerPromotion $customerPromotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerPromotion $customerPromotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerPromotionRequest $request, CustomerPromotion $customerPromotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerPromotion $customerPromotion)
    {
        //
    }
}
