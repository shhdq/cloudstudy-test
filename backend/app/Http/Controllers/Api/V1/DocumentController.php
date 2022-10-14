<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Document;
use App\Models\DocumentConfiguration;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DocumentResource;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    // index
    public function index()
    {
        return DocumentResource::collection(Document::all());
    }

    // show
    public function show()
    {
        return response()->json("Document created");
    }

    // store
    public function store()
    {
        return response()->json("Document created");
    }
}
