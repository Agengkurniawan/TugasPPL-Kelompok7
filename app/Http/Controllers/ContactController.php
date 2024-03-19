<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        // Implementation for creating contact
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $contact = Contact::create($validatedData);

        return response()->json(['message' => 'Contact created successfully', 'contact' => $contact], 201);
    }

    public function update(Request $request, $id)
    {
        // Implementation for updating contact
        $contact = Contact::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $contact->update($validatedData);

        return response()->json(['message' => 'Contact updated successfully', 'contact' => $contact], 200);
    }

    public function get($id)
    {
        // Implementation for retrieving contact details
        $contact = Contact::findOrFail($id);
        return response()->json(['contact' => $contact], 200);
    }

    public function search(Request $request)
    {
        // Implementation for searching contacts
        $request->validate([
            'query' => 'required',
        ]);

        $query = $request->input('query');

        $contacts = Contact::where('first_name', 'like', '%' . $query . '%')
            ->orWhere('last_name', 'like', '%' . $query . '%')
            ->orWhere('email', 'like', '%' . $query . '%')
            ->orWhere('phone', 'like', '%' . $query . '%')
            ->get();

        return response()->json(['contacts' => $contacts], 200);
    }

    public function remove($id)
    {
        // Implementation for removing contact
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(['message' => 'Contact deleted successfully'], 200);
    }
}
