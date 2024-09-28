document.getElementById('downloadBtn').onclick = function() {
    var element = document.getElementById('resume');
    var Name = document.getElementById('name').dataset.name;
    var opt = {
        margin:       0.05,
        filename:     `${Name}-CV.pdf`,
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    var info = `
            <html>
                <head>
                    <title>Print Content</title>
                    <link rel="stylesheet" href="assets/css/resume.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
                </head>
                <body>
                    ${element.innerHTML}
                </body>
            </html>
        `;
    // New Promise-based usage:
    html2pdf().set(opt).from(info).save();};
