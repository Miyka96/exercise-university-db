<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string|null $phone
 * @property string $email
 * @property string $website
 * @property string $head_of_department
 * 
 * @property Collection|Degree[] $degrees
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'address',
		'phone',
		'email',
		'website',
		'head_of_department'
	];

	public function degrees()
	{
		return $this->hasMany(Degree::class);
	}
}
