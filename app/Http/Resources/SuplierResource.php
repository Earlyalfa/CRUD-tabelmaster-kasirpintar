<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class SuplierResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
        ];
    }
}