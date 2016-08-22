<?php


/*
 * Return Array Of menu used in aston
 */

Return [

    "admin" => [ "admin-top" => [
                                    [
                                        "title"=>"Message",
                                        "link" => "#",
                                        "icon" => "fa-envelope"
                                    ],
                                    [
                                        "title"=>"Add",
                                        "link" => "#",
                                        "icon" => "fa-plus",
                                        "has-child" =>[
                                                        [
                                                            "title"=>"Department",
                                                            "link"=> "/workspace/admin/departments/create",
                                                            "icon" => "fa-building"
                                                        ]
                                                    ]
                                    ]

                                ],
                 "admin-sidebar" =>[
                                    [
                                        "title"=>"home",
                                        "link"=>"/workspace/admin",
                                        "icon" => "fa-home"
                                    ],
                                    [
                                        "title"=>"Departments",
                                        "link"=>"/workspace/admin/departments",
                                        "icon" => "fa-building"
                                    ],

                                 ]
                 ],
    "student" => [ "student-top" => [],
                    "student-sidebar" => [
                                            [
                                                "title" => "Assignments",
                                                "link" => "/workspace/student/assignments",
                                                "icon" => "fa-file"
                                            ]
                                        ]
        
                ],
    "faculty" => [ "faculty-top" => [
                                        [
                                            "title" => "notifications",
                                            "link" => "#",
                                            "icon" => "fa-bell"
                                        ],
                                        [
                                            "title" => "Quick Add",
                                            "link" => "#",
                                            "icon" => "fa-plus",
                                            "has-child" => [
                                                            [
                                                                "title" => "Assigment",
                                                                "link" => "#",
                                                                "icon" => "fa-plus"
                                                            ],
                                                            [
                                                                "title" => "Lecture",
                                                                "link" => "#",
                                                                "icon" => "fa-plus"
                                                            ]
                                                        ],
                                        ]
                                    ],

                   "faculty-sidebar" => [
                                            [
                                                "title" => "Assignemtns",
                                                "link" => "#",
                                                "icon" => "fa-file"
                                            ]
                                        ]
        
                    ],

    "hod" => [ 'hod-top' => [

                           ],
               'hod-sidebar' => [
                                    [
                                        "title" => "Subject",
                                        "link" => "#",
                                        "icon" => "fa-file"
                                    ]
                                ]

             ]

];