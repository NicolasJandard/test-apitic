<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Job;

class Specialisation extends JsonResource
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
            'name' => $this->name,
            'job_id' => $this->job_id,
            //'job' => $this->getJob($this->job_id)
        ];
    }

    /*public function getJob($requestedId)
    {
        $job = Job::select(['name'])->where('id', '=', $requestedId)->first();

        return $job->name;
    }*/
}
