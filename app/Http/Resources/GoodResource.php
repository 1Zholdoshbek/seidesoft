<?php

namespace App\Http\Resources;

use App\Models\GoodStock;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'sku' => $this->sku,
            'name' => $this->name,
            'prices' => json_decode($this->prices),
            'stocks' => GoodStockResource::collection($this->stocks),
            'description' => $this->description,
            'characteristics' =>GoodCharacteristicResource::collection($this->characteristics),
            'is_published' => $this->is_published,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at

        ];
    }
}
