<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 * 
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $phone
 * @property string $email
 * @property string $office_address
 * @property string $office_number
 * 
 * @property Collection|Course[] $courses
 *
 * @package App\Models
 */
class Teacher extends Model
{
	protected $table = 'teachers';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'surname',
		'phone',
		'email',
		'office_address',
		'office_number'
	];

	public function courses()
	{
		return $this->belongsToMany(Course::class);
	}
}
