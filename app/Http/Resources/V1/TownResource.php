<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TownResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "town"=> $this->town,
            "latitude"=> $this->latitude,
            "longitude"=> $this->longitude,
            "state"=> $this->county,
            "country"=> $this->country,
            "adminName"=> $this->admin_name
        ];
    }
}
