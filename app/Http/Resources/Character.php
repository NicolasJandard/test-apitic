<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Character extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pseudo' => $this->pseudo,
            'race' => $this->race->name,
            'job' => $this->job->name,
            'specialisation' => $this->specialisation->name,
            'skill' => $this->skill->name,
            'armor' => $this->armor->name,
            'health' => $this->health,
            'owner' => $this->owner,
        ];
    }
}
