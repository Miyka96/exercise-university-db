<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $id
 * @property int $degree_id
 * @property string $name
 * @property string $surname
 * @property Carbon $date_of_birth
 * @property string $fiscal_code
 * @property Carbon $enrolment_date
 * @property string $registration_number
 * @property string $email
 * 
 * @property Degree $degree
 * @property Collection|Exam[] $exams
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'students';
	public $timestamps = false;

	protected $casts = [
		'degree_id' => 'int'
	];

	protected $dates = [
		'date_of_birth',
		'enrolment_date'
	];

	protected $fillable = [
		'degree_id',
		'name',
		'surname',
		'date_of_birth',
		'fiscal_code',
		'enrolment_date',
		'registration_number',
		'email'
	];

	public function degree()
	{
		return $this->belongsTo(Degree::class);
	}

	public function exams()
	{
		return $this->belongsToMany(Exam::class)
					->withPivot('vote');
	}
}
