<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Region;
class DepartementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
     return [
        'code' => $this->code,
        'nom' => $this->nom,
        'region_code' => $this->region_code,
        'arrondissements' => $this->arrondissements,
        'communes' => $this->communes,
    ];
}


}


