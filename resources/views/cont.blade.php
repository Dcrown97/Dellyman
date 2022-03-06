<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="faq_style.css">

    <title>Dellyman || Contact</title>
</head>

<body>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contacts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allContacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>
                                            <!-- <span class="badge bg-green">View message</span></a> -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactmodal{{$contact->id}}">Show Details</button>
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

    @foreach($allContacts as $contact)
    <div class="modal fade" id="contactmodal{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Customer Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-input">
                        <!-- <div class="col-sm-8" id="/contact-us">
                      User Message
                  </div> -->

                        <div class="lne">
                        </div>
                        <br><br>
                        <div class="row">

                            <div class="col-md-4 label">
                                <label for="exampleInputText-area" class="form-label">Name:</label>
                            </div>
                            <div class="col-md-8">
                                <p name="name">{{$contact->name}}</P>
                            </div>
                            <div class="col-md-4 label">
                                <label for="exampleInputText-area" class="form-label">Email:</label>
                            </div>
                            <div class="col-md-8">
                                <p name="email">{{$contact->email}}</P>
                            </div>
                            <div class="col-md-4 label">
                                <label for="exampleInputText-area" class="form-label">PhoneNumber:</label>
                            </div>
                            <div class="col-md-8">
                                <p name="phoneNumber">{{$contact->phone_number}}</P>
                            </div>
                            <div class="col-md-4 label">
                                <label for="exampleInputText-area" class="form-label">Message:</label>
                            </div>
                            <div class="col-md-8">
                                <p name="message">{{$contact->message}}</P>
                            </div>
                            <div class="col-md-4 label">

                            </div>
                            <!-- <div class="col-md-12">
                          <button type="submit" class="btn btn-primary" id="bttn">Back</button>
                      </div> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>