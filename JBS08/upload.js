$(document).ready(function () {
    $('#file').change(function(){
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
            console.log('File dipilih: ' + this.files[0].name); // Logging file yang dipilih
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Mencegah pengiriman form secara standar
        console.log('Form submit diklik'); // Logging untuk menandai form dikirim

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log('Respons sukses: ', response); // Logging respons sukses
                $('#status').html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error: ', textStatus, errorThrown); // Logging pesan error
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
