<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'contact_title' => Str::words($this->contact_title, 15),
            'contact_content' => Str::words($this->contact_content, 15),
            'about_title' => Str::words($this->about_title, 15),
            'about_content' => Str::words($this->about_content, 15),
        ];
    }
}
