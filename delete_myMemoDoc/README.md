# ボイラープレート：静的サイトver
# 流れ
1. 完成したらコピーする
2. コピーした物を提出する。
   1. その際は、不要な物は全て削除する。
   2. 削除の為の`Shell`を作るのもあり。

# 技術
- 記法
  - SCSS
  - 設計
    - [BEM](https://en.bem.info/methodology/) | official
    - posts
      - [なぜBEMが必要なのか](https://www.codegrid.net/articles/bem-basic-1/)
        - 禁忌とされる`!important`の多用を誘発する
        - etc
- ライブラリ
  - [bluma.io](https://bulma.io/documentation/elements/button/)
    - ❌軽量❌：それ程変わらない。GitHubを比較。
    - 今回の `ボタンDESIGN` が、既にある。

# 使い方
## Ruby
```sh
# This COMMAND is installed to Path at '/Users/[yourName]/.rbenv/shims/' if when be used 'rbenv'.
gem install sass
# sass
sass sass/main.scss:css/main.css --style compressed 
# scss
sass sass/main.scss:css/main.css --style compressed 
```
or 
## Node.js
`gulpfile.js`の設定が必要。
```sh
npm run sass
```
# CSSフレームワーク
1. [bootstrap](https://getbootstrap.com/docs/5.0/components/buttons/)
   1. 慣れてる。
   2. それほど重くない。
   3. デザインも`v5.0`から🍠イモ感がなくなっている。
2. [bluma.io](https://bulma.io/documentation/elements/button/)
   1. 👍: ボタンの装飾が少なくてすむ。
   2. 👎: それほど軽量CSSのみ。
   3. 👎: モーダルはあるが、閉じる動作は、自作する必要がある。
3. [Normalize.css](https://materializecss.com/buttons.html)
   1. ボタンにエフェクトがある。




    <!-- <div class="video-wrap">
      <p>Brilliant Blue</p>
      <video src="assets/movie.mp4" controls autoplay loop muted>
        <img src="images/jewellery.jpg" alt="Placeholder">
      </video>
    </div> -->