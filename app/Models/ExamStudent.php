<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamStudent
 * 
 * @property int $exam_id
 * @property int $student_id
 * @property int $vote
 * 
 * @property Exam $exam
 * @property Student $student
 *
 * @package App\Models
 */
class ExamStudent extends Model
{
	protected $table = 'exam_student';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'exam_id' => 'int',
		'student_id' => 'int',
		'vote' => 'int'
	];

	protected $fillable = [
		'vote'
	];

	public function exam()
	{
		return $this->belongsTo(Exam::class);
	}

	public function student()
	{
		return $this->belongsTo(Student::class);
	}
}
