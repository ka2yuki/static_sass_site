# ボイラープレート：静的サイトver
# ステップ
1. 完成したらコピーする
2. コピーした物を提出する。
   1. その際は、不要な物は全て削除する。
   2. 削除の為の`Shell`を作るのもあり。

# 技術
- Scss
- CSSライブラリ：[bluma.io](https://bulma.io/documentation/elements/button/)
  - 軽量
  - 今回のデザインのボタンが、既にある。

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
1. [bluma.io](https://bulma.io/documentation/elements/button/)
   1. ボタンの装飾が少なくてすむ。
   2. 軽量CSSのみ。
   3. モーダルはあるが、閉じる動作は、自作する必要がある。
2. [bootstrap](https://getbootstrap.com/docs/5.0/components/buttons/)
   1. 慣れてる。
3. [Normalize.css](https://materializecss.com/buttons.html)
   1. ボタンにエフェクトがある。




    <!-- <div class="video-wrap">
      <p>Brilliant Blue</p>
      <video src="assets/movie.mp4" controls autoplay loop muted>
        <img src="images/jewellery.jpg" alt="Placeholder">
      </video>
    </div> -->