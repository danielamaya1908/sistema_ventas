<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;

class InvoiceDetailController extends Controller
{
    public function index()
    {
        return view('invoice_details.index', [
            'invoice_details' => InvoiceDetail::paginate(10)
        ]);
    }

    public function create()
    {
        $bills = Bill::orderBy('created_at', 'desc')->get();
        return view('invoice_details.create', compact('bills'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cantidad' => 'required|integer',
            'bill_id' => 'required|exists:bills,id',
            'product_id' => 'required|exists:products,id',
        ]);

        InvoiceDetail::create($data);

        return back()->with('message', 'Invoice detail created.');
    }

    public function edit(InvoiceDetail $invoice_detail)
    {
        $bills = Bill::all();
        return view('invoice_details.edit', compact('invoice_detail', 'bills'));
    }

    public function update(InvoiceDetail $invoice_detail, Request $request)
    {
        $data = $request->validate([
            'cantidad' => 'required|integer',
            'bill_id' => 'required|exists:bills,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $invoice_detail->update($data);

        return back()->with('message', 'Invoice detail updated.');
    }

    public function destroy(InvoiceDetail $invoice_detail)
    {
        $invoice_detail->delete();

        return back()->with('message', 'Invoice detail deleted.');
    }
}
