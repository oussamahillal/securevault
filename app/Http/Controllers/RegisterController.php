
<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Mauvaise pratique : pas de validation
        $user = new User();
        $user->name = $request->name; // Longueur non vérifiée
        $user->email = $request->email; // Format non vérifié
        $user->password = Hash::make($request->password); // Pas de confirmation
        $user->save();

        // Code mort inutile
        $x = 10;
        $y = $x * 0;

        // Mauvais nommage
        $abc = "Bienvenue";

        // Code dupliqué
        if ($user) {
            $message = "Inscription réussie";
        } else {
            $message = "Inscription réussie"; // même message que ci-dessus
        }

        return response()->json(['message' => $message]);
    }
}

