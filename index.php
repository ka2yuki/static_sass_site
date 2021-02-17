<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <!-- code の hightlight -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/dracula.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php 
    include_once('components/header.html');
  ?>
  <div class="has-background-purple">
    <div class="is-flex">
      <div class="layout-left has-background-danger">
        left
      </div>
      <div class="layout-right has-background-primary-light">
        right
      </div>
    </div>
    <pre><code>
      &lt;div class="is-flex"&gt;
      flex. 独自調整 column.
        &lt;div class="layout-left has-backgrounddanger-light"&gt;
          left. layout-leftは独自。
        &lt;/div&gt;
        &lt;div class="layout-right has-background-primary-light"&gt;
          right. layout-right。
        &lt;/div&gt;
      &lt;/div&gt;
    </code></pre>

    <p>========================================================</p>
    <!-- 大枠 -->
    <div class="is-flex">
      <!-- 左の細いMenu -->
      <div class="layout-left has-background-danger">
        left Menu
      </div>
      <!-- Main Contents -->
      <div class="layout-right has-background-primary-light">
        <?php 
          include_once 'components/area-main.html';
          include_once 'components/area-item-list.php';
          include_once 'components/area-kaitori-group.php';
          include_once 'components/footer.php';
        ?>


      </div>
      <!-- end Main Contents -->
    </div>
  <p>========================================================</p>
    <div>
      <h1 class="title">
        Bulma
      </h1>
      <p class="subtitle">
        <ul>
          <li>
            Modern CSS framework based on <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">Flexbox</a>
          </li>
          <li>
            📖 Doc Bulma <a href="https://bulma.io/documentation/customize/with-node-sass/">With node-sass</a>: sass-CLIはシンプルだがコマンドが長い。with node.
          </li>
          <li>
            📖 Doc Bulma <a href="https://bulma.io/documentation/customize/with-sass-cli/">With sass-cli</a> : very simple command. with gem.
          </li>
        </ul>
      </p>

      <div class="field">
        <div class="control">
          <input class="input" type="text" placeholder="Input">
        </div>
      </div>

      <div class="field">
        <p class="control">
          <span class="select">
            <select>
              <option>Select dropdown</option>
            </select>
          </span>
        </p>
      </div>

      <div class="buttons">
        <a class="button is-primary">Primary</a>
        <a class="button is-link">Link</a>
      </div>

    </div>

    <hr>
    <h1>Color</h1>
    <div class="container is-fluid has-background-primary">
      <p>
        <code>has-background-primary</code>: 背景色
      </p> 
      <code>has-text-primary</code>: テキスト色
      <p class="has-background-primary-light">
        <code>has-background-primary-light</code>: 薄いPrimary背景色
      </p>
      <p>
        📖：<a href="https://bulma.io/documentation/helpers/color-helpers/" target="_blank">https://bulma.io/documentation/helpers/color-helpers/</a>
      </p>
    </div>

    <hr>
    <h1>Layout</h1>
    <div class="container is-fluid has-background-link">
      レイアウト
    </div>
    <div class="container is-fluid">
      <div class="notification is-primary">
        This container is <strong>fluid</strong>: it will have a 32px gap on either side, on any
        viewport size.
        <p>
          📖 : <a href="https://bulma.io/documentation/layout/container/"><b>bulma doc container</b></a>
        </p>
      </div>
    </div>
    <div class="container has-background-link">
      コンテイナー defo
    </div>

    <hr>

    <h1>Column</h1>
    <h2>margin なし</h2>
    <div class="columns is-gapless has-background-primary-light">
      <div class="column is-one-quarter has-background-primary">
        is-one-quarterp
      </div>
      <div class="column">
        No gap
      </div>
    </div>
    <div class="columns is-gapless has-background-primary-light">
      <div class="column is-2">
        is-2
      </div>
      <div class="column has-background-primary">
        No gap
      </div>
    </div>
    <div>
  <pre><code>
  &lt;div class="columns is-gapless has-background-danger-light"&gt;
    &lt;div class="columns is-2 has-background-danger"&gt;
      left. is-2
    &lt;/div&gt;
    &lt;div class="columns has-background-primary-light"&gt;
      right. 
    &lt;/div&gt;
  &lt;/div&gt;
  </code></pre>
    </div>
    <div class="columns is-primary is-gapless">
      <div class="column is-primary">
        First column
      </div>
      <div class="column">
        Second column
      </div>
      <div class="column">
        Third column
      </div>
      <div class="column">
        Fourth column
      </div>
    </div>
    <div class="columns">
      <div class="column is-primary">
        First column
      </div>
      <div class="column is-primary">
        Second column
      </div>
    </div>
    <p>
      📖：<a href="https://bulma.io/documentation/columns/basics/" target="_blank">columns | bulma.io</a>
    </p>


    <!-- END Bulma -->

    <!-- Header -->
    <header>
      <!-- 動画が、荒い場合 -->
      <div class="overlay-yokojima"></div>
      <!-- 動画背景 -->
      <div class="wrap">
        <!-- 背景用の動画ファイル -->
        <video id="bg-video" src="assets/kv-movie.mp4" poster="poster.jpg" autoplay  ></video>
        <!-- 背景の上に表示させたいコンテンツ -->
        <div class="contents-on-video">
          <div class="header-content-base">
            <h1 id="header-logo"><img src="assets/img/logo.png" alt="ハタオリマチ商店街"></h1>
            <div class="center-content">
              <img src="assets/img/kv.png" alt="ハタオリマチ商店街 in 山梨県富士山">
              <!-- Mouse-Animation  -->
              <a href="#" class='mouse-scroll'><span></span><span></span><p>スクロール</p></a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Contents -->
    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container w-75">
          <div class="row">
            <!-- 1 -->
            <!-- col > card -->
            <div class="col-md-12">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                  <p class="card-text">1.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->
            <!-- circle -->
            <div class="col-md-12">
              <div class="card-style-cricle-l card mb-3">
                <div class="row no-gutters">
                  <div class="card-left col-md-6">
                    <svg class="bd-placeholder-img rounded-circle" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image">
                      <title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#868e96"/>
                      <text x="43%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
                    </svg>
                  </div>
                  <div class="card-right col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->
            <!-- circle + button 1 -->
            <div class="col-md-12">
              <div class="card-style-cricle-l card mb-3">
                <div class="row no-gutters">
                  <div class="card-left col-md-6">
                    <svg class="bd-placeholder-img rounded-circle" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="43%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                  </div>
                  <div class="card-right col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <div class="btn-field col-md-6">
                        <a class="button" href="#">Button</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->
            <!-- circle + many button -->
            <div class="col-md-12">
              <div class="card-style-cricle-l card mb-3">
                <div class="row no-gutters">
                  <div class="card-left col-md-6">
                    <svg class="bd-placeholder-img rounded-circle" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#868e96"/>
                      <text x="43%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
                    </svg>
                  </div>
                  <div class="card-right col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <div class="container">
                        <!-- padding px-1 -->
                        <div class="row button-group">
                          <div class="btn-field col-md-6">
                            <a class="button" href="#">Button</a>
                          </div>
                        </div>
                        <!-- padding px-2 -->
                        <div class="row button-group">
                          <div class="btn-field col-md-6 px-2">
                            <a class="button" href="#">Button</a>
                          </div>
                          <div class="btn-field col-md-6 px-2">
                            <a class="button" href="#">Button</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- circle + many button: Reverse. -->
            <div class="col-md-12">
              <div class="card-style-cricle-r card mb-3">
                <div class="row no-gutters">
                  <div class="card-left col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <div class="container">
                        <!-- padding px-1 -->
                        <div class="row button-group">
                          <div class="btn-field col-md-6">
                            <a class="button" href="#">Button</a>
                          </div>
                        </div>
                        <!-- padding px-2 -->
                        <div class="row button-group">
                          <div class="btn-field col-md-6 px-2">
                            <a class="button" href="#">Button</a>
                          </div>
                          <div class="btn-field col-md-6 px-2">
                            <a class="button" href="#">Button</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-right col-md-6">
                    <svg class="bd-placeholder-img rounded-circle" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#868e96"/>
                      <text x="43%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <!-- 3 -->
            <!-- col > card -->
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="43%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 4 -->
            <div class="col-md-6">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                  <p class="card-text">1.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="43%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                  <p class="card-text">2.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="text-muted">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">
            <img src="/assets/img/footer-logo.png" class="footer-log-img d-inline-block align-top" alt="ハタオリマチロゴ">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="footer-content">
          <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
          <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
      </div>
      <div class="bk-top float-right">
        <a href="#">Back to top</a>
      </div>
    </footer>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
</body>

<!-- sepalate HTML file TEST -->
<!-- <div id="box"></div> -->
<!-- <script>
	var xhr = new XMLHttpRequest(),
		method = "GET",
		url = "header.html";//読み込まれるHTMLを指定
	var box=document.getElementById("box");//読み込みたい位置を指定
 
	xhr.open(method, url, true);
	xhr.onreadystatechange = function () {
		if(xhr.readyState === 4 && xhr.status === 200) {
			var restxt=xhr.responseText;//String型で取得
			box.innerHTML=restxt;//完了
		}
	};
	xhr.send();
</script> -->
</html>