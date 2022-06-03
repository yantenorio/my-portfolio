<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<title>Yan Tenório</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
    
                </ul>
                <span class="navbar-text">
                    Developed by <a href="https://twitter.com">yantenorio</a>
                </span>
            </div>
        </div>
    </nav>
    
      <div class="container">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4  rounded" src="" alt="" width="72">
            <h1 class="display-5 fw-bold">Yan Tenório</h1>
            <h4>Back-end Developer</h4>
            <a href="https://github.com/yantenorio" class="link-dark">Github</a>
            <a href="https://www.linkedin.com/in/yan-tenorio-20aa951b8/" class="link-dark">LinkedIn</a>
        </div>

        <div class="container mt-5 text-center">
            <div class="col-lg-6 mx-auto">
                <h3>About Me</h3>
                <p class="lead mb-4">
                    Developer with three years studying about Computer Science who likes to code stuff
                    in PHP and
                    Javascript. My goal is to use my skills to collaborate with others and learn more about web development.
                </p>
            </div>
        </div>
        <br>

        <hr>
        <br>
        <h3 class="mb-3">Projects</h3>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="card-group">
                            <div class="card">
                                <img src="./img/framework thumb.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PHP Micro-Framework</h5>
                                    <p class="card-text">This is a simple MVC framework for study using PHP and MySQL.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="https://github.com/yantenorio/Micro-Framework" class="btn btn-dark">Show
                                        me</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./img/thumb api typescript.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Typescript API</h5>
                                    <p class="card-text">API using typescript and SOLID principles.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="https://github.com/yantenorio/api-typescript" class="btn btn-dark">Show
                                        me</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./img/my-api.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">My-API</h5>
                                    <p class="card-text">Items register API with NodeJS + Firebase and NoSQL database.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="https://github.com/yantenorio/my-api" class="btn btn-dark">Show me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <br>
        <h3 class="mb-3">Experiences</h3>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-3">
                                <h4 class="card-title">Back-end Developer</h4>
                                <h6>Metadevs</h6>
                                <p class="card-text lead mb-4">At Metadevs I developed some of the main
                                    micro-applications that support the platform, where I used some interesting
                                    technologies such as: NodeJs, Firebase and Express. I also did the database (made in
                                    MongoDB) data modeling.</p>
                                <small><strong>2021-Current</strong></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3 class="mb-3">Contact</h3>
        <div class="container mt-5">
            <form class="form-contact" action="main.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" name="email"
                                placeholder="your@email.com">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSubject">Subject</label>
                    <input type="text" class="form-control" id="inputSubject" name="subject"
                        placeholder="I wanna say hi">
                </div>

                <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" id="inputMessage" name="msg" rows="3"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-outline-dark">Send</button>
                </div>
            </form>
        </div>




        <footer class="footer">
            <p class="text-center mb-0 p-3">
                <a href="https://github.com/yantenorio/yantenorio" class="link-dark">Yan Tenório da Silva </a>© 2022
            </p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>