<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dellyman || FAQs</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="faq_style.css">
    <title>Dashboard || FAQs</title>
</head>

<body>

    <div class="container-fluid">

        <div class="card card-info" style="margin: 10px auto', width: 10px; ">
            <div class="card-header">
                <h3 class="card-title">FAQs Questions</h3>
            </div>
            <form action="/addNew" class="form-horizontal" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Question</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="question" class="form-control" id="inputEmail3" placeholder="Question"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Answer</label>
                        <div class="col-sm-10">
                            <textarea type="password" name="answer" class="form-control" id="inputPassword3" placeholder="Answer"></textarea>
                        </div>
                    </div>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-info">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">FAQ</h3>
                            <div style="text-align: right;">
                                <a id="addNew-btn" href="/">ADD NEW</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>

                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allfaqs as $faq)
                                    <tr>
                                        <td>{{ $faq->id }}</td>
                                        <td>{{ $faq->question }}</td>
                                        <td>{{ $faq->answer }}</td>
                                        <td>
                                            <div id="faq-btns">
                                                <a href="/dashboard"><span class="badge bg-green">Edit</span></a>
                                                <a href="/dashboard"><span class="badge bg-danger">Delete</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <footer class="main-footer" style="text-align: center;">
        <!-- <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0-rc
            </div> -->
        <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Dellyman</a>.</strong> All rights reserved.
    </footer>

</body>

</html>