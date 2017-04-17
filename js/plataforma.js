
$('#vocabulary').click(function () {
    swal.setDefaults({
        confirmButtonText: 'Next &rarr;',
        showCancelButton: true,
        animation: false,
        progressSteps: ['1', '2', '3','4']
    })

    var steps = [
        {
            imageUrl: 'img/diccionary/Verbos-01.jpg',
            animation: false
        },
        {
            imageUrl: 'img/diccionary/Verbos-02.jpg',
            animation: false
        },
        {
            imageUrl: 'img/diccionary/Verbos-03.jpg',
            animation: false
        },
        {
            imageUrl: 'img/diccionary/Verbos-04.jpg',
            animation: false
        }
    ]

    swal.queue(steps).then(function (result) {
        swal.resetDefaults()
        /*
        swal({
            title: 'All done!',
            html:
            'Your answers: <pre>' +
            JSON.stringify(result) +
            '</pre>',
            confirmButtonText: 'Lovely!',
            showCancelButton: false
        })*/
    }, function () {
        swal.resetDefaults()
    })
});



