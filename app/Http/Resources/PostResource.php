<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PostResource extends JsonResource
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
            'id'=>$this->id,
            'title'=>$this->title,
            'slug'=>$this->slug,
            'test'=>'dsadas das dasd ads ad asdsa das',
            'preview_content'=>$this->preview_content,
            'content'=>$this->content,
            'active'=>$this->active,
            'publication_date'=>$this->publication_date,
            'categories'=>$this->categories,
            'tags'=>$this->tags,
            'user'=>$this->user,
            'category_names'=> self::getCategoryNames($this->categories),
        ];
    }

    public function getCategoryNames($categories){
        $category_names = " ";
        if (count($categories))
        {
            foreach ($categories as $category) {
                $category_names .= $category->name.', ';
            }
        }

        return $category_names;
    }
}
