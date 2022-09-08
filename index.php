<!DOCTYPE html>
<html>
<style>
    /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 200px;
        border: 1px solid #f1f1f1;
        perspective: 1000px;
        /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    /* Position the front and back side */
    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        /* Safari */
        backface-visibility: hidden;
    }

    /* Style the front side (fallback if image is missing) */
    .flip-card-front {
        background-color: #bbb;
        color: black;
    }

    /* Style the back side */
    .flip-card-back {
        background-color: dodgerblue;
        color: white;
        transform: rotateY(180deg);
    }
</style>
<header>
    <?php require "header.php" ?>
</header>

<body>
    <div class="container">
        <form>
            <div class="row" style="margin-left: 25%;">
                <div class="col-100">
                    <h1><strong>Bem vindo ao Pet Shop Fera</strong></h1>
                </div>
            </div>
            <hr>

            <div class="row" style="margin-right: 8%;">
                <hr>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/dog.png" alt="Avatar" style="width:300px;height:198px;">
                        </div>
                        <div class="flip-card-back">
                            <h1>Cães</h1>
                            <p>Architect & Engineer</p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/cats.jpg" alt="Avatar" style="width:300px;height:198px;">
                        </div>
                        <div class="flip-card-back">
                            <h1>Gatos</h1>
                            <p>Architect & Engineer</p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="image/dog_cat.jpg" alt="Avatar" style="width:300px;height:198px;">
                        </div>
                        <div class="flip-card-back">
                            <h1>Cães e Gatos</h1>
                            <p>Architect & Engineer</p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</body>

</html>