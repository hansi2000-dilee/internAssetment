<?php

namespace domain\Services;
use App\Models\Student;

use infrastructure\Facades\ImagesFacade;

class StudentService
{

    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function all()
    {
        return $this->student->all();
    }
    public function get($studentView_id)
    {
        return $this->student->find($studentView_id);
    }
    public function allActive(){
        return $this->student->allActive();
    }

    public function store($data)
    {
        if(isset($data['images'])){
            $image = ImagesFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        $this->student->create($data);
    }
    public function delete($studentView_id)
    {
        $student = $this->student->find($studentView_id);
        $student->delete();
    }

    public function status($studentView_id)
    {
        $student = $this->student->find($studentView_id);
        if($student->status == 0){

            $student->status = 1;
            $student->update();

        }else{

            $student->status = 0;
            $student->update();

        }

    }
    protected function edit(Student $student, $data)
    {
        return array_merge($student->toArray(), $data);
    }
    
    public function update(array $data, $studentView_id)
    {
        $student = $this->student->find($studentView_id);
        $student->update($this->edit($student, $data));
    }


}
