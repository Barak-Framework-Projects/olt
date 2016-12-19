<?php

ApplicationRoutes::draw(

  // AJAX

  post("/ajax/producttype"),

  // LANGUAGE

  get("/lang/en"),
  get("/lang/tr"),

  // HOME

  get("/", "home#home"),
  get("/home", "home#home"),
  get("/home/index"),
  get("/home/contact"),

  scope("home",
    [
    get("/agendas", "agendapage#index"),
    get("/agendas/show/:id", "agendapage#show"),
    post("/agendas", "agendapage#index"),
  	],
    [
    get("/corporate", "corporatepage#about"),
    get("/corporate/about", "corporatepage#about"),
    get("/corporate/our_focus", "corporatepage#our_focus"),
    get("/corporate/service_policy", "corporatepage#service_policy"),
    get("/corporate/human_resources", "corporatepage#human_resources"),
    ],
    [
    get("/solutions", "solutionpage#network"),
    get("/solutions/structural_cabling", "solutionpage#structural_cabling"),
    get("/solutions/fiber_optic_infrastructure", "solutionpage#fiber_optic_infrastructure"),
    get("/solutions/network", "solutionpage#network"),
    get("/solutions/server", "solutionpage#server"),
    get("/solutions/security", "solutionpage#security"),
    get("/solutions/wireless", "solutionpage#wireless"),
    get("/solutions/video_conference", "solutionpage#video_conference"),
    ],
    [
    get("/references", "referencepage#index"),
    ],
    [
    get("/categories", "categorypage#index"),
    get("/categories/show/:id", "categorypage#show")
    ],

    [
    get("/products", "productpage#index"),
    get("/products/search", "productpage#search"),
    get("/products/show/:id", "productpage#show"),
    post("/products/find", "productpage#find")
    ],

    [
    get("/producttypes/show/:id", "producttypepage#show"),
    post("/producttypes/find", "producttypepage#find")
    ],

    [
    get("/gallery", "gallerypage#index")
    ]

    ),

  // ADMIN

  get("/admin/login"),
  post("/admin/login"),
  get("/admin/logout"),

  get("/admin", "admin#index"),
  get("/admin/index"),

  // get("/category", "category#index", "admin"),
  // resources("/category", "admin"),
  // post("/category/ajax", false, "admin"),

  scope("admin",
    resources("/categories"),
    resources("/producttypes"),
    resources("/products"),
    resources("/users"),
    resources("/partners"),
    resources("/references"),
    resources("/galleries"),
    resources("/agendas"),
    [ post("/agendaimages/destroy") ]
    )

  );

?>