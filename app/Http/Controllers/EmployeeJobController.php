<?php

namespace App\Http\Controllers;

use App\Models\EmployeeJob;
use Illuminate\Http\Request;
use App\Services\EmployeeJobService;
use App\Contracts\Interfaces\EmployeeJobInterface;
use App\Http\Requests\EmployeJobRequest;

class EmployeeJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private EmployeeJobInterface $interface;

    /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\EmployeeJobInterface  $example
     * @return void
     */
    public function __construct(
        EmployeeJobInterface $interface,
    ) {
        $this->interface = $interface;
    }
    public function index()
    {
        $employeeJobs = $this->interface->get();
        return view('pages.super-admin.employee-job.index', compact('employeeJobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeJobRequest $request)
    {
        try {
            $this->interface->store($request->validated());

            return to_route(route: 'employeeJob.index')->with('success', 'Berhasil menambahkan Job!');
        } catch (\Throwable $e) {
            return to_route('employeeJob.index')->with('error', 'Gagal menambahkan job. ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeJob $employeeJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeJob $employeeJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeJobRequest $request, EmployeeJob $employeeJob)
    {
        try {
            $this->interface->update($employeeJob->id, $request->validated());
            return to_route(route: 'employeeJob.index')->with('success', 'Berhasil Memperbarui Job!');
        } catch (\Throwable $e) {
            return to_route('employeeJob.index')->with('error', 'Gagal Memperbarui job. ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeJob $employeeJob)
    {
        try {
            $this->interface->delete($employeeJob->id);
            return to_route(route: 'employeeJob.index')->with('success', 'Berhasil Menghapus Job!');
        } catch (\Throwable $e) {
            return to_route('employeeJob.index')->with('error', 'Gagal Menghapus job. ' . $e->getMessage());
        }

    }
}
