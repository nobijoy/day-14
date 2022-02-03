<?php
namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result = [];
    public function __construct($post=null)
    {
        if (isset($post['search'])){

            $this->text = $post['search'];
        }
    }

    public function getAllStudent(){
        return[
            0 => [
                'name' => 'Shahabuddin Khan',
                'mobile' => '02151245',
                'email' => 'habijabi@mail.com',
                'address' => 'lalbagh'
            ],
            1 =>[
                'name' => 'rafa tatrapia',
                'mobile' => '021455158',
                'email' => 'rafa@gmail.com',
                'address' => 'rampura'
            ],
            2 =>[
                'name' => 'Alamin',
                'mobile' => '0154561',
                'email' => 'bapparaj@mail.com',
                'address' => 'bashtola'
            ],
            3 =>[
                'name' => 'Joy',
                'mobile' => '01846434816',
                'email' => 'nobijoy@mail.com',
                'address' => 'Vatara'
            ],
            4 =>[
                'name' => 'Moshiur',
                'mobile' => '0135895863',
                'email' => 'fgbgnk@mail.com',
                'address' => 'nodda'
            ],
            5 =>[
                'name' => 'tanvir',
                'mobile' => '0264851',
                'email' => 'hgfcgjhngfjhn@mail.com',
                'address' => 'moghbazar'
            ],
        ];
    }
    public function getStudentBySearchText(){
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student){
            if ($this->text == $student['name']) {
                $this->result = $student;
                break;
            }
        }
        return $this->result;

    }

}