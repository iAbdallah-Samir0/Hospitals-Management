<?php

namespace App\Interfaces\Doctors;


interface DoctorRepositoryInterface
{

   // Get All Sections
    public function index();

    //sort sections
    public function store($request);


    //update sections
    public function update($request);


    //Delete sections
    public function destroy($request);
}

