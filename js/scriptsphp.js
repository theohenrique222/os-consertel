// function downloadPDF() {
//     const item = document.querySelector("#content")
//     let opt = {
//         margin: 1,
//         filename: "myfile.pdf",
//         html2canvas: { scale: 2 },
//         jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
//     };

//     html2pdf().set(opt).form(item).save();
// }

function downloadPDF() {
    var element = document.getElementById('#content');
    var opt = {
        margin:       1,
        filename:     'myfile.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        };

    // New Promise-based usage:
    html2pdf().set(opt).from(element).save();

    // Old monolithic-style usage:
    html2pdf(element, opt);
}
