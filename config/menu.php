<?php


/*
 * Return Array Of menu used in aston
 */


Return [

    "admin" => [ "admin-top" => [

                                    [
                                        "title"=>"Add",
                                        "link" => "#",
                                        "icon" => "fa-plus",
                                        "has-child" =>[

                                                        [
                                                            "title"=>"Department",
                                                            "link"=> "/workspace/admin/departments/create",
                                                            "icon" => "fa-building"
                                                        ],
                                                        [
                                                            "title"=>"Message",
                                                            "link" => "/workspace/messages/create",
                                                            "icon" => "fa-envelope"
                                                        ]
                                                    ]
                                    ],
                                    [
                                        "title" => "Account",
                                        "link" => "#",
                                        "icon" => "fa-cog",
                                        "has-child" => [
                                                        [
                                                            "title" => "Account Setting",
                                                            "link" => "#",
                                                            "icon" => "fa-cogs"
                                                        ],
                                                        [
                                                            "title" => "Profile Settings",
                                                            "link" => "#",
                                                            "icon" => "fa-user"
                                                        ],
                                                        [
                                                            "title" => "Sign Out",
                                                            "link" => "/logout",
                                                            "icon" => "fa-sign-out"
                                                        ]
                                            ]
                                    ]

                                ],
                 "admin-sidebar" =>[
                                    [
                                        "title"=>"home",
                                        "link"=>"workspace/admin/home",
                                        "icon" => "fa-home"
                                    ],
                                    [
                                        "title"=>"Departments",
                                        "link"=>"workspace/admin/departments",
                                        "icon" => "fa-building"
                                    ],

                                 ]
                 ],
    "student" => [ "student-top" => [
                                        [
                                            "title" => "Quick Add",
                                            "link" => "#",
                                            "icon" => "fa-plus",
                                            "has-child" => [
                                                                [
                                                                    "title" => "Upload Certificate",
                                                                    "link" => "workspace/student/results/create",
                                                                    "icon" => "fa-plus"
                                                                ],
                                                                [
                                                                    "title" => "Send Message",
                                                                    "link" => "workspace/message/create",
                                                                    "icon" => "fa-plus"
                                                                ]
                                                            ]
                                        ],
                                        [
                                            "title" => "Account",
                                            "link" => "#",
                                            "icon" => "fa-cog",
                                            "has-child" => [
                                                                [
                                                                    "title" => "Account Setting",
                                                                    "link" => "#",
                                                                    "icon" => "fa-cogs"
                                                                ],
                                                                [
                                                                    "title" => "Profile Settings",
                                                                    "link" => "#",
                                                                    "icon" => "fa-user"
                                                                ],
                                                                [
                                                                    "title" => "Sign Out",
                                                                    "link" => "/logout",
                                                                    "icon" => "fa-sign-out"
                                                                ]
                                                            ]
                                        ]
                                    ],
                    "student-sidebar" => [
                                            [
                                                "title" => "Home",
                                                "link" => "workspace/student/home",
                                                "icon" => "fa-home"
                                            ],
                                            [
                                                "title" => "Assignments",
                                                "link" => "workspace/student/submits",
                                                "icon" => "fa-file"
                                            ],
                                            [
                                                "title" => "Results",
                                                "link" => "workspace/student/results",
                                                "icon" => "fa-certificate"
                                            ],
                                        ]
        
                ],
    "faculty" => [ "faculty-top" => [
                                        [
                                            "title" => "Quick Add",
                                            "link" => "#",
                                            "icon" => "fa-plus",
                                            "has-child" => [
                                                            [
                                                                "title" => "Assigment",
                                                                "link" => "workspace/faculty/assignments/create",
                                                                "icon" => "fa-plus"
                                                            ],
                                                            [
                                                                "title" => "Lecture",
                                                                "link" => "workspace/faculty/lectures/create",
                                                                "icon" => "fa-plus"
                                                            ],
                                                            [
                                                                "title" => "Post",
                                                                "link" => "workspace/faculty/posts/create",
                                                                "icon" => "fa-plus"
                                                            ],
                                                            [
                                                                "title" => "Message",
                                                                "link" => "workspace/message/create",
                                                                "icon" => "fa-plus"
                                                            ]
                                                        ],
                                        ],
                                        [
                                            "title" => "Account",
                                            "link" => "#",
                                            "icon" => "fa-cog",
                                            "has-child" => [
                                                                [
                                                                    "title" => "Account Setting",
                                                                    "link" => "#",
                                                                    "icon" => "fa-cogs"
                                                                ],
                                                                [
                                                                    "title" => "Profile Settings",
                                                                    "link" => "#",
                                                                    "icon" => "fa-user"
                                                                ],
                                                                [
                                                                    "title" => "Sign Out",
                                                                    "link" => "/logout",
                                                                    "icon" => "fa-sign-out"
                                                                ]
                                                            ]
                                        ]
                                    ],

                   "faculty-sidebar" => [
                                               [
                                                   "title" => "home",
                                                   "link" => "workspace/faculty/home",
                                                   "icon" => "fa-home"
                                               ],
                                            [
                                                "title" => "Assignments",
                                                "link" => "workspace/faculty/assignments",
                                                "icon" => "fa-sticky-note"
                                            ],
                                            [
                                                "title" => "Lectures",
                                                "link" => "workspace/faculty/lectures",
                                                "icon" => "fa-tv"
                                            ],
                                            [
                                                "title" => "Posts",
                                                "link" => "workspace/faculty/posts",
                                                "icon" => "fa-image"
                                            ]
                                        ]
        
                    ],

    "hod" => [ 'hod-top' => [

                           ],
               'hod-sidebar' => [
                                    [
                                        "title" => "Subject",
                                        "link" => "workspace/faculty/subjects",
                                        "icon" => "fa-book"
                                    ],

                                       [
                                           "title" => "Verify Users",
                                           "link" => "workspace/faculty/verify",
                                           "icon" => "fa-users"
                                       ]
                                ]

             ]

];