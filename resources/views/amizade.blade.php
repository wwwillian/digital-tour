@extends('layouts.amizade')
@section('content')
<!--Section: Group of personal cards-->

<div class="container">
  <div class="mt-5">
    <div class="col-lg-12 col-md-12 col-xl-12 mt-5">
    <div class="row">
    <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" id="pesquisar" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-4 mt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="view overlay flip-card-front">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>

                        <!-- mdbCard image-->
                        <!-- mdbCard content -->
                        <div class="card-body">
                            <!-- Title-->
                            <a>
                                <h4 class="card-title">John</h4>
                            </a>
                            <a class="card-meta">Coworker</a>
                            <!-- Text -->
                            <p class="card-text">John is a copywriter living in Seattle.</p>
                            <hr>
                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                            <p class="card-meta float-right">Joined in 2015</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                        <p>We love that guy</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="view overlay flip-card-front">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>

                        <!-- mdbCard image-->
                        <!-- mdbCard content -->
                        <div class="card-body">
                            <!-- Title-->
                            <h4 class="card-title">John</h4>

                            <a class="card-meta">Coworker</a>
                            <!-- Text -->
                            <p class="card-text">John is a copywriter living in Seattle.</p>
                            <hr>
                            <span><i class="fa fa-user"></i> 48 Friends</span>
                            <p class="card-meta float-right">Joined in 2015</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                        <p>We love that guy</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-4 mt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="view overlay flip-card-front">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>

                        <!-- mdbCard image-->
                        <!-- mdbCard content -->
                        <div class="card-body">
                            <!-- Title-->
                            <a>
                                <h4 class="card-title">John</h4>
                            </a>
                            <a class="card-meta">Coworker</a>
                            <!-- Text -->
                            <p class="card-text">John is a copywriter living in Seattle.</p>
                            <hr>
                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                            <p class="card-meta float-right">Joined in 2015</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                        <p>We love that guy</p>

                    </div>
                </div>
            </div>
        </div>

      </div>
      <div class="row">
        <div class="col-4 mt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="view overlay flip-card-front">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>

                        <!-- mdbCard image-->
                        <!-- mdbCard content -->
                        <div class="card-body">
                            <!-- Title-->
                            <a>
                                <h4 class="card-title">John</h4>
                            </a>
                            <a class="card-meta">Coworker</a>
                            <!-- Text -->
                            <p class="card-text">John is a copywriter living in Seattle.</p>
                            <hr>
                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                            <p class="card-meta float-right">Joined in 2015</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                        <p>We love that guy</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="view overlay flip-card-front">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>

                        <!-- mdbCard image-->
                        <!-- mdbCard content -->
                        <div class="card-body">
                            <!-- Title-->
                            <a>
                                <h4 class="card-title">John</h4>
                            </a>
                            <a class="card-meta">Coworker</a>
                            <!-- Text -->
                            <p class="card-text">John is a copywriter living in Seattle.</p>
                            <hr>
                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                            <p class="card-meta float-right">Joined in 2015</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                        <p>We love that guy</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="view overlay flip-card-front">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>

                        <!-- mdbCard image-->
                        <!-- mdbCard content -->
                        <div class="card-body">
                            <!-- Title-->
                            <a>
                                <h4 class="card-title">John</h4>
                            </a>
                            <a class="card-meta">Coworker</a>
                            <!-- Text -->
                            <p class="card-text">John is a copywriter living in Seattle.</p>
                            <hr>
                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                            <p class="card-meta float-right">Joined in 2015</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                        <p>We love that guy</p>

                    </div>
                </div>
            </div>

        </div>

      </div>
    </div>
  </div>


@endsection
