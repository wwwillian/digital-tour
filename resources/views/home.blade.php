@extends('layouts.conectado')

@section('content')

    <div class="container">
    <!-- Reply section (logged in user) -->
    <section class="my-5">

        <div class="card-header border-0 font-weight-bold">Postagem</div>

        <div class="d-md-flex flex-md-fill mt-4 px-1">
            <div class="col-2">
            <div class="d-flex justify-content-center mr-md-5">
                @if(auth()->user()->image != null)
                    <img src="{{ url('storage/users/'.auth()->user()->image) }}" id="btnMostrarEsconder1" alt="img perfil"class="card-img-100 z-depth-1 mb-4 btnMostrarEsconder1">
                @else
                    <img src="/img/user.png" id="btnMostrarEsconder1" alt="img perfil" class="card-img-100 z-depth-1 mb-4 btnMostrarEsconder1">
                @endif
            </div>
            </div>
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('erro'))
                     <div class="alert alert-danger">
                         {{ session('erro') }}
                     </div>
                @endif
                <form method="POST" action="{{ route('postsUpdate') }}" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" id="escondido" name="user_id">
                <textarea class="form-control" name="description" id="description" type="description"></textarea>

                    <div class="form-group mt-3 row">
                        <label for="photo" class="col-md-2 col-form-label text-md-right">Publique sua foto:</label>

                        <div class="col-md-10">
                            <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" autocomplete="current-image">

                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="submit-form">
                                Publicar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
        <div class="container">
    <!-- Reply section (logged in user) -->
    <!--Section: Comments-->
        <div class="card-header border-0 font-weight-bold">Posts</div>
{{--        @foreach($posts as $key => $value)--}}
{{--            <section>--}}
{{--                <div class="row">--}}
{{--             <div class="media d-block d-md-flex mt-4">--}}
{{--                @if(auth()->user()->image != null)--}}
{{--                     <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"--}}
{{--                        src="{{ url('storage/users/'.$value->user[0]->image) }}" width="80" alt="Generic placeholder image">--}}
{{--                @else--}}
{{--                     <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"--}}
{{--                        src="/img/user.png" width="90" alt="Generic placeholder image">--}}
{{--                @endif--}}
{{--            <div class="media-body text-center text-md-left ml-md-3 ml-0">--}}
{{--                <h5 class="font-weight-bold mt-0">--}}
{{--                    <a class="text-default" href="">{{ $value->user[0]->name }}</a>--}}
{{--                    <a href="" class="pull-right text-default">--}}
{{--                        <i class="fas fa-reply"></i>--}}
{{--                    </a>--}}
{{--                </h5>--}}
{{--                    {!!$value->description!!}--}}

{{--            </div>--}}
{{--         </div>--}}
{{--        </div>--}}
{{--            </section>--}}
{{--            @endforeach--}}


            <section>
                @foreach($posts as $key => $value)
                <div class="media d-block d-md-flex mt-4">
                    @if(auth()->user()->image != null)
                        <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                             src="{{ url('storage/users/'.$value->user[0]->image) }}" width="90" alt="Generic placeholder image">
                    @else
                        <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                             src="/img/user.png" width="90" alt="Generic placeholder image">
                    @endif
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="font-weight-bold mt-0">
                            <a class="text-default" href="">{{ $value->user[0]->name }}</a>
                            <a href="" class="pull-right text-default">
                                <i class="fas fa-reply"></i>
                            </a>
                        </h5>
                        {!!$value->description!!}
                        <hr>
                        @if($value->user_id === auth()->user()->id)
                        <ul class="">
                            <li><a>Editar</a></li>
                            <li><a>Excluir</a></li>
                        </ul>
                        @else
                            <ul class="">
                                <li><a>Comentar</a></li>
                                <li><a>Like</a></li>
                            </ul>
                        @endif
                        <div class="media d-block d-md-flex mt-4">
                            <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                                 src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" width="60"
                                 alt="Generic placeholder image">
                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="font-weight-bold mt-0">
                                    <a class="text-default" href="">Tommy Smith</a>
                                    <a href="" class="pull-right text-default">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                </h5>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque
                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </div>
                        </div>
                        <div class="media d-block d-md-flex mt-3">
                            <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                                 src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" width="60"
                                 alt="Generic placeholder image">
                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="font-weight-bold mt-0">
                                    <a class="text-default" href="">Sylvester the Cat</a>
                                    <a href="" class="pull-right text-default">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                </h5>
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                                quia non numquam eius modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                            </div>
                        </div>

                        <!-- Quick Reply -->
{{--                        <form method="POST" action="{{ route('comments') }}" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" id="escondido1" name="user_id">--}}

{{--                            <input type="hidden" id="escondido2" name="post_id" {{ dd($value->id) }}>--}}
{{--                        <div class="md-form mt-4">--}}
{{--                            <label for="quickReplyFormComment card-header border-0 font-weight-bold">Your comment</label>--}}
{{--                            <textarea class="form-control md-textarea" id="comments" name="comments" rows="3"></textarea>--}}

{{--                            <div class="text-center my-4">--}}
{{--                                <button class="btn btn-default btn-sm btn-rounded" type="submit">Post</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        </form>--}}
                    </div>
                </div>
{{--                <div class="media d-block d-md-flex mt-3">--}}
{{--                    <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"--}}
{{--                         src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" width="90" alt="Generic placeholder image">--}}
{{--                    <div class="media-body text-center text-md-left ml-md-3 ml-0">--}}
{{--                        <h5 class="font-weight-bold mt-0">--}}
{{--                            <a class="text-default" href="">Caroline Horwitz</a>--}}
{{--                            <a href="" class="pull-right text-default">--}}
{{--                                <i class="fas fa-reply"></i>--}}
{{--                            </a>--}}
{{--                        </h5>--}}
{{--                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti--}}
{{--                        atque corrupti--}}
{{--                        quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa--}}
{{--                        officia deserunt mollitia animi, id est laborum et dolorum fuga.--}}
{{--                    </div>--}}
{{--                </div>--}}
            </section>
    @endforeach
                <!--
                                <div class="md-form mt-4">
                                    <label for="quickReplyFormComment">Post aqui seus comentarios</label>
                                    <textarea class="form-control md-textarea" id="quickReplyFormComment" rows="3"></textarea>

                                    <div class="text-center my-4">
                                        <button class="btn btn-default btn-sm btn-rounded" type="submit">Enviar</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="media d-block d-md-flex mt-3">
                            <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                                 src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" width="90" alt="Generic placeholder image">
                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="font-weight-bold mt-0">
                                    <a class="text-default" href="">Debora Victor</a>
                                    <a href="" class="pull-right text-default">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                </h5>
                                <img src="img/001.jpg" width="100%">

                            </div>
                        </div>

                        Pagination -->
        <!-- <nav class="d-flex justify-content-center mt-5">
            <ul class="pagination pagination-circle pg-teal mb-0">

                First-->
                <!-- <li class="page-item disabled">
                    <a class="page-link">Proxima...</a>
                </li> -->

                <!--Arrow left-->
                <!-- <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li> -->

                <!--Numbers-->
                <!-- <li class="page-item active">
                    <a class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link">5</a>
                </li> -->

                <!--Arrow right-->
                <!-- <li class="page-item">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li> -->

                <!--Last-->
                <!-- <li class="page-item">
                    <a class="page-link">Last</a>
                </li>

            </ul>
        </nav> -->
        <!--Pagination -->

                            <!-- </div></div> -->

@endsection

@section('js')
<script>
        CKEDITOR.replace( 'description' );
    </script>

@endsection
