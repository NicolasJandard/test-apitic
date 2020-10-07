<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Job;
use App\Models\Armor;
use App\Models\Race;
use App\Models\Specialisation;
use App\Models\Skill;
use App\Models\SkillType;


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
            'race' => $this->getRace($this->race_id),
            'health' => $this->health,
            'armor' => $this->getArmor($this->armor_id),
            'job' => $this->job_id,
            'detail' => $this->setPreferences($this->skill_id, $this->job_id, $this->specialisation_id),
        ];
    }

    public function getJob($requestedId)
    {
        $job = Job::select(['name'])->where('id', '=', $requestedId)->first();

        return $job->name;
    }

    public function getArmor($requestedId)
    {
        $armor = Armor::select(['name'])->where('id', '=', $requestedId)->first();

        return $armor->name;
    }

    public function getRace($requestedId)
    {
        $race = Race::select(['name'])->where('id', '=', $requestedId)->first();

        return $race->name;
    }

    public function getSpecialisation($requestedId, $jobId)
    {
        $specialisation = Specialisation::select(['name'])->where('id', '=', $requestedId)
            ->where('job_id', '=', $jobId)->first();

        return $specialisation->name;
    }

    public function getSkill($requestedId, $specialisationId)
    {
        $skill = Skill::select(['name', 'type_id'])->where('id', '=', $requestedId)
            ->where('spe_id', '=', $specialisationId)->first();

        return $skill;
    }

    public function getSkillType($requestedId)
    {
        $skillType = SkillType::select(['name'])->where('id', '=', $requestedId)->first();

        return $skillType->name;
    }


    private function setPreferences($skillId, $jobId, $specialisationId) {
        $specialisation = $this->getSpecialisation($specialisationId, $jobId);
        $job = $this->getJob($jobId);
        $skill = $this->getSkill($skillId, $specialisationId);
        $skillType = $this->getSkillType($skill->type_id);

        return "Je suis un ".$job." avec la spécialisation ".$specialisation." et mon ".$skillType." préféré est ".$skill->name.".";
    }
}
