<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $url = route("room.image", ['room' => $this]);
        return [
            'name' => $this->name,
            'title' => $this->title,
            'purpose' => $this->purpose,
            'image_url' => $url,
        ];
    }
}
