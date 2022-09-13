<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>00078-pet-jQuery-2</title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo">
          <a href="/">
            <img src="./img/logo-main.png">
          </a>
        </div>
        <nav class="header-menu">
          <ul>
            <li class="header-menu__item"><a href="#">test 1</a></li>
            <li class="header-menu__item"><a href="#">test 2</a></li>
            <li class="header-menu__item"><a href="#">test 3</a></li>
            <li class="header-menu__item"><a href="#">test 4</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main class="main">
    <div class="container">
      <div class="main__wrapper">
        <h1>First title</h1>
        <div class="slider-1">
          <div class="slider-1__viewport">
            <div class="slider-1__viewport-wrapper">
              <div class="slider-1__item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere obcaecati asperiores, quam cupiditate ducimus dolorum maiores! Quae nobis distinctio, pariatur praesentium animi cupiditate vero sint minus quia autem velit qui.
              </div>
              <div class="slider-1__item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere obcaecati asperiores, quam cupiditate ducimus dolorum maiores! Quae nobis distinctio, pariatur praesentium animi cupiditate vero sint minus quia autem velit qui.
              </div>
              <div class="slider-1__item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere obcaecati asperiores, quam cupiditate ducimus dolorum maiores! Quae nobis distinctio, pariatur praesentium animi cupiditate vero sint minus quia autem velit qui.
              </div>
              <div class="slider-1__item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere obcaecati asperiores, quam cupiditate ducimus dolorum maiores! Quae nobis distinctio, pariatur praesentium animi cupiditate vero sint minus quia autem velit qui.
              </div>
            </div>
          </div>
          <div class="controller">
            <span class="controller__prev">&lsaquo;</span>
            <span class="controller__next">&rsaquo;</span>
          </div>
        </div>
      </div>
      <h1>Second title</h1>
      <div class="content-1">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit accusantium tempora qui earum aspernatur libero similique, error quam quo hic porro doloribus rerum provident eligendi, ducimus architecto nam officia maiores.
        </p>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit accusantium tempora qui earum aspernatur libero similique, error quam quo hic porro doloribus rerum provident eligendi, ducimus architecto nam officia maiores.
        </p>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit accusantium tempora qui earum aspernatur libero similique, error quam quo hic porro doloribus rerum provident eligendi, ducimus architecto nam officia maiores.
        </p>
      </div>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        &copy; <?= date('Y'); ?>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="./script.js"></script>
</body>

</html>