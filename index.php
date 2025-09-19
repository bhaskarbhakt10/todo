<?php 

require_once 'db.php';

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="py-5">

        <div class="container">

            <h1 class="text-center mb-3 pb-2">Todo</h1>

            <div class="todo">

                <div class="todo-block">
                    <div class="todo-wrapper">

                        <div class="todo-form">

                            <form action="submit.php" method="POST">


                                <div class="mb-3">
                                    <label for="todo-item">Enter A todo Item</label>
                                    <input type="text" name="todo-item" id="todo-item" class="form-control"
                                        placeholder="Enter a todo item" required>

                                </div>
                                <div class="">
                                    <button class="btn btn-primary btn-sm">Add to list</button>
                                </div>
                            </form>

                        </div>
                        <div class="todo-list">


                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-incomplete-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-incomplete" type="button" role="tab"
                                        aria-controls="pills-incomplete" aria-selected="true">incomplete</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="pills-complete-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-complete" type="button" role="tab"
                                        aria-controls="pills-complete" aria-selected="true">complete</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active " id="pills-incomplete" role="tabpanel"
                                    aria-labelledby="pills-incomplete-tab">

                                    <div class="incomplete">

                                        <ul>
                                            <li class="list">
                                                <div class="d-flex gap-2 justify-content-between">

                                                    <div>
                                                        <span>
                                                            <input type="checkbox" name="" id="" >
                                                        </span>
                                                        Item 1
                                                    </div>
                                                    <div>
                                                        <button class="btn  btn-info btn-sm"><i
                                                                class="fa fa-pencil"></i></button>
                                                        <button class="btn  btn-outline-danger btn-sm"><i
                                                                class="fa fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="tab-pane fade show " id="pills-complete" role="tabpanel"
                                    aria-labelledby="pills-complete-tab">


                                    <div class="complete">

                                        <ul>
                                            <li class="list">
                                                <div class="d-flex gap-2 justify-content-between">

                                                    <div class="completed">
                                                         <span>
                                                            <input type="checkbox" name="" id="" checked>
                                                        </span>
                                                        Item 1
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                </div>


                            </div>



                        </div>
                    </div>

                </div>
            </div>

        </div>


    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>