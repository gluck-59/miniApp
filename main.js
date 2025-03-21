Dropzone.autoDiscover = false;

$(document).ready(function () {
    $(".dropzone").dropzone({
        maxFiles: 2000,
        url: "post.php",
        success: function (file, response) {
            console.log(response);
        }
    });

    $(".dropzone").on("addedfile", file => {
        console.log("A file has been added");
    });
})