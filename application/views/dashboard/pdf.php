<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<!-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script> -->
</head>
<body>
<div class="content">

    <h1>print</h1>

</div>
    <a class="btn btn-primary" id="cmd">print</a>

<script>
    $(document).ready(function () {

        $('#cmd').click(function() {
            var options = {};
            var pdf = new jsPDF('p', 'pt', 'a4');
            pdf.addHTML($(".content"), 15, 15, options, function() {
                pdf.save('pageContent.pdf');
            });
        });
    });
</script>
</body>
</html>