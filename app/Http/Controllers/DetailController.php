<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        return view('details.index', [
            'details' => Detail::paginate(10)
        ]);
    }

    public function create()
    {
        return view('details.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cantidad' => 'required|integer',
            'bill_id' => 'required|exists:bills,id',
            'product_id' => 'required|exists:products,id',
        ]);

        Detail::create($data);

        return back()->with('message', 'Details created successfully.');
    }

    public function edit(Detail $details)
    {
        return view('details.edit', compact('details'));
    }

    public function update(Detail $details, Request $request)
    {
        $data = $request->validate([
            'cantidad' => 'required|integer',
            'bill_id' => 'required|exists:bills,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $details->update($data);

        return back()->with('message', 'Details updated.');
    }

    public function destroy(Detail $details)
    {
        $details->delete();

        return back()->with('message', 'Details deleted.');
    }
}
