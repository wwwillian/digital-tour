<?php
include "inc/head.php";
include "inc/header.php";
include "inc/barrapesquisa.php";
include "inc/menu.php";
?>

<!-- Reply section (logged in user) -->
<section class="my-5">

    <div class="card-header border-0 font-weight-bold">Leave a reply (logged in user)</div>

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
<section class="my-5">

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
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur.
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
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium,
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
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                    velit, sed
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
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
            deleniti
            atque corrupti
            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
            culpa
            officia deserunt mollitia animi, id est laborum et dolorum fuga.
        </div>
    </div>

    <!--Pagination -->
    <nav class="d-flex justify-content-center mt-5">
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
    <!--Pagination -->

</section>
</div>
</div>

<?php
include "inc/footer.php";
?>