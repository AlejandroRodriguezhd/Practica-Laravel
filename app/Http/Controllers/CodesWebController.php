<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CodesWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $user)
    {
        //$codeD = Codes::find($user);
        $code = Codes::where('user_id', $user)->where('active', true)->count();

        if ($code >= 1) {
            $codeD = Codes::where('user_id', $user)->first();
            $code_web_ant = Crypt::decryptString($codeD->code_web);
        } else {
            $code_web_ant = rand(10000, 90000);
            $code_web = Crypt::encryptString($code_web_ant);

            Codes::create([
                'user_id' => $user,
                'code_web' => $code_web,
                'active' => true
            ]);
        }

        return view('codes.show-code', ['code' => $code_web_ant]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        $code = Codes::where('user_id', $user->id)->first();

        $code_web_ant = Crypt::decryptString($code->code_web);

        if ($code_web_ant === $request->input('code_web')) {

            $code_movil_ant = rand(10000, 90000);
            $code_movil = Crypt::encryptString($code_movil_ant);

            $code->code_movil = $code_movil;
            $code->save();

            return response()->json(['message' => "Codigo obtenido correctamente", 'code_movil' => $code_movil_ant], 200);
        }

        else{
            return response('No autorizado', 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
