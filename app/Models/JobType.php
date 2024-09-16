<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobType
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Vacancy[] $vacancies
 *
 * @package App\Models
 */
class JobType extends Model
{
	protected $table = 'job_types';

	protected $fillable = [
		'name',
		'description'
	];

	public function vacancies()
	{
		return $this->hasMany(Vacancy::class, 'job_types');
	}
}
