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
                                Atulizar Perfil
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <!-- Reply section (logged in user) -->
    <!--Section: Comments-->
        <div class="card-header border-0 font-weight-bold">Postagem...</div>
        @foreach($posts as $key => $value)
        <div class="row">
         <section class="my-5">
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
            </div>
         </div>
         </section>
        </div>
        @endforeach

                <div class="media d-block d-md-flex mt-4">
                    <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                         src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" width="60"
                         alt="Generic placeholder image">
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="font-weight-bold mt-0">
                            <a class="text-default" href=""></a>
                            <a href="" class="pull-right text-default">
                                <i class="fas fa-reply"></i>
                            </a>
                        </h5>
                        <p>Bom dia, boa tarde ou boa noite pra você que está em busca de recolocação, tudo bem?

                            Se liga nessa oportunidade incrível:

                            Uma conhecida possui uma empresa que além dos serviços pagos, possui um trabalho voluntário para avaliação de currículos, assim você recebe a ajuda que você precisa para conseguir um emprego (ou talvez um novo).

                            Olha a mensagem dela:


                            *_*OPORTUNIDADE_**
                            Válida apenas até 07/05/2019

                            Acompanhe conteúdo sobre Empregabilidade e Receba uma avaliação gratuita do seu CURRÍCULO \o/

                            Quer saber como?

                            Conheça a Rennova Minds

                            Instagram @RennovaMinds - https://www.instagram.com/p/Bvhh
                            AnFB1uu/?igshid=1oh4km261hzuf

                            LinkedIn: Rennova Minds - https://www.linkedin.com/company/renn
                            ovaminds

                            Facebook: Rennova Minds - https://www.facebook.com/rennovaminds/

                            ATENÇÃO: Entrega de currículos somente até 07/05. Você tem até dois dias para começar a acompanhar o conteúdo e receber uma avaliação gratuita do seu currículo!

                            Boa sorte ⚡</p>
                    </div>
                </div>
                <div class="media d-block d-md-flex mt-3">
                    <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                         src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" width="60"
                         alt="Generic placeholder image">
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="font-weight-bold mt-0">
                            <a class="text-default" href="">Gisele the Cat</a>
                            <a href="" class="pull-right text-default">
                                <i class="fas fa-reply"></i>
                            </a>
                        </h5>
                        <p>"Sabedoria é saber o que fazer. Habilidade é saber como fazer. Virtude é fazer." DAVID STARR JORDAN</p>
                    </div>
                </div>

                <!-- Quick Reply -->

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

        <!--Pagination -->
{{--        <nav class="d-flex justify-content-center mt-5">--}}
{{--            <ul class="pagination pagination-circle pg-teal mb-0">--}}

{{--                <!--First-->--}}
{{--                <li class="page-item disabled">--}}
{{--                    <a class="page-link">Proxima...</a>--}}
{{--                </li>--}}

{{--                <!--Arrow left-->--}}
{{--                <li class="page-item disabled">--}}
{{--                    <a class="page-link" aria-label="Previous">--}}
{{--                        <span aria-hidden="true">&laquo;</span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <!--Numbers-->--}}
{{--                <li class="page-item active">--}}
{{--                    <a class="page-link">1</a>--}}
{{--                </li>--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link">2</a>--}}
{{--                </li>--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link">3</a>--}}
{{--                </li>--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link">4</a>--}}
{{--                </li>--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link">5</a>--}}
{{--                </li>--}}

{{--                <!--Arrow right-->--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" aria-label="Next">--}}
{{--                        <span aria-hidden="true">&raquo;</span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <!--Last-->--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link">Last</a>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--        </nav>--}}
        <!--Pagination -->

                            </div></div>



@endsection

@section('js')
<script>
        CKEDITOR.replace( 'description' );
    </script>

@endsection
