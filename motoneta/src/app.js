//ハンバーガーメニュー
$(function () {
    $('.js-toggle-sp-menu').on('click', function () {
        $(this).toggleClass('active');
        $('.js-toggle-sp-menu-target').toggleClass('active');
    });
});

//画像アップロード 出品画面用

// //「ドラッグ&ドロップ」の範囲に画像を持ってきて、その画像を表示させる
// //dragoverイベントはファイルがターゲット上にドラッグされた時に、dropイベントはドロップされた際に発火する
// //今回であればドラッグした時に余計なイベントが起きないように制御いている
//
// let obj = $('.js-trigger-label');
// obj.on('dragenter',function(e){
//    e.stopPropagation();
//    e.preventDefault();
// });
//
// //dragoverイベントはファイルがターゲット上にドラッグされた時に発火する
// obj.on('dragover',function(e){
//     e.stopPropagation();
//     e.preventDefault();
// });
//
// //dropイベントはドロップされた際に発火する
// //参考url https://blog.webcreativepark.net/2013/12/08-172957.html
//
// obj.on('drop',function (e) {
//     $(this).removeClass('register_label-file').addClass('register_label-file-active');
//     let files = e.originalEvent.dataTransfer.files;
//
//     handleFileUpload(files,obj);
// });
//
// //範囲外でマウスを外すと画像別画面で開くので、これを防ぐ
//
// $(document).on('dragenter',function (e) {
//     e.stopPropagation();
//     e.preventDefault();
// });
//
// $(document).on('dragover',function (e) {
//     e.stopPropagation();
//     e.preventDefault();
//     $(this).removeClass('register_label-file').addClass('register_label-file-active');
// });
//
// $(document).on('drop',function (e) {
//     e.stopPropagation();
//     e.preventDefault();
// });
//
// //ファイルがドロップされた時にHTML5のFormData()を使ってファイルの中身を読み込み
//
// function handleFileUpload(files,obj) {
//     for( let i = 0; i <files.length; i++ ){
//         let fd = new FormData();
//         fd.append('file',files[i]);
//
//         let status = new createStatusbar(obj);
//         status.setFileNameSize
//     }
// }

//footer固定
$(function(){
    var $ftr = $('.footer');
    if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
        $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
    }
});

//画像アップロード(webサのを読み解く)

$(function(){

    //変数
    let dropArea = $('.area_drop');
    let fileInput = $('.input-file');

    //dragoverイベントはファイルがターゲット上にドラッグされた時に発火する
    dropArea.on('dragover',function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).removeClass('register_label-file').addClass('register_label-file-active');
    });

    dropArea.on('dragleave',function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).removeClass('register_label-file-active').addClass('register_label-file');
    });

    fileInput.on('change',function (e) {
        dropArea.css('border','none');

        let file = this.files[0],
            img = $(this).siblings('.prev-img'),
            fileReader = new FileReader();

        fileReader.onload = function (event) {
            //読み込んだ画像データをimgに変換
            img.attr('src',event.target.result).show();
        };

        fileReader.readAsDataURL(file);
    });
});

//詳細画面でサムネイル入れ替え

//クリックする箇所　js-click-img
//変更ターゲット js-change-target

$('.js-click-img1').on('click',function () {

    let target = $('.js-change-target');
    target.attr({
        'src':'img/icon-women.png', //要リファクタ
        'alt':'1枚目',
    });
});

$('.js-click-img2').on('click',function () {

    let target = $('.js-change-target');
    target.attr({
        'src':'img/icon_men.png',　//要リファクタ
        'alt':'2枚目',
    });
});

$('.js-click-img3').on('click',function () {

    let target = $('.js-change-target');
    target.attr({
        'src':'img/iconrensyu.png',　//要リファクタ
        'alt':'2枚目',
    });
});