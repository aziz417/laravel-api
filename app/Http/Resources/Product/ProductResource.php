<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->details,
            'stock' => $this->stock ?? 'Out Of Stock',
            'price' => $this->price,
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2),
            'discount' => $this->discount,
            'rating' => $this->reviews->count() > 0 ?
                    round($this->reviews->sum('review')/
                    $this->reviews->count(), 2) : 'Not Yat',

            'href' => [
                'reviews' => route('reviews.index', $this->id),
                'product' => route('products.show', $this->id)
            ]
        ];
    }
}
