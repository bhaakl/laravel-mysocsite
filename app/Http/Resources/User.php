<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Преобразование ресурса в массив.
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'provider' => $this->provider,
            'provider_id' => $this->provider_id,
            'registered_at' => $this->registered_at->toIso8601String(),
            'posts_count' => $this->posts_count ?? $this->posts()->count(),
            'roles' => Role::collection($this->roles),
        ];
    }
}
