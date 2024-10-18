document.getElementById('downloadBtn').onclick = function() {
    var element = document.getElementById('mqa_print');
    var Name = document.getElementById('name').dataset.name;
    var opt = {
        margin:       0.3,
        filename:     `${Name}-MQA.pdf`,
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    var info = `
            <html>
                <head>
                    <title>Print Content</title>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
                    <style>
                        .navbar-custom {
                            background-color: indigo;
                        }

                        #print{
                            display: none;
                        }
                    </style>
                </head>
                <body>
                    ${element.innerHTML}
                </body>
            </html>
        `;
    // New Promise-based usage:
    html2pdf().set(opt).from(info).save();};
