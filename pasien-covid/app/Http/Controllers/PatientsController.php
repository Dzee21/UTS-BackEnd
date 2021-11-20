<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        echo "menampilkan jumlah pasien";
    }

    public function store(Request $request)
    {
        echo "menampilkan jumlah pasien";
    }

    public function show()
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function search()
    {
    }

    public function positive()
    {
    }

    public function recovered()
    {
    }

    public function dead()
    {
    }
}
