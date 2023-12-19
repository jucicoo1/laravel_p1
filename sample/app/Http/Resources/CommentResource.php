<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use function sprintf;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'    =>  $this->resource['id'],
            'body'  =>  $this->resource['body'],
            '_links'    =>  [
                'self'  =>  [
                    'href'  => sprintf('https://example.com/%s', $this->resource['id']),
                ]
            ]
        ];
    }
}
