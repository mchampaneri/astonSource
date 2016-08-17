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
                                                            "link"=> "ok",
                                                            "icon" => "fa-sticky-note"
                                                        ]
                                                    ]
                                    ]

                                ],
                 "admin-sidebar" =>[
                                    [
                                        "title"=>"home",
                                        "link"=>"#",
                                        "icon" => "fa-home"
                                    ],
                                    [
                                        "title"=>"Departments",
                                        "link"=>"#",
                                        "icon" => "fa-file"
                                    ],
                                    [
                                        "title"=>"home",
                                        "link"=>"#",
                                        "icon" => "fa-envelope"
                                    ],
                                    [
                                        "title"=>"Departments",
                                        "link"=>"#",
                                        "icon" => "fa-envelope",
                                        "has-child" => [
                                                          [
                                                              "title"=>"New",
                                                              "link"=> "ok",
                                                              "icon" => "fa-envelope"
                                                          ]

                                                    ]
                                    ],
                                    [
                                        "title"=>"home",
                                        "link"=>"#",
                                        "icon" => "fa-envelope"
                                    ]

                                 ]
                 ],
    "student" => [
        
                ],
    "faculty" => [
        
    ]

];