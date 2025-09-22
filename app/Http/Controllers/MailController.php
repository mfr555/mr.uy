<?php

namespace App\Http\Controllers;

use App\Mail\ContactoWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{

    /**
     * Responde un json con un mensaje de éxito o error tras enviar el correo
     */
    public function send(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json([
            'success' => false,
            'message' => implode(' ', $validator->errors()->all())
            ], 422);
        }

        $details = [
            'nombre' => $request->input('name'),
            'email' => $request->input('email'),
            'mensaje' => $request->input('message')
        ];

        try {
            Mail::to(env('MAIL_FROM_ADDRESS'))
                ->cc($request->email)
                ->send(new ContactoWeb($details));
            return response()->json(['success' => true, 'message' => 'Tu mensaje ha sido enviado. Te contestaremos a la brevedad.'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Hubo un problema al enviar el mensaje. ' . $e->getMessage()], 500);
        }
    }
}
