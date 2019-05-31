@extends('layouts.masterConectado')

@section('content')

</div>
<!-- Foto Perfil - Personalizado -->
<div class="content">
    <div class="col-lg-12 col-md-12 col-xl-12">

        <div class="awesome user width-cover ">
            <div class="container img-fundo" id="btnMostrarEsconder" style="background-image: url('img/006.jpg');">
                <div class="items-banner"></div>
                <div class="img-perfil">
                    <a href="#"><img src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" id= "btnMostrarEsconder1"divConteudo alt="img perfil"
                                     width="120"></a>
                    <a href="#" class="btn btn-primary btn-small btn-alt-foto divConteudo1" data-toggle="modal">Alterar Foto</a>
                </div>
                <h1 class="perfil ">João Victor</h1>
                <a class="btn btn-primary btn-embossed btn-capa divConteudo" data-toggle="modal" href="#">Alterar Capa</a>

            </div>
        </div>
    </div>
    <!-- Cabecalho de postagem! -->
    <div class="row">
        <div class="col-lg-12">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="tab-header card">
                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tposts" role="tab">Posts</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tamigos" role="tab">Amigos</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tfotos" role="tab">Galeria</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tvideos" role="tab">Videos</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tperfil" role="tab">Perfil</a>
                        <div class="slide"></div>
                    </li>
                </ul>
            </div>


            <div class="tab-content">
                <!--Perfil -->
                <div class="tab-pane" id="tperfil" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Perfil</h5>
                            <button id="edit-btn" type="button"
                                    class="btn btn-sm btn-primary waves-effect waves-light f-right">Editar</button>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-xs-6">
                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">Nome Completo</th>
                                                                <td>Sheldon Cupper</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Genero</th>
                                                                <td>Masculino</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Aniversario</th>
                                                                <td> 250 de julho de 1984</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Status Civil</th>
                                                                <td>Solteiro</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Localizacao</th>
                                                                <td>Sao Paulo, BR</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">E-Mail</th>
                                                                <td><a href="#">email@exemplo.com</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Celular</th>
                                                                <td>(011) - 95555-8985</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Twitter</th>
                                                                <td>@twitter</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Skype</th>
                                                                <td>sheldon.skype</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Facebook</th>
                                                                <td><a href="#">www.facebook.com/sheldon</a></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- editar perfil -->
                            <div class="edit-info" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info form-material">
                                            <div class="row">
                                                <div class="col-lg-6 ">
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-user"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Full Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-mars-double"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <div class="form-radio">
                                                                <div class="group-add-on">
                                                                    <div class="radio radiofill radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="radio" checked=""><i
                                                                                class="helper"></i> Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio radiofill radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="radio"><i
                                                                                class="helper"></i> Female
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-birthday-cake"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Select Your Birth Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-heart"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <select id="hello-single" class="form-control">
                                                                <option value="">---- Marital Status ----</option>
                                                                <option value="married">Married</option>
                                                                <option value="unmarried">Unmarried</option>
                                                            </select>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-location-pin"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Address</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Mobile Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-social-twitter"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Twitter Id</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-social-skype"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Skype Id</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-earth"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">website</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="text-center">
                                                <a href="#"
                                                   class="btn btn-primary waves-effect waves-light m-r-20">Salvar</a>
                                                <a href="#" id="edit-cancel"
                                                   class="btn btn-default waves-effect">Cancelar</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Escreva sobre sua melhores experiencias</h5>
                                    <button id="edit-info-btn" type="button"
                                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                        <i class="icofont icofont-edit"></i>
                                    </button>
                                </div>
                                <div class="card-block user-desc">
                                    <div class="view-desc">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of
                                            classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                            McClintock, a
                                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                            obscure Latin
                                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of
                                            the word in
                                            classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                                            sections 1.10.32
                                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                                            by Cicero,
                                            written in 45 BC. This book is a treatise on the theory of ethics, very popular
                                            during the
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                                            comes from a line in
                                            section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is
                                            reproduced below for
                                            those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                            Malorum" by Cicero
                                            are also reproduced in their exact original form, accompanied by English
                                            versions from the 1914
                                            translation by H. Rackham.</p>
                                    </div>
                                    <div class="edit-desc" style="display: none;">
                                        <div class="col-md-12">
                                        <textarea id="description" style="visibility: hidden; display: none;">                                                                                    &lt;p&gt;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.&lt;/p&gt;
                                                                                                    </textarea>
                                            <div id="cke_description"
                                                 class="cke_1 cke cke_reset cke_chrome cke_editor_description cke_ltr cke_browser_gecko"
                                                 dir="ltr" role="application" aria-labelledby="cke_description_arialbl"
                                                 lang="pt-br"><span id="cke_description_arialbl"
                                                                    class="cke_voice_label">Editor de Rich Text, description</span>
                                                <div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top"
                                                                                                           class="cke_top cke_reset_all" role="presentation"
                                                                                                           style="height: auto; -moz-user-select: none;"><span id="cke_7"
                                                                                                                                                               class="cke_voice_label">Barra de Ferramentas do
                                                        Editor</span><span id="cke_1_toolbox" class="cke_toolbox"
                                                                           role="group" aria-labelledby="cke_7"
                                                                           onmousedown="return false;"><span id="cke_10"
                                                                                                             class="cke_toolbar" aria-labelledby="cke_10_label"
                                                                                                             role="toolbar"><span id="cke_10_label"
                                                                                                                                  class="cke_voice_label">Clipboard/Desfazer</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a id="cke_11"
                                                                                                                 class="cke_button cke_button__undo cke_button_disabled "
                                                                                                                 title="Desfazer (Ctrl+Z)" tabindex="-1"
                                                                                                                 hidefocus="true" role="button"
                                                                                                                 aria-labelledby="cke_11_label"
                                                                                                                 aria-describedby="cke_11_description"
                                                                                                                 aria-haspopup="false" aria-disabled="true"
                                                                                                                 onblur="this.style.cssText = this.style.cssText;"
                                                                                                                 onkeydown="return CKEDITOR.tools.callFunction(2,event);"
                                                                                                                 onfocus="return CKEDITOR.tools.callFunction(3,event);"
                                                                                                                 onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span
                                                                            class="cke_button_icon cke_button__undo_icon"
                                                                            style="background-image:url('');background-position:0 -2256px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_11_label"
                                                                            class="cke_button_label cke_button__undo_label"
                                                                            aria-hidden="false">Desfazer</span><span
                                                                            id="cke_11_description" class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                        Ctrl+Z</span></a><a id="cke_12"
                                                                                            class="cke_button cke_button__redo cke_button_disabled "
                                                                                            title="Refazer (Ctrl+Y)" tabindex="-1"
                                                                                            hidefocus="true" role="button"
                                                                                            aria-labelledby="cke_12_label"
                                                                                            aria-describedby="cke_12_description"
                                                                                            aria-haspopup="false" aria-disabled="true"
                                                                                            onblur="this.style.cssText = this.style.cssText;"
                                                                                            onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                                                            onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                                                            onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                            class="cke_button_icon cke_button__redo_icon"
                                                                            style="background-image:url('');background-position:0 -2208px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_12_label"
                                                                            class="cke_button_label cke_button__redo_label"
                                                                            aria-hidden="false">Refazer</span><span
                                                                            id="cke_12_description" class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                        Ctrl+Y</span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span id="cke_13"
                                                                                                                class="cke_toolbar" aria-labelledby="cke_13_label"
                                                                                                                role="toolbar"><span id="cke_13_label"
                                                                                                                                     class="cke_voice_label">Estilos</span><span
                                                                    class="cke_toolbar_start"></span><span id="cke_8"
                                                                                                           class="cke_combo cke_combo__styles cke_combo_off"
                                                                                                           role="presentation"><span id="cke_8_label"
                                                                                                                                     class="cke_combo_label">Estilo</span><a
                                                                        class="cke_combo_button"
                                                                        title="Estilos de Formatação" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_8_label" aria-haspopup="true"
                                                                        onblur="this.style.cssText = this.style.cssText;"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(9,event,this);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(10,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(8,this);return false;"><span
                                                                            id="cke_8_text"
                                                                            class="cke_combo_text cke_combo_inlinelabel">Estilo</span><span
                                                                            class="cke_combo_open"><span
                                                                                class="cke_combo_arrow"></span></span></a></span><span
                                                                    id="cke_9"
                                                                    class="cke_combo cke_combo__format cke_combo_off"
                                                                    role="presentation"><span id="cke_9_label"
                                                                                              class="cke_combo_label">Formatação</span><a
                                                                        class="cke_combo_button" title="Formatação"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_9_label" aria-haspopup="true"
                                                                        onblur="this.style.cssText = this.style.cssText;"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(12,event,this);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(13,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(11,this);return false;"><span
                                                                            id="cke_9_text"
                                                                            class="cke_combo_text cke_combo_inlinelabel">Formatação</span><span
                                                                            class="cke_combo_open"><span
                                                                                class="cke_combo_arrow"></span></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span id="cke_14"
                                                                                                                class="cke_toolbar" aria-labelledby="cke_14_label"
                                                                                                                role="toolbar"><span id="cke_14_label"
                                                                                                                                     class="cke_voice_label">Estilos Básicos</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a id="cke_15"
                                                                                                                 class="cke_button cke_button__bold cke_button_off"
                                                                                                                 title="Negrito (Ctrl+B)" tabindex="-1"
                                                                                                                 hidefocus="true" role="button"
                                                                                                                 aria-labelledby="cke_15_label"
                                                                                                                 aria-describedby="cke_15_description"
                                                                                                                 aria-haspopup="false"
                                                                                                                 onblur="this.style.cssText = this.style.cssText;"
                                                                                                                 onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                                                                                 onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                                                                                 onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                            class="cke_button_icon cke_button__bold_icon"
                                                                            style="background-image:url('');background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_15_label"
                                                                            class="cke_button_label cke_button__bold_label"
                                                                            aria-hidden="false">Negrito</span><span
                                                                            id="cke_15_description" class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                        Ctrl+B</span></a><a id="cke_16"
                                                                                            class="cke_button cke_button__italic cke_button_off"
                                                                                            title="Itálico (Ctrl+I)" tabindex="-1"
                                                                                            hidefocus="true" role="button"
                                                                                            aria-labelledby="cke_16_label"
                                                                                            aria-describedby="cke_16_description"
                                                                                            aria-haspopup="false"
                                                                                            onblur="this.style.cssText = this.style.cssText;"
                                                                                            onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                                                            onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                                                            onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                            class="cke_button_icon cke_button__italic_icon"
                                                                            style="background-image:url('');background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_16_label"
                                                                            class="cke_button_label cke_button__italic_label"
                                                                            aria-hidden="false">Itálico</span><span
                                                                            id="cke_16_description" class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                        Ctrl+I</span></a><a id="cke_17"
                                                                                            class="cke_button cke_button__strike cke_button_off"
                                                                                            title="Tachado" tabindex="-1" hidefocus="true"
                                                                                            role="button" aria-labelledby="cke_17_label"
                                                                                            aria-describedby="cke_17_description"
                                                                                            aria-haspopup="false"
                                                                                            onblur="this.style.cssText = this.style.cssText;"
                                                                                            onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                                                            onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                                                            onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                            class="cke_button_icon cke_button__strike_icon"
                                                                            style="background-image:url('');background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_17_label"
                                                                            class="cke_button_label cke_button__strike_label"
                                                                            aria-hidden="false">Tachado</span><span
                                                                            id="cke_17_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_18"
                                                                                                   class="cke_button cke_button__removeformat cke_button_off"
                                                                                                   title="Remover Formatação" tabindex="-1"
                                                                                                   hidefocus="true" role="button"
                                                                                                   aria-labelledby="cke_18_label"
                                                                                                   aria-describedby="cke_18_description"
                                                                                                   aria-haspopup="false"
                                                                                                   onblur="this.style.cssText = this.style.cssText;"
                                                                                                   onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                                                                   onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                                                                   onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                            class="cke_button_icon cke_button__removeformat_icon"
                                                                            style="background-image:url('');background-position:0 -1800px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_18_label"
                                                                            class="cke_button_label cke_button__removeformat_label"
                                                                            aria-hidden="false">Remover
                                                                        Formatação</span><span id="cke_18_description"
                                                                                               class="cke_button_label"
                                                                                               aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span id="cke_19"
                                                                                                                class="cke_toolbar" aria-labelledby="cke_19_label"
                                                                                                                role="toolbar"><span id="cke_19_label"
                                                                                                                                     class="cke_voice_label">Paragrafo</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a id="cke_20"
                                                                                                                 class="cke_button cke_button__numberedlist cke_button_off"
                                                                                                                 title="Lista numerada" tabindex="-1"
                                                                                                                 hidefocus="true" role="button"
                                                                                                                 aria-labelledby="cke_20_label"
                                                                                                                 aria-describedby="cke_20_description"
                                                                                                                 aria-haspopup="false"
                                                                                                                 onblur="this.style.cssText = this.style.cssText;"
                                                                                                                 onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                                                                                 onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                                                                                 onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                            class="cke_button_icon cke_button__numberedlist_icon"
                                                                            style="background-image:url('');background-position:0 -1440px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_20_label"
                                                                            class="cke_button_label cke_button__numberedlist_label"
                                                                            aria-hidden="false">Lista numerada</span><span
                                                                            id="cke_20_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a id="cke_21"
                                                                                                              class="cke_button cke_button__bulletedlist cke_button_off"
                                                                                                              title="Lista sem números" tabindex="-1"
                                                                                                              hidefocus="true" role="button"
                                                                                                              aria-labelledby="cke_21_label"
                                                                                                              aria-describedby="cke_21_description"
                                                                                                              aria-haspopup="false"
                                                                                                              onblur="this.style.cssText = this.style.cssText;"
                                                                                                              onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                                                                              onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                                                                              onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                            class="cke_button_icon cke_button__bulletedlist_icon"
                                                                            style="background-image:url('');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_21_label"
                                                                            class="cke_button_label cke_button__bulletedlist_label"
                                                                            aria-hidden="false">Lista sem
                                                                        números</span><span id="cke_21_description"
                                                                                            class="cke_button_label"
                                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_22"
                                                                                                   class="cke_button cke_button__outdent cke_button_disabled "
                                                                                                   title="Diminuir Recuo" tabindex="-1"
                                                                                                   hidefocus="true" role="button"
                                                                                                   aria-labelledby="cke_22_label"
                                                                                                   aria-describedby="cke_22_description"
                                                                                                   aria-haspopup="false" aria-disabled="true"
                                                                                                   onblur="this.style.cssText = this.style.cssText;"
                                                                                                   onkeydown="return CKEDITOR.tools.callFunction(32,event);"
                                                                                                   onfocus="return CKEDITOR.tools.callFunction(33,event);"
                                                                                                   onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span
                                                                            class="cke_button_icon cke_button__outdent_icon"
                                                                            style="background-image:url('');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_22_label"
                                                                            class="cke_button_label cke_button__outdent_label"
                                                                            aria-hidden="false">Diminuir Recuo</span><span
                                                                            id="cke_22_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a id="cke_23"
                                                                                                              class="cke_button cke_button__indent cke_button_off"
                                                                                                              title="Aumentar Recuo" tabindex="-1"
                                                                                                              hidefocus="true" role="button"
                                                                                                              aria-labelledby="cke_23_label"
                                                                                                              aria-describedby="cke_23_description"
                                                                                                              aria-haspopup="false"
                                                                                                              onblur="this.style.cssText = this.style.cssText;"
                                                                                                              onkeydown="return CKEDITOR.tools.callFunction(35,event);"
                                                                                                              onfocus="return CKEDITOR.tools.callFunction(36,event);"
                                                                                                              onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span
                                                                            class="cke_button_icon cke_button__indent_icon"
                                                                            style="background-image:url('');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_23_label"
                                                                            class="cke_button_label cke_button__indent_label"
                                                                            aria-hidden="false">Aumentar Recuo</span><span
                                                                            id="cke_23_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_24"
                                                                                                   class="cke_button cke_button__blockquote cke_button_off"
                                                                                                   title="Citação" tabindex="-1" hidefocus="true"
                                                                                                   role="button" aria-labelledby="cke_24_label"
                                                                                                   aria-describedby="cke_24_description"
                                                                                                   aria-haspopup="false"
                                                                                                   onblur="this.style.cssText = this.style.cssText;"
                                                                                                   onkeydown="return CKEDITOR.tools.callFunction(38,event);"
                                                                                                   onfocus="return CKEDITOR.tools.callFunction(39,event);"
                                                                                                   onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span
                                                                            class="cke_button_icon cke_button__blockquote_icon"
                                                                            style="background-image:url('');background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_24_label"
                                                                            class="cke_button_label cke_button__blockquote_label"
                                                                            aria-hidden="false">Citação</span><span
                                                                            id="cke_24_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span id="cke_25"
                                                                                                                class="cke_toolbar" aria-labelledby="cke_25_label"
                                                                                                                role="toolbar"><span id="cke_25_label"
                                                                                                                                     class="cke_voice_label">Links</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a id="cke_26"
                                                                                                                 class="cke_button cke_button__link cke_button_off"
                                                                                                                 title="Inserir/Editar Link (Ctrl+L)" tabindex="-1"
                                                                                                                 hidefocus="true" role="button"
                                                                                                                 aria-labelledby="cke_26_label"
                                                                                                                 aria-describedby="cke_26_description"
                                                                                                                 aria-haspopup="false"
                                                                                                                 onblur="this.style.cssText = this.style.cssText;"
                                                                                                                 onkeydown="return CKEDITOR.tools.callFunction(41,event);"
                                                                                                                 onfocus="return CKEDITOR.tools.callFunction(42,event);"
                                                                                                                 onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span
                                                                            class="cke_button_icon cke_button__link_icon"
                                                                            style="background-image:url('');background-position:0 -1320px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_26_label"
                                                                            class="cke_button_label cke_button__link_label"
                                                                            aria-hidden="false">Inserir/Editar
                                                                        Link</span><span id="cke_26_description"
                                                                                         class="cke_button_label"
                                                                                         aria-hidden="false">Keyboard shortcut
                                                                        Ctrl+L</span></a><a id="cke_27"
                                                                                            class="cke_button cke_button__unlink cke_button_disabled "
                                                                                            title="Remover Link" tabindex="-1" hidefocus="true"
                                                                                            role="button" aria-labelledby="cke_27_label"
                                                                                            aria-describedby="cke_27_description"
                                                                                            aria-haspopup="false" aria-disabled="true"
                                                                                            onblur="this.style.cssText = this.style.cssText;"
                                                                                            onkeydown="return CKEDITOR.tools.callFunction(44,event);"
                                                                                            onfocus="return CKEDITOR.tools.callFunction(45,event);"
                                                                                            onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span
                                                                            class="cke_button_icon cke_button__unlink_icon"
                                                                            style="background-image:url('');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_27_label"
                                                                            class="cke_button_label cke_button__unlink_label"
                                                                            aria-hidden="false">Remover Link</span><span
                                                                            id="cke_27_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span id="cke_28"
                                                                                                                class="cke_toolbar" aria-labelledby="cke_28_label"
                                                                                                                role="toolbar"><span id="cke_28_label"
                                                                                                                                     class="cke_voice_label">Inserir</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a id="cke_29"
                                                                                                                 class="cke_button cke_button__image cke_button_off"
                                                                                                                 title="Imagem" tabindex="-1" hidefocus="true"
                                                                                                                 role="button" aria-labelledby="cke_29_label"
                                                                                                                 aria-describedby="cke_29_description"
                                                                                                                 aria-haspopup="false"
                                                                                                                 onblur="this.style.cssText = this.style.cssText;"
                                                                                                                 onkeydown="return CKEDITOR.tools.callFunction(47,event);"
                                                                                                                 onfocus="return CKEDITOR.tools.callFunction(48,event);"
                                                                                                                 onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span
                                                                            class="cke_button_icon cke_button__image_icon"
                                                                            style="background-image:url('');background-position:0 -1032px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_29_label"
                                                                            class="cke_button_label cke_button__image_label"
                                                                            aria-hidden="false">Imagem</span><span
                                                                            id="cke_29_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a id="cke_30"
                                                                                                              class="cke_button cke_button__embedsemantic cke_button_off"
                                                                                                              title="Inserir Incorporação de Mídia" tabindex="-1"
                                                                                                              hidefocus="true" role="button"
                                                                                                              aria-labelledby="cke_30_label"
                                                                                                              aria-describedby="cke_30_description"
                                                                                                              aria-haspopup="false"
                                                                                                              onblur="this.style.cssText = this.style.cssText;"
                                                                                                              onkeydown="return CKEDITOR.tools.callFunction(50,event);"
                                                                                                              onfocus="return CKEDITOR.tools.callFunction(51,event);"
                                                                                                              onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span
                                                                            class="cke_button_icon cke_button__embedsemantic_icon"
                                                                            style="background-image:url('');background-position:0 -576px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_30_label"
                                                                            class="cke_button_label cke_button__embedsemantic_label"
                                                                            aria-hidden="false">Inserir Incorporação de
                                                                        Mídia</span><span id="cke_30_description"
                                                                                          class="cke_button_label"
                                                                                          aria-hidden="false"></span></a><a id="cke_31"
                                                                                                                            class="cke_button cke_button__table cke_button_off"
                                                                                                                            title="Tabela" tabindex="-1" hidefocus="true"
                                                                                                                            role="button" aria-labelledby="cke_31_label"
                                                                                                                            aria-describedby="cke_31_description"
                                                                                                                            aria-haspopup="false"
                                                                                                                            onblur="this.style.cssText = this.style.cssText;"
                                                                                                                            onkeydown="return CKEDITOR.tools.callFunction(53,event);"
                                                                                                                            onfocus="return CKEDITOR.tools.callFunction(54,event);"
                                                                                                                            onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span
                                                                            class="cke_button_icon cke_button__table_icon"
                                                                            style="background-image:url('');background-position:0 -2088px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_31_label"
                                                                            class="cke_button_label cke_button__table_label"
                                                                            aria-hidden="false">Tabela</span><span
                                                                            id="cke_31_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span id="cke_32"
                                                                                                                class="cke_toolbar" aria-labelledby="cke_32_label"
                                                                                                                role="toolbar"><span id="cke_32_label"
                                                                                                                                     class="cke_voice_label">Ferramentas</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a id="cke_33"
                                                                                                                 class="cke_button cke_button__maximize cke_button_off"
                                                                                                                 title="Maximizar" tabindex="-1" hidefocus="true"
                                                                                                                 role="button" aria-labelledby="cke_33_label"
                                                                                                                 aria-describedby="cke_33_description"
                                                                                                                 aria-haspopup="false"
                                                                                                                 onblur="this.style.cssText = this.style.cssText;"
                                                                                                                 onkeydown="return CKEDITOR.tools.callFunction(56,event);"
                                                                                                                 onfocus="return CKEDITOR.tools.callFunction(57,event);"
                                                                                                                 onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span
                                                                            class="cke_button_icon cke_button__maximize_icon"
                                                                            style="background-image:url('');background-position:0 -1488px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_33_label"
                                                                            class="cke_button_label cke_button__maximize_label"
                                                                            aria-hidden="false">Maximizar</span><span
                                                                            id="cke_33_description" class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span id="cke_34"
                                                                                                                class="cke_toolbar cke_toolbar_last"
                                                                                                                aria-labelledby="cke_34_label" role="toolbar"><span
                                                                    id="cke_34_label"
                                                                    class="cke_voice_label">Edição</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a id="cke_35"
                                                                                                                 class="cke_button cke_button__scayt cke_button_off"
                                                                                                                 title="Corretor Ortográfico" tabindex="-1"
                                                                                                                 hidefocus="true" role="button"
                                                                                                                 aria-labelledby="cke_35_label"
                                                                                                                 aria-describedby="cke_35_description"
                                                                                                                 aria-haspopup="true"
                                                                                                                 onblur="this.style.cssText = this.style.cssText;"
                                                                                                                 onkeydown="return CKEDITOR.tools.callFunction(59,event);"
                                                                                                                 onfocus="return CKEDITOR.tools.callFunction(60,event);"
                                                                                                                 onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span
                                                                            class="cke_button_icon cke_button__scayt_icon"
                                                                            style="background-image:url('');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_35_label"
                                                                            class="cke_button_label cke_button__scayt_label"
                                                                            aria-hidden="false">Correção ortográfica durante
                                                                        a digitação</span><span id="cke_35_description"
                                                                                                class="cke_button_label"
                                                                                                aria-hidden="false"></span><span
                                                                            class="cke_button_arrow"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span></span></span>
                                                    <div id="cke_1_contents" class="cke_contents cke_reset"
                                                         role="presentation" style="height: 400px;"><span id="cke_40"
                                                                                                          class="cke_voice_label">Pressione ALT+0 para
                                                        ajuda</span><iframe src="" style="width: 100%; height: 100%;"
                                                                            class="cke_wysiwyg_frame cke_reset"
                                                                            title="Editor de Rich Text, description"
                                                                            aria-describedby="cke_40" tabindex="0" allowtransparency="true"
                                                                            frameborder="0"></iframe></div><span id="cke_1_bottom"
                                                                                                                 class="cke_bottom cke_reset_all" role="presentation"
                                                                                                                 style="-moz-user-select: none;"><span id="cke_1_resizer"
                                                                                                                                                       class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                                                                                                                       title="Arraste para redimensionar"
                                                                                                                                                       onmousedown="CKEDITOR.tools.callFunction(1, event)">◢</span><span
                                                            id="cke_1_path_label" class="cke_voice_label">Caminho dos
                                                        Elementos</span><span id="cke_1_path" class="cke_path"
                                                                              role="group" aria-labelledby="cke_1_path_label"><span
                                                                class="cke_path_empty">&nbsp;</span></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#!"
                                               class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
                                            <a href="#!" id="edit-cancel-btn"
                                               class="btn btn-default waves-effect m-t-20">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- fim caminho de posts -->



                <!--Fotos-->
                <div class="tab-pane" id="tfotos" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Galeria</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services m-b-20">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!-- <div class="service-header">
                                                <a href="#">
                                                    <img src="assets/img/001.jpg" alt="img 1" class="rounded img-thumbnail">
                                                </a>
                                            </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Paisagem!</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!--
                                                                                    <div class="service-header">
                                                                                        <a href="#">
                                                                                            <img src="assets/img/002.jpg" alt="img 2" class="rounded img-thumbnail">
                                                                                        </a>
                                                                                    </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Viagem Brasilia</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-info business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <!-- <div class="service-header">
                                                <a href="#">
                                                    <img src="assets/img/003.jpg" alt="img 3" class="rounded img-thumbnail">
                                                </a>
                                            </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Viagem França</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-warning business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Índia</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">São Paulo</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Rio de Janeiro</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Adicionar mais fotos</h5>
                                </div>
                                <div class="card-block">
                                    <div id="main"
                                         style="height: 300px; width: 100%; -moz-user-select: none; background-color: rgba(0, 0, 0, 0);"
                                         _echarts_instance_="1554821896534">
                                        <div style="position: relative; overflow: hidden; width: 100px; height: 300px;">
                                            <div style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                 data-zr-dom-id="bg" class="zr-element"></div><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="0"
                                                class="zr-element"></canvas><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="1"
                                                class="zr-element"></canvas><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="_zrender_hover_"
                                                class="zr-element"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--fim das fotos-->

                <!--Amigos-->
                <div class="tab-pane" id="tamigos" role="tabpanel">
                    <div class="conteiner">

                        <!-- <div class="row"> -->
                        <!-- <div class="tab-pane active show" id="tvideos" role="tabpanel"> -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Amigos</h5>
                            </div>
                            <div class="card-block margin-rigth">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#">

                                            </a>
                                        </div>


                                        <div class="amigos-css">
                                            <!-- Grid row -->
                                            <div class="row">

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-12 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Sara</h4>
                                                            </a>
                                                            <a class="card-meta">Coworker</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>127 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2014</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
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
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Anna</h4>
                                                            </a>
                                                            <a class="card-meta">Friends</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Anna is a web designer living in US.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>83 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2012</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                            </div>
                                            <!-- Grid row -->
                                            <!-- Grid row -->
                                            <div class="row">

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-12 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Sara</h4>
                                                            </a>
                                                            <a class="card-meta">Coworker</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>127 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2014</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
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
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Anna</h4>
                                                            </a>
                                                            <a class="card-meta">Friends</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Anna is a web designer living in US.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>83 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2012</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                            </div>
                                            <!-- Grid row -->
                                            <nav class="d-flex justify-content-center mt-5 display-posts">
                                                <ul class="pagination pagination-circle pg-teal mb-0">

                                                    <!--First-->
                                                    <li class="page-item disabled">
                                                        <a class="page-link">First</a>
                                                    </li>

                                                    <!--Arrow left-->
                                                    <li class="page-item disabled">
                                                        <a class="page-link" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    <!--Numbers-->
                                                    <li class="page-item active">
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
                                                    </li>

                                                    <!--Arrow right-->
                                                    <li class="page-item">
                                                        <a class="page-link" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>

                                                    <!--Last-->
                                                    <li class="page-item">
                                                        <a class="page-link">Last</a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>

                                    </li></ul></div>
                            <!-- </div> -->
                        </div>


                        <!-- </div> -->

                    </div>

                </div>
                <!--fim Amigos-->

                <!-- videos -->
                <div class="tab-pane" id="tvideos" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Videos</h5>
                        </div>
                        <div class="card-block">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#">

                                        </a>
                                    </div>


                                    <div class="videos-css">
                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-12 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal1"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal6" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal6"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal4" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal4"></a>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->
                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-12 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal1"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal6" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal6"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal4" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal4"></a>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->
                                    </div>

                        </div>
                    </div>
                </div>
                <!-- fim  videos -->

                <!-- Posts -->

                <div class="tab-pane active" id="tposts" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text mt-2">Publique seu Posts</h5>
                            <form class="form-group" action="index.html" method="post">
                                <textarea name="posts" class="resize"></textarea>
                                <button id="edit-btn" type="button"
                                        class="btn btn-sm btn-primary waves-effect waves-light f-right">Enviar</button>
                            </form>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    Posts Publicados
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim de Posts -->
            </div>
            <!-- Fim de Posts -->
        </div>
        <!-- fim da col-lg-12 -->
    </div>
    <!-- fim da row -->



    <!--Postagens-->
    <section class="my-5 postagem-display">

        <div class="card-header border-0 font-weight-bold">Útimos Posts</div>

        <div class="d-md-flex flex-md-fill mt-4 px-1">
            <div class="d-flex justify-content-center mr-md-5">
                <img class="card-img-100 z-depth-1 mb-4" width="120" height="120"
                     src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" alt="avatar">
            </div>
            <textarea class="form-control pl-3 pt-3" id="exampleFormControlTextarea1" rows="6"
                      placeholder="Write something here..."></textarea>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary btn-md">Submit</button>
        </div>

    </section>
    <!-- Reply section (logged in user) -->
    <!--Section: Comments-->
    <section class="my-5 postagem-display">

        <!-- Card header -->
        <div class="card-header border-0 font-weight-bold">Melhores ideias</div>

        <div class="media d-block d-md-flex mt-4">
            <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                 src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" width="90" alt="Generic placeholder image">
            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="font-weight-bold mt-0">
                    <a class="text-default" href="">Miley Steward</a>
                    <a href="" class="pull-right text-default">
                        <i class="fas fa-reply"></i>
                    </a>
                </h5>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                <div class="md-form mt-4">
                    <label for="quickReplyFormComment">Your comment</label>
                    <textarea class="form-control md-textarea" id="quickReplyFormComment" rows="3"></textarea>

                    <div class="text-center my-4">
                        <button class="btn btn-default btn-sm btn-rounded" type="submit">Post</button>
                    </div>
                </div>


            </div>
        </div>
        <div class="media d-block d-md-flex mt-3">
            <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                 src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" width="90" alt="Generic placeholder image">
            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="font-weight-bold mt-0">
                    <a class="text-default" href="">Caroline Horwitz</a>
                    <a href="" class="pull-right text-default">
                        <i class="fas fa-reply"></i>
                    </a>
                </h5>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                officia deserunt mollitia animi, id est laborum et dolorum fuga.
            </div>
        </div>

        <!--Pagination -->
        <nav class="d-flex justify-content-center mt-5 display-posts">
            <ul class="pagination pagination-circle pg-teal mb-0">

                <!--First-->
                <li class="page-item disabled">
                    <a class="page-link">First</a>
                </li>

                <!--Arrow left-->
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>

                <!--Numbers-->
                <li class="page-item active">
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
                </li>

                <!--Arrow right-->
                <li class="page-item">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>

                <!--Last-->
                <li class="page-item">
                    <a class="page-link">Last</a>
                </li>

            </ul>
        </nav>
    </section>
    <!--Fim das postagens-->


</div>
<!--fim conteiner-->


@stop