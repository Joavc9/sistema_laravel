$(function () {
    $("#clients").DataTable();
});

function deleteRegister(info) {
    swal({
        title: "Estás seguro",
        text: "¿ Deseas eliminar este registro ?",
        icon: 'warning',
        buttons: true,
        dangerMode: true,
        buttons: ['Cancelar', 'Eliminar!'],
    })
        .then((willDelete) => {
            if (willDelete) {
                formDelete(info);
            }
        });
}

function formDelete(info) {
    var form = $('#form-delete');
    form.attr('action', info.dataset.url);
    form.find("#id").val(info.dataset.id);
    form.find("#idClient").val(info.dataset.idclient);
    form.submit();
}