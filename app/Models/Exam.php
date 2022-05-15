<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Exam
 * 
 * @property int $id
 * @property int $course_id
 * @property Carbon $date
 * @property Carbon $hour
 * @property string $location
 * @property string $address
 * 
 * @property Course $course
 * @property Collection|Student[] $students
 *
 * @package App\Models
 */
class Exam extends Model
{
	protected $table = 'exams';
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int'
	];

	protected $dates = [
		'date',
		'hour'
	];

	protected $fillable = [
		'course_id',
		'date',
		'hour',
		'location',
		'address'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function students()
	{
		return $this->belongsToMany(Student::class)
					->withPivot('vote');
	}
}
