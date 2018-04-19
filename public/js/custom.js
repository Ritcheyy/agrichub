$(document).ready(function () {
    // $('select').formSelect();
    $('select').material_select();
    $(".button-collapse").sideNav();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $('.modal').modal();
});

let previewImage = (input) => {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#profile-img').css({ 'background-image': 'url(' + e.target.result + ')' });
        }

        reader.readAsDataURL(input.files[0]);
    }
}

let previewUpload1 = (input) => {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#upload1').css({ 'background-image': 'url(' + e.target.result + ')' });
        }

        reader.readAsDataURL(input.files[0]);
    }
}


let previewUpload2 = (input) => {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#upload2').css({ 'background-image': 'url(' + e.target.result + ')' });
        }

        reader.readAsDataURL(input.files[0]);
    }
}


let previewUpload3 = (input) => {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#upload3').css({ 'background-image': 'url(' + e.target.result + ')' });
        }

        reader.readAsDataURL(input.files[0]);
    }
}