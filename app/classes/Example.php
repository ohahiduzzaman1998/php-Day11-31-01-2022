<?php


namespace App\classes;

class Example
{
    public $student = [];
    public function index()
    {
        //index -array object sign -valu
        $this->student = [
            0 => [
                'name'      =>'jahid',
                'email'     =>'jahid@gmail.com',
                'mobile'    =>[
                    'mobile1' => '14254454',
                    'mobile2' => '1457896'
                ],
            ],
            1 => [
                'name'      =>'fahim',
                'email'     =>'fahim@gmail.com',
                'mobile'    =>[
                    'mobile1' => '14254454',
                    'mobile2' => '1457896'
                ],
            ],
            2 => 'bitm',
            3 => [
                'name'      =>'shehon',
                'email'     =>'shehon@gmail.com',
                'mobile'    =>[
                    'mobile1' => '14254454',
                    'mobile2' => '1457896'
                ],

            ],
        ];

//        echo '<pre>';
//       print_r($this->student);
//        var_dump($this->student);



//        foreach ($this->student as $key => $item)
//        {
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value;
//                        }
//                    }
//                    else
//                    {
//                    echo $value . ' ';
//                }
//            }
//        }
//                else
//                {
//                    echo $item;
//                }
//                echo '<br/>';
//
//            }



//
//        foreach ($this->student as $key => $item)
//        {
//            if ($key == 0)
//            {
//                echo $item['name'] . ' ' . $item['email'] . ' ' . $item['mobile'] . '<br/>';
//                break;
//            }
//        }


        //echo $this->student[1]['email'];

//        $this->student = [ 10,20,'bitm',10.50,false, true];
//        //echo $this->student[];
//        foreach ($this->student as $key => $item)
//        {
//            echo 'index no- '. $key. 'value-'. $item.'<br/>';
//        }
    }


}