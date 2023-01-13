$(document).ready(() => {
    $('.btn-create').click(() => {
        let words = $('#idwords').val();
        let size = $('#idsize').val();
        let idnum = $('#idnum').val();

        let contents = $(".contents");

        if (words == '') {
            alert('Please insert your keyword for your image!');
            return false;
        }

        let formData = `prompt=${words}&n=${idnum}&size=${size}`;
        $('.loading').addClass('fst-italic').html('loading data, please wait...');
        contents.html('');
        $.ajax({
            url: "retrieve.php",
            type: "POST",
            data: formData,
            dataType: 'json',

            success: (response) => {
                let images = response['data'];
                for (let i = 0; i < images.length; i++) {
                    let url = images[i].url;
                    let image = `<div class='col-3 px-3 py-3'><img src='${url}' class='rounded border border-1 shadow w-100'/></div>`;

                    contents.append(image);
                }
                $('.loading').remove('fst-italic').html(`Result for keyword <b>${words}</b>`);
            }
        });

    });
});