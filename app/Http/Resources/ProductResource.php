<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'vegan' => $this->vegan,
            'spice' => $this->spice,
            'gluten' => $this->gluten,
            'images' => $this->images,
            'categories' => $this->categories,
        ];
    }
}
