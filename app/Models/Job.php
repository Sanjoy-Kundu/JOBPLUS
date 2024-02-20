<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "user_id",
        "adminAccess",
        "companyName",
        "jobTitle",
        "minumumSalary",
        "jobLocation",
        "jobExperience",
        "jobAdditionalRequirement",
        "jobPublishDate",
        "jobSkill",
        "jobCompnayOtherBenifits",
        "jobEmployeeStatus"
     ];

     protected $attributes = ["adminAccess" => "0"];
}
