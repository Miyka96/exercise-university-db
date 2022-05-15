<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseTeacher
 * 
 * @property int $course_id
 * @property int $teacher_id
 * 
 * @property Course $course
 * @property Teacher $teacher
 *
 * @package App\Models
 */
class CourseTeacher extends Model
{
	protected $table = 'course_teacher';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'teacher_id' => 'int'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}
}
