<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 * 
 * @property int $id
 * @property int $degree_id
 * @property string $name
 * @property string|null $description
 * @property string $period
 * @property int $year
 * @property int $cfu
 * @property string|null $website
 * 
 * @property Degree $degree
 * @property Collection|Teacher[] $teachers
 * @property Collection|Exam[] $exams
 *
 * @package App\Models
 */
class Course extends Model
{
	protected $table = 'courses';
	public $timestamps = false;

	protected $casts = [
		'degree_id' => 'int',
		'year' => 'int',
		'cfu' => 'int'
	];

	protected $fillable = [
		'degree_id',
		'name',
		'description',
		'period',
		'year',
		'cfu',
		'website'
	];

	public function degree()
	{
		return $this->belongsTo(Degree::class);
	}

	public function teachers()
	{
		return $this->belongsToMany(Teacher::class);
	}

	public function exams()
	{
		return $this->hasMany(Exam::class);
	}
}
