<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'published_at' => $this->published_at,
            'author' => $this->author->name,
            'co-authors' => CoAuthorsResource::collection($this->coAuthors),
        ];
    }
}
