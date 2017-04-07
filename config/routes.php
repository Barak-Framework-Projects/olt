<?php

ApplicationRoutes::draw(

  // CAPTCHA

  get("/captcha", "captcha#show"),

  // AJAX

  post("/ajax/producttype"),

  // LANGUAGE

  get("/lang/en"),
  get("/lang/tr"),

  // HOME

  root("home#index"),
  get("/home", "home#index"),
  get("/home/index"),
  get("/home/about"),
  get("/home/contact"),
//  post("/home/mail_send"),

  //get("/home/categories/producttypes/products"),

  // get("/solutions/network", "solutionpage#network", "/home"),

  scope("/home",
    [
    get("/pages/:id", "page#show"),
    ],

    [
    get("/agendas", "agendapage#index"),
    get("/agendas/show/:id", "agendapage#show"),
    post("/agendas", "agendapage#index"),
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
    ],

    [
    get("/documents", "documentpage#index")
    ],

    [
    get("/articles", "articlepage#index"),
    get("/articles/show/:id", "articlepage#show"),
    ]

    ),

  // ADMIN

  get("/admin", "admin#index"),
  get("/admin/index"),

  get("/admin/login"),
  post("/admin/login"),
  get("/admin/logout"),
  get("/admin/password_reset/:code", "admin#password_reset"),
  post("/admin/password_reset"),

  // get("/category", "category#index", "admin"),
  // resources("/category", "admin"),
  // post("/category/ajax", false, "admin"),

  scope("/admin",
    resources("/categories"),
    resources("/producttypes"),
    resources("/products"),
    resources("/users"),
    resources("/partners"),
    resources("/references"),
    resources("/galleries"),
    resources("/agendas"),
    resources("/slides"),
    resources("/notices"),
    resources("/pages"),
    resources("/documents"),
    resources("/articles"),
    [ post("/agendaimages/destroy") ],
    [
    get("/activations", "activations#index"),
    get("/activations/destroy_live"),
    get("/activations/destroy_dead"),
    get("/activations/destroy_all"),
    post("/activations/destroy")
    ],
    [
    get("/settings/show"),
    get("/settings/edit"),
    post("/settings/update"),
    ]
    )

  );

?>