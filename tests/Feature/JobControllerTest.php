<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\Job;
use Database\Factories\JobFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobControllerTest extends TestCase {
	use RefreshDatabase;

	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_job_created() {
		$employer = Employer::factory()->create();

		$response = $this->actingAs( $employer )->post( '/jobs/store', [
			'keywords'    => 'asdas',
			'title'       => 'asdasd',
			'location'    => 'adasd',
			'type'        => 'ssds',
			'description' => 'asdasd',
		] );

		$response->assertRedirect( '/dashboard' );

		$this->assertDatabaseCount( Job::class, 1 );
	}

	public function test_job_not_created() {
		$employer = Employer::factory()->create();

		$response = $this->actingAs( $employer )->post( '/jobs/store', [
			'keywords' => 'asdas',
			'title'    => 'asdasd',
			'location' => 'adasd',
			'type'     => 'ssds',
		] );

		$response->assertStatus( 302 );

		$this->assertDatabaseCount( Job::class, 0 );
	}

	public function test_job_deleted() {
		$this->withoutExceptionHandling();

		$employer = Employer::factory()->has( Job::factory()->count( 1 ))->create();
		$job = $employer->jobs->first();

		$employer2 = Employer::factory()->create();

//		$response = $this->actingAs($employer2)->delete('/jobs/' . $job->id);

//		$response->assertStatus(401);

		$this->assertDatabaseCount( Job::class, 1 );
	}
}
