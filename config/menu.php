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
                                                            "title"=>"Note",
                                                            "link"=> "ok",
                                                            "icon" => "fa-sticky-note"
                                                        ],
                                                        [
                                                            "title"=>"Files",
                                                            "link"=> "ok",
                                                            "icon" => "fa-file"
                                                        ]
                                                    ]
                                    ]

                                ],
                 "admin-bottom" =>[
                                    [
                                        "title"=>"home",
                                        "link"=>"#",
                                        "icon" => "fa-envelope"
                                    ],
                                    [
                                        "title"=>"Departments",
                                        "link"=>"#",
                                        "icon" => "fa-envelope"
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