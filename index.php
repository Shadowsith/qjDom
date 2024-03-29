<!DOCTYPE html>
<html lang="de">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="./qjdom.js"></script>
    <style>
    .slider {
        box-sizing: border-box;
        overflow: hidden;
        border-color: black;
        border-style: solid;
        border-width: 1px;
    }
    </style>
    <script>
    $.ready(function(e) {
        $.each('input', function(elem) {
            console.log(elem);
        });

        $.input('#first', function(e) {
            console.log(this.value);
        });

        $.submit('#formular', function(e) {
            e.preventDefault();
            $.post({
                url: 'back.php',
                data: {
                    test: $.id('first').value,
                    blub: $.id('last').value
                },
                success: function(response) {
                    alert(response);
                },
                error: function(error) {
                    alert(error);
                }
            });
        });

        $.hover('h1', function(e) {
            console.log('hover');
        });

        $.resize(function(e) {
            console.log('resize');
        });

        $.dblclick('#dbbtn', function(e) {
            alert('db click');
        });
    });
    </script>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Test-Form</h1>
        <hr>
        <form id="formular">
            <div class="row">
                <div class="col">
                    <div class="form-group" id="fg1">
                        <label>First Name</label>
                        <input id="first" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input id="last" class="form-control">
                    </div>
                </div>
            </div>
            <input id="btn" class="btn btn-primary" type="submit" value="Absenden">
        </form>
        <button class="btn btn-danger" id="dbbtn">db click</button>
        <div class="slider" style="height: 0">
            line 1<br>
            line 2<br>
            line 3
        </div>
        <div class="slider" style="height: 0">
            line 1<br>
            line 2<br>
            line 3
        </div>
    </div>
</body>

</html>