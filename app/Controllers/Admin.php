<?php

namespace App\Controllers;

use Config\Services;
use App\Models\ScheduleModel;

class Admin extends BaseController
{
    protected $scheduleModel;
    public function __construct()
    {
        $this->scheduleModel = new ScheduleModel();
    }

    public function index()
    {
        $schedule = $this->scheduleModel->findAll();

        $data = [
            'title' => 'Schedule Saat Ini',
            'schedule' => $schedule
        ];


        return view('guest/dashboard', $data);
    }

    public function labsoftware()
    {
        $schedule = $this->scheduleModel->findAll();

        $data = [
            'title' => 'Schedule Saat Ini',
            'schedule' => $schedule
        ];


        return view('guest/labsoftware', $data);
    }

    public function labmulmed()
    {
        $schedule = $this->scheduleModel->findAll();

        $data = [
            'title' => 'Schedule Saat Ini',
            'schedule' => $schedule
        ];


        return view('guest/labmulmed', $data);
    }

    public function labnetwork()
    {
        $schedule = $this->scheduleModel->findAll();

        $data = [
            'title' => 'Schedule Saat Ini',
            'schedule' => $schedule
        ];


        return view('guest/labnetwork', $data);
    }

    public function reservasi()
    {
        $schedule = $this->scheduleModel->findAll();

        $data = [
            'title' => 'Schedule Saat Ini',
            'schedule' => $schedule
        ];


        return view('guest/reservasi', $data);
    }

    public function reservasi2()
    {
        $schedule = $this->scheduleModel->findAll();

        $data = [
            'title' => 'Schedule Saat Ini',
            'schedule' => $schedule
        ];


        return view('guest/reservasi-2', $data);
    }

    public function getDataSchedule()
    {
        $request = Services::request();
        $datatable = new ScheduleModel();
        $datatable->initDatatables($request);

        if ($this->request->isAJAX()) {
            $data = $datatable->getDatatables();
            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }

    public function database()
    {
    }
}
