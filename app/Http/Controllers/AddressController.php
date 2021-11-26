<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    
    public function index()
    {
        return Address::all();
    }

    public function create(Request $request)
    {
        return Address::create($request->all());
    }

    public function show($id)
    {
        // carrega os registros do banco
        $address = Address::find($id);

        if ($address)
        {
            return $address;
        }
        else
        {
            return "Registro não encontrado";
        }
    }

    public function update($id, Request $request)
    {
        // carrega os registros do banco
        $address = Address::find($id);

        // preenche com os dados do formularios
        $address->fill($request->all());

        // salva/atualiza o banco
        $address->save();

        // returna os dados atualizados
        return $address;
    }

    public function destroy($id)
    {
        // carrega os registros do banco
        $address = Address::find($id);

        if ($address)
        {
            // deleta os dados da tabela
            $address->delete();
            return $address;
        }
        else
        {
            return "Registro não encontrado";
        }
    }

}
