<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Show job creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store job.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'keywords' => 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'type' => 'required',
        ]);

        $request->user()->jobs()->create($formFields);

        return redirect('/dashboard')->with('status', __('Empleo creado correctamente.'));
    }

    /**
     * Show job edit form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Job $job)
    {
        $this->authorize('deleteOrUpdate', $job);
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update job.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, Job $job)
    {
        $this->authorize('deleteOrUpdate', $job);

        $formFields = $request->validate([
            'keywords' => 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'type' => 'required',
        ]);

        $job->update($formFields);

        return redirect('/dashboard')->with('status', __('Empleo actualizado correctamente.'));
    }

    /**
     * Delete job.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete(Job $job)
    {
        $this->authorize('deleteOrUpdate', $job);
        $job->delete();

        return redirect('/dashboard')->with('status', __('Empleo borrado correctamente.'));
    }

    /**
     * Show job.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Job $job)
    {

        return view('jobs.show', ['job' => $job]);
    }
}
