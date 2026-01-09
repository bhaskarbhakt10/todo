<?php
require_once("db.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
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

                    <!-- Todo Form -->
                    <div class="todo-form">
                        <form action="submit.php" method="POST">
                            <div class="mb-3">
                                <label for="todo-item">Enter A Todo Item</label>
                                <input type="text" name="todo_item" id="todo-item"
                                    class="form-control"
                                    placeholder="Enter a todo item" required>
                            </div>

                            <button class="btn btn-primary btn-sm">Add to list</button>
                        </form>
                    </div>

                    <!-- Todo List -->
                    <div class="todo-list">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active"
                                    data-bs-toggle="pill"
                                    data-bs-target="#incomplete"
                                    type="button">Incomplete</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link"
                                    data-bs-toggle="pill"
                                    data-bs-target="#complete"
                                    type="button">Complete</button>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <!-- Incomplete -->
                            <div class="tab-pane fade show active" id="incomplete">
                                <ul>
                                    <li class="list">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="checkbox">
                                                Item 1
                                            </div>
                                            <div>
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Complete -->
                            <div class="tab-pane fade" id="complete">
                                <ul>
                                    <li class="list">
                                        <div class="completed">
                                            <input type="checkbox" checked>
                                            Item 1
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
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>
</html>
