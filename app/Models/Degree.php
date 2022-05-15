<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Degree
 * 
 * @property int $id
 * @property int $department_id
 * @property string $name
 * @property string $level
 * @property string $address
 * @property string $email
 * @property string $website
 * 
 * @property Department $department
 * @property Collection|Course[] $courses
 * @property Collection|Student[] $students
 *
 * @package App\Models
 */
class Degree extends Model
{
	protected $table = 'degrees';
	public $timestamps = false;

	protected $casts = [
		'department_id' => 'int'
	];

	protected $fillable = [
		'department_id',
		'name',
		'level',
		'address',
		'email',
		'website'
	];

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function courses()
	{
		return $this->hasMany(Course::class);
	}

	public function students()
	{
		return $this->hasMany(Student::class);
	}
}
