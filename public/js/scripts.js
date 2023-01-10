function toggledMenu() {
    let element = document.getElementById("wrapper");
    if (!element.classList.contains("toggled")) element.classList.add("toggled");
    else element.classList.remove("toggled");
}

$(function () {
    $("#table").DataTable({
        pageLength: 25,
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
        },
    });

    if ($("#preview", this).attr("src") != '#') {
        $(".img-preview").addClass("img-preview2");
        $(".img-preview").removeClass("img-preview");
    }

    $("#image").on("change", function () {
        $(this)
            .next(".custom-file-label")
            .html(this.files[0].name);
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#preview").attr("src", e.target.result);
            $(".img-preview").addClass("img-preview2");
            $(".img-preview").removeClass("img-preview");
        };
        reader.readAsDataURL(this.files[0]);
    });

    $('#delete-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var route = button.data('route');
        var modal = $(this)

        modal.find('#form-delete').attr('action', `${route}`);
    })

    if($('#role').val() == 3){
        $(".form-student").addClass("case-student2");
        $(".form-student").removeClass("case-student");        
    }

    $('#role').change(function () {
        if($('#role').val() == 3){
            $(".form-student").addClass("case-student2");
            $(".form-student").removeClass("case-student");
        }else{
            $(".form-student").addClass("case-student");
            $(".form-student").removeClass("case-student2");
        }
    });
});