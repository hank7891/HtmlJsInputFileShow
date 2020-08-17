<!DOCTYPE html>
<html>
<head>
    <title>How to Upload Image using ckeditor in PHP</title>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <br />
    <h3 align="center">How to show content By Input File</h3>
    <br />
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- console.log Demo -->
            <p>console.log Demo</p>
            <input type="file" id="testFile" onchange="selectFile(this.files)" />
            <br /><br />
            <input type="button" class="fetch_info_by_Dom" value="fetch info by DOM" />
            <input type="button" class="fetch_info_by_jquery" value="fetch info by jquery" />
            <!-- console.log Demo -->

            <!-- showTextFile Demo -->
            <br /><br />
            <p>showTextFile Demo</p>
            <input type="file" onchange="showTextFile(this.files)" />
            <br />
            <p id="showText"></p>
            <!-- showTextFile Demo -->

            <!-- showImgFile Demo -->
            <br />
            <p>showImgFile Demo</p>
            <input type="file" onchange="showImgFile(this.files)" />
            <br />
            <img id="showImg"></img>
            <!-- showImgFile Demo -->
        </div>
    </div>
</div>
</body>
</html>

<style>
    .panel-body {
        text-align: center;
    }
</style>

<script>
// console.log Demo
$(function () {
    $('.fetch_info_by_Dom').on('click', function () {
        console.log('dom');

        var file = document.getElementById('testFile').files[0];
        console.log(file);
    });

    $('.fetch_info_by_jquery').on('click', function () {
        console.log('jquery');

        var file = $('#testFile').get(0).files[0];
        console.log(file);
    });
})

function selectFile(files) {
    console.log('change event');

    var file = files[0];
    console.log(file);
}

// showTextFile Demo
function showTextFile(files) {
    if (!files.length) {
        return false;
    }
    
    let file   = files[0];
    let reader = new FileReader();
    reader.onload = function () {
        document.getElementById('showText').innerHTML = this.result;
    };
    
    reader.readAsText(file);
}

// showImgFile Demo
function showImgFile(files) {
    if (!files.length) {
        return false;
    }
    
    let file   = files[0];
    let reader = new FileReader();
    reader.onload = function () {
        document.getElementById('showImg').src = this.result;
    };

    reader.readAsDataURL(file);
}
</script>