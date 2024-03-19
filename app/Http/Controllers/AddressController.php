<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function create(Request $request)
    {
        // Implementation for creating address
        $validatedData = $request->validate([
            'contact_id' => 'required|exists:contacts,id',
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        $address = Address::create($validatedData);

        return response()->json(['message' => 'Address created successfully', 'address' => $address], 201);
    }

    public function update(Request $request, $id)
    {
        // Implementation for updating address
        $address = Address::findOrFail($id);

        $validatedData = $request->validate([
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        $address->update($validatedData);

        return response()->json(['message' => 'Address updated successfully', 'address' => $address], 200);
    }

    public function get($id)
    {
        // Implementation for retrieving address details
        $address = Address::findOrFail($id);
        return response()->json(['address' => $address], 200);
    }

    public function search(Request $request)
    {
        // Implementation for searching addresses
        $request->validate([
            'query' => 'required',
        ]);

        $query = $request->input('query');

        $addresses = Address::where('street', 'like', '%' . $query . '%')
            ->orWhere('city', 'like', '%' . $query . '%')
            ->orWhere('province', 'like', '%' . $query . '%')
            ->orWhere('country', 'like', '%' . $query . '%')
            ->orWhere('postal_code', 'like', '%' . $query . '%')
            ->get();

        return response()->json(['addresses' => $addresses], 200);
    }

    public function remove($id)
    {
        // Implementation for removing address
        $address = Address::findOrFail($id);
        $address->delete();

        return response()->json(['message' => 'Address deleted successfully'], 200);
    }
}
